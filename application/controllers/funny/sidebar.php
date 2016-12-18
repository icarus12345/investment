<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sidebar extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        
        $this->smarty->view( 'funny/sidebar', $this->assigns );
    }
    public function right(){
        
        $this->smarty->view( 'funny/sidebarRight', $this->assigns );
    }
}
