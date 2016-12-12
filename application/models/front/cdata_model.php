<?php

class cdata_model extends Core_Model {

    function __construct(){
        parent::__construct('cdata','data_','id');
        $this->status='true';
        $this->type='';
    }
    function onGet($id){
        $query = $this->db
            ->from('cdata')
            ->join('_category', 'data_category = cat_id', 'left')
            ->where('data_status', 'true')
            ->where('data_id', $id)
            ->where('data_type', $this->type)
            ->get();
        $data = $query->row();
        if($data){
            $data->data_data = unserialize($data->data_data);
        }
        return $data;
    }
    function onGetByAlias($alias=''){
        $strlength = strlen($alias);
        $str = "s:5:\"alias\";s:$strlength:\"$alias\"";
        $query = $this->db
            ->from('cdata')
            ->join('_category', 'data_category = cat_id', 'left')
            ->where('data_status', 'true')
            ->like('data_data', $str)
            ->where('data_type', $this->type)
            ->get();
        $data = $query->row();
        if($data){
            $data->data_data = unserialize($data->data_data);
        }
        return $data;
    }
    function getFeature($cat_value, $page = 1, $perpage = 10){
        $this->db
            // ->order_by('data_view','DESC')
            ->order_by('data_insert','DESC');
        return $this->getInCategories($cat_value, $page, $perpage); 
    }
    function getLatest($cat_value = null, $page = 1, $perpage = 10){
        $this->db
            //->order_by('data_position','ASC');
            ->order_by('data_insert','DESC');
        return $this->getInCategories($cat_value, $page, $perpage);
    }
    function getRelated($data, $page = 1, $perpage = 10){
        if($data){
            $cat_value = $data->cat_value;
            $this->db
                ->where('data_id <>', $data->data_id)
                ->where('data_insert <', $data->data_insert)
                ->order_by("cat_value like '$cat_value%'",'DESC',false);
            $this->db
                ->order_by('data_insert','DESC');
            return $this->getInCategories($cat_value, $page, $perpage);
        }
    }
    function getInCategories($cat_value = null, $page = 1, $perpage = 10) {
        if($this->type)$this->db->where('data_type', $this->type);
        if($cat_value)
            $this->db->like('cat_value', $cat_value,'after');
        $query = $this->db
            ->from('cdata')
            ->join('_category', 'data_category = cat_id', 'left')
            ->where('data_status', 'true')
            ->where('data_type', $this->type)
            //->where('data_insert <= ', date('Y-m-d H:i:s'))
            ->limit($perpage, ($page - 1) * $perpage)
            ->get();
        $data = $query->result();
        if($data){
            for ($i=0; $i < count($data); $i++) { 
                $data[$i]->data_data = unserialize($data[$i]->data_data);
            }
        }
        return $data;
    }
}
?>
