<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class fqa extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;

    }
    public function index(){
        $this->assigns->fqa_data = $this->data_model->onGetByType('fqa');
        $this->smarty->view( 'investment/fqa', $this->assigns );
    }
    
}
