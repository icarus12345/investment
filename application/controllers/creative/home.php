<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->assigns->sliderData = $this->serialize_model->setType('homeslider')->onGets();
        $this->smarty->view( 'creative/template', $this->assigns );
    }
}
