<?php

class serializedata_model extends Core_Model {
    public $status;
    function __construct(){
        parent::__construct('cdata','data_','id');
    }
    function setType($type=''){
        $this->type=$type;
        return $this;
    }
    function onGet($id) {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query = $this->db
                ->where("{$this->prefix}{$this->colid}", $id)
                ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->data_data = unserialize($entry->data_data);
        return $entry;
    }
    function onGets() {
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query = $this->db
                ->from($this->table)
                ->order_by($this->prefix . 'insert', 'DESC')
                ->get();
        $this->sqlLog('Get Entrys');
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->data_data = unserialize($entrys[$key]->data_data);
        }
        return $entrys;
    }
    function onGetByAlias($alias='') {
        $query = $this->db
            // ->like('_data',$str)
            ->where('data_alias',$alias)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->data_data = unserialize($entry->data_data);
        return $entry;
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
            $entrys[$key]->data_data = unserialize($entrys[$key]->data_data);
        }
        return $entrys;
    }
    function getByType($type=null,$page=1,$limit=8,$cat=0){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($type!=null)$this->db->where("{$this->prefix}type",$type);
        if($cat!=0){
            $this->db->where("{$this->prefix}category",$cat);
            $query=$this->db->join('_category','cat_id = data_category');
        }
        $query=$this->db
            ->from('cdata')
            
            ->where('data_type',$type)
            ->order_by('data_position','ASC')
            ->order_by('data_insert','ASC')
            ->limit($limit,($page-1)*$limit)
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->data_data = unserialize($entrys[$key]->data_data);
        }
        return $entrys;
    }
    function getByCategory($cat_id=''){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query=$this->db
            ->from('cdata')
            ->where('data_category',$cat_id)
            ->order_by('data_position','ASC')
            ->order_by('data_insert','ASC')
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->data_data = unserialize($entrys[$key]->data_data);
        }
        return $entrys;
    }
    function getNextItem($item){
        $query = $this->db
            ->where('data_id >',$item->data_id)
            ->limit(1)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->data_data = unserialize($entry->data_data);
        return $entry;
    }
}
?>
