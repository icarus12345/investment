<?php

class serialize_model extends Core_Model {
    public $status;
    function __construct($type='funny'){
        parent::__construct('serialize','_','id');
        $this->status='true';
        $this->type=$type;
    }
    function setType($type=''){
        $this->type=$type;
    }
    function onGet($id) {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query = $this->db
            ->where("{$this->prefix}{$this->colid}", $id)
            ->where('_type', $this->type)
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
        $query = $this->db
            ->from($this->table)
            ->order_by($this->prefix . 'insert', 'DESC')
            ->where('_type', $this->type)
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
        $strLength = strlen($alias);
        $str = "s:5:\"alias\";s:$strLength:\"$alias\"";
        $query = $this->db
            ->like('_data',$str)
            ->where('_type', $this->type)
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
                ->join('_category','cat_id = _category')
                ->where("{$this->prefix}category",$cat);
        }
        $query=$this->db
            ->select("SQL_CALC_FOUND_ROWS {$this->table}.*,cat_title",false)
            ->from($this->table)
            ->where('_type', $this->type)
            ->where('_status', $this->status)
            ->order_by('_insert','DESC')
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
    function getByCategory($cat_id=''){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query=$this->db
            ->from($this->table)
            ->where('_category',$cat_id)
            ->where('_type', $this->type)
            ->order_by('_insert','ASC')
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
}
?>
