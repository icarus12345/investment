<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        // $serialize_model = new serialize_model('slider');
        $sliders = $this->serialize_model->getByType('slider');
        $this->assigns->sliders = $sliders;

        $this->smarty->view( 'eye/01_home', $this->assigns );
    }
}
