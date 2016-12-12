<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class contact extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;

    }
    public function index(){
        $this->assigns->fqa_data = $this->data_model->onGetByType('fqa');
        $this->assigns->feature_blogs = $this->content_model->getFeature(null,1,4);
        $this->smarty->view( 'investment/contact', $this->assigns );
    }
    
}
