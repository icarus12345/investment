<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class seo extends CP_Controller {
	function __construct() {
        parent::__construct('_seo', 'seo_', 'id');
    }
    function index(){

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
    
}
