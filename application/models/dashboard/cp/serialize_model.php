<?php

class serialize_model extends Core_Model {
    public $status;
    function __construct(){
        parent::__construct('serialize','_','id');
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
                ->get();
        $this->sqlLog('Get Entrys');
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function onGetByAlias($alias='') {
        $query = $this->db
            // ->like('_data',$str)
            ->where('_alias',$alias)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
    function getByType($type=null,$page=1,$limit=8,$cat=0){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        if($type!=null)$this->db->where("{$this->prefix}type",$type);
        if($cat!=0)$this->db->where("{$this->prefix}category",$cat);
        $query=$this->db
            ->from('_data')
            ->join('_category','cat_id = data_category')
            ->where('data_type',$type)
            ->order_by('data_position','ASC')
            ->order_by('data_insert','ASC')
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
            ->from('_data')
            ->where('data_category',$cat_id)
            ->order_by('data_position','ASC')
            ->order_by('data_insert','ASC')
            ->get(); 
        $entrys = $query->result();
        if($entrys) foreach ($entrys as $key => $value) {
            $entrys[$key]->_data = unserialize($entrys[$key]->_data);
        }
        return $entrys;
    }
    function getNextItem($item){
        $query = $this->db
            ->where('_id >',$item->id)
            ->limit(1)
            ->get($this->table);
        $this->sqlLog('Get Entry');
        $entry = $query->row();
        if($entry) $entry->_data = unserialize($entry->_data);
        return $entry;
    }
}
?>
