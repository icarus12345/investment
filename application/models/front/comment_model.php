<?php

class comment_model extends Core_Model {

    function __construct(){
        parent::__construct('_comment','comment_','id');
        $this->status = 'true';
    }
    function onGets($key='',$page = 1, $perpage = 2){
        $query = $this->db
            ->select('SQL_CALC_FOUND_ROWS *',false)
            ->where("comment_key", $key)
            ->where("comment_status", $this->status)
            ->limit($perpage, ($page - 1) * $perpage)
            ->get($this->table);
        return $query->result();
    }
}
?>
