<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->smarty->view( 'funny/template', $this->assigns );
    }
}