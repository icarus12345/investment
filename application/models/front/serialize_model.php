<?php

class serialize_model extends Core_Model {
    public $status;
    function __construct($type=false){
        parent::__construct('serialize','_','id');
        $this->status='true';
        $this->type=$type;
    }
    function setType($type=''){
        $this->type=$type;
        return $this;
    }
    function onGet($id) {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($this->type){
            $this->db->where("{$this->prefix}type", $this->type);
        }
        $query = $this->db
            ->where("{$this->prefix}{$this->colid}", $id)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
    function onGets() {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($this->type){
            $this->db->where("{$this->prefix}type", $this->type);
        }
        $query = $this->db
            ->from($this->table)
            ->order_by($this->prefix . 'insert', 'DESC')
            ->get();
        $this->sqlLog('Get Entrys');
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function onGetByAlias($alias='') {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($this->type){
            $this->db->where("{$this->prefix}type", $this->type);
        }
        $query = $this->db
            // ->like('_data',$str)
            ->where("{$this->prefix}alias",$alias)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
    function getVideos($page=1,$limit=8, $cat = 0){
        $str = "s:4:\"type\";s:7:\"youtube\"";
        $this->db->like('_data',$str);
        return $this->getEntrys($page,$limit, $cat);
    }
    function getImages($page=1,$limit=8, $cat = 0){
        $str = "s:4:\"type\";s:5:\"image\"";
        $this->db->like('_data',$str);
        return $this->getEntrys($page,$limit, $cat);
    }
    function getEntrys($page=1,$limit=8, $cat = 0){
        if($cat!=0){
            $this->db
                ->select("SQL_CALC_FOUND_ROWS {$this->table}.*,cat_title,cat_alias",false)
                ->join('_category','cat_id = _category');
        }else{
            $this->db
                ->select("SQL_CALC_FOUND_ROWS {$this->table}.*",false);
        }
        $query=$this->db
            ->from($this->table)
            ->where("{$this->prefix}type", $this->type)
            ->where("{$this->prefix}status", $this->status)
            ->order_by("{$this->prefix}insert",'DESC')
            ->limit($limit,($page-1)*$limit)
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function getByType($type=null,$page=1,$limit=8,$cat=0){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($type!=null)$this->db->where("{$this->prefix}type",$type);
        if($cat!=0){
            $this->db
                ->join('_category','cat_id = _category')
                ->where("{$this->prefix}category",$cat);
        }
        $query=$this->db
            ->from($this->table)
            ->order_by('_insert','DESC')
            ->limit($limit,($page-1)*$limit)
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function getByCategory($cat_id=null){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $this->db
            ->select("SQL_CALC_FOUND_ROWS {$this->table}.*,cat_title,cat_alias",false)
            ->join('_category','cat_id = _category','left');
        if($cat_id!==null){
            $this->db->where("{$this->prefix}category",$cat_id);
        }
        $query=$this->db
            ->from($this->table)
            // ->where('_category',$cat_id)
            ->where('_type', $this->type)
            ->order_by('_insert','ASC')
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function getNextItem($item){
        $query = $this->db
            ->where('_id >',$item->_id)
            ->from($this->table)
            ->where('_type', $this->type)
            ->order_by('_id','ASC')
            ->limit(1)
            ->get();
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
    function getPrevItem($item){
        $query = $this->db
            ->where('_id <',$item->_id)
            ->from($this->table)
            ->where('_type', $this->type)
            ->order_by('_id','DESC')
            ->limit(1)
            ->get();
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
}
?>
