<?php

class comment_model extends Core_Model {

    function __construct(){
        parent::__construct('_comment','comment_','id');
        $this->status = 'true';
    }
    function onGets($key=''){
        $query = $this->db
            ->where("comment_key", $key)
            ->where("comment_status", $this->status)
            ->get($this->table);
        return $query->result();
    }
}
?>
