<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class seo extends CP_Controller {
	function __construct() {
        parent::__construct('_seo', 'seo_', 'id');
    }
    function index(){

    }
    private function setAction($unit){
        $this->assigns->unit = $unit;
        $arr = str_split($unit);
        $action['add'] = (bool)$arr[0];
        $action['edit'] = (bool)$arr[1];
        $action['delete'] = (bool)$arr[2];
        $action['ispopup'] = (bool)$arr[3];
        $action['layout'] = $arr[4];
        $action['col'] = max((int)$arr[5],3);
        $this->assigns->action = $action;
    }
    function viewport($unit='00000',$type=''){
        $this->setAction($unit);
        $this->assigns->type = $type;
        $this->smarty->view( 'dashboard/cp/seo/viewport', $this->assigns );
    }
    function editpanel($seo_key=''){
        $seo_key=$this->input->post('seo_key');
        $layout=$this->input->post('layout');
        $this->assigns->seo_key=$seo_key;
        if($seo_key){
            $query = $this->db
                    ->where("seo_key", $seo_key)
                    ->get('_seo');
            $this->assigns->item = $query->row();
        }
        $htmlreponse = $this->smarty->view( 'dashboard/cp/seo/editPanel', $this->assigns, true );
        
        $output["result"] = 1;
        $output["message"]='SUCCESS !';
        $output["htmlreponse"]=$htmlreponse;
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
        
    }
    function databinding(){
        $this->Core_Model->datatables_config=array(
            "table"     =>"{$this->table}",
            "select"    =>"
                SELECT SQL_CALC_FOUND_ROWS 
                    {$this->table}.{$this->prefix}id,
                    {$this->table}.{$this->prefix}social_title,
                    {$this->table}.{$this->prefix}key,
                    {$this->table}.{$this->prefix}insert,
                    {$this->table}.{$this->prefix}update
                ",
            "from"      =>"FROM `{$this->table}` ",
            "order_by"  =>"ORDER BY `{$this->prefix}insert` DESC",
            "columnmaps"=>array(
                
            ),
            "filterfields"=>array(

            )
        );
        $output = $this->Core_Model->jqxBinding();
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
    }
    function loadscript($src='',$unit='00000'){
        $this->setAction($unit);
        $this->output->set_header('Content-type: application/x-javascript');
        $this->smarty->view( 'dashboard/cp/seo/'.$src, $this->assigns );

    }
}
