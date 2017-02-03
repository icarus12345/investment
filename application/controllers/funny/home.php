<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;
    }
    public function index(){
        $page = 1;
        $this->assigns->entrys = $this->serialize_model->getEntrys($page,$this->perpage);
        $this->assigns->paging = $this->_getPaging($page,$this->perpage);
        $this->smarty->view( 'funny/home', $this->assigns );
    }
    public function load($page=1){
        $this->assigns->entrys = $this->serialize_model->getEntrys($page,$this->perpage);
        $this->assigns->paging = $this->_getPaging($page,$this->perpage,'#/page/');
        $this->smarty->view( 'funny/home', $this->assigns );
    }
    public function image($page=1){
        $this->assigns->entrys = $this->serialize_model->getImages($page,$this->perpage);
        $this->assigns->paging = $this->_getPaging($page,$this->perpage,'#/image/page/');
        $this->smarty->view( 'funny/home', $this->assigns );
    }
    public function video($page=1){
        $this->assigns->entrys = $this->serialize_model->getVideos($page,$this->perpage);
        $this->assigns->paging = $this->_getPaging($page,$this->perpage,'#/video/page/');
        $this->smarty->view( 'funny/home', $this->assigns );
    }
    function modal(){
        $this->smarty->view( 'funny/modal', $this->assigns );
    }
}
