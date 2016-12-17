<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class serialize extends CP_Controller {
	function __construct() {
        parent::__construct('serialize', '_', 'id');
        $this->load->model('dashboard/cp/serialize_model');
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
    function index(){

    }
    function viewport($unit='0000000',$type='',$sid = 0){
        $this->setAction($unit);
        $this->assigns->type = $type;
        $this->assigns->sid = $sid;
        $this->assigns->entry_setting = $this->serialize_model->onGet($sid);
        $this->smarty->view( 'dashboard/cp/serialize/viewport', $this->assigns );
    }
    function viewportonly($unit='',$Id){
        $this->setAction($unit);
        // $cates = $this->cate_model->onGetByType($type);
        // if($cates){
        //     $cates=$this->cate_model->buildTreeArray($cates);
        //     $this->assigns->cates=$cates;
        // }
        if($Id){
            $item = $this->serialize_model->onGet($Id);
            $this->assigns->item = $item;
        }
        $layout = $this->assigns->action['layout'];
        switch ($layout){
            default :
                $this->assigns->formhtml = $this->smarty->view( 'dashboard/cp/serialize/editPanel', $this->assigns, true );
        }
        $this->smarty->view( 'dashboard/cp/serialize/viewportonly', $this->assigns );
    }
    function editpanel($type=''){
        $type=$this->input->post('type');
        $this->assigns->type=$type;
        $unit=$this->input->post('unit');
        $sid=$this->input->post('sid');
        $this->setAction($unit);
        $layout=$this->assigns->action['layout'];
        $this->assigns->entry_setting = $this->serialize_model->onGet($sid);
        $cates = $this->cate_model->onGetByType($type);
        if($cates){
            $cates=$this->cate_model->buildTreeArray($cates);
            $this->assigns->cates=$cates;
        }
        $Id=$this->input->post('Id');
        if($Id){
            $item = $this->serialize_model->onGet($Id);
            $this->assigns->item = $item;
        }
        switch ($layout){
            case '1':
                $htmlreponse = $this->smarty->view( 'dashboard/cp/serialize/editPanelDashboard', $this->assigns, true );
                break;
            default :
                $htmlreponse = $this->smarty->view( 'dashboard/cp/serialize/editPanel', $this->assigns, true );
        }
        
        $output["result"] = 1;
        $output["message"]='SUCCESS !';
        $output["htmlreponse"]=$htmlreponse;
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
        
    }
    function databinding($type=''){
        $this->Core_Model->datatables_config=array(
            "table"     =>"{$this->table}",
            "select"    =>"
                SELECT SQL_CALC_FOUND_ROWS 
                    {$this->table}.{$this->prefix}id,
                    {$this->table}.{$this->prefix}title,
                    {$this->table}.{$this->prefix}insert,
                    {$this->table}.{$this->prefix}update,
                    {$this->table}.{$this->prefix}status,
                    {$this->table}.{$this->prefix}lock,
                    cat_title
                ",
            // "from"      =>"FROM `{$this->table}` LEFT JOIN _category ON (cat_id = {$this->prefix}category)",//
            "from"      =>"FROM `{$this->table}` LEFT JOIN _category ON (cat_id = `{$this->table}`.{$this->prefix}category)",
            "where"     =>"WHERE `{$this->prefix}type` = '$type'",
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
        $this->smarty->view( 'dashboard/cp/serialize/'.$src, $this->assigns );

    }
    function beforecommit(){
        // if(!empty($_POST['Params']['content_content'])){
        //     $str = str_replace('\\"', '"', $_REQUEST['Params']['content_content']);
        //     $str = str_replace('\\\'', '\'', $str);
        //     $_POST['Params']['content_content'] = $str;
        // }
        $Id = $this->input->post('Id');
        $item = $this->serialize_model->onGet($Id);
        if($item){
            $data = $item->_data;
            if(is_array($data) && isset($_POST['Params']['_data'])){
                // $_POST['Params']['_data'] = array_merge_recursive_extend($data, $_POST['Params']['_data']);
            }
        }
        if(isset($_POST['Params']['_data'])) {
            $_POST['Params']['_data'] = serialize($_POST['Params']['_data']);
        }
    }
    
}
