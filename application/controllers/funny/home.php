<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->assigns->entrys = $this->serialize_model->onGets();
        $this->smarty->view( 'funny/home', $this->assigns );
    }
    function modal(){
        $this->smarty->view( 'funny/modal', $this->assigns );
    }
}
