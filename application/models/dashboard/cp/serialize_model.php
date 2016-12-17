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
    function getByType($type=''){
        if($this->status){
            $this->db->where("{$this->prefix}status",$this->status);
        }
        $query=$this->db
            ->from('_data')
            ->join('_category','cat_id = data_category')
            ->where('data_type',$type)
            ->order_by('data_position','ASC')
            ->order_by('data_insert','ASC')
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
}
?>
