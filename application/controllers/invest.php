<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class invest extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->content_model->type = $this->assigns->fecog['investment'];
    }
    public function index(){
        $this->assigns->actived_menu = 'investing';
        $this->assigns->fqa_data = $this->data_model->onGetByType('fqa');
        $this->assigns->feature_blogs = $this->content_model->getFeature(null,1,4);
        $this->smarty->view( 'investment/invest', $this->assigns );
    }
    function detail($als=""){
        $this->assigns->actived_menu = 'investing';
        foreach ($this->assigns->investment_cates as $value) {
            if($value->cat_alias == $als){
                $this->assigns->category = $value;
            }
        }
        $contents = $this->content_model->getInCategories($this->assigns->category->cat_value,1,100);
        foreach ($contents as $key => $value) {
            $titles = explode(" ", $value->content_title);
            $contents[$key]->title = $titles[0] . ' ';
            unset($titles[0]);
            $contents[$key]->title .= '<span>' . implode(' ', $titles) . '</span>';
        }
        
        $this->assigns->contents = $contents;
        $this->smarty->view( 'investment/invest-detail', $this->assigns );
    }
    function service($als=''){
        $this->assigns->actived_menu = 'service';
        $this->content_model->type = $this->assigns->fecog['service'];
        foreach ($this->assigns->service_cates as $value) {
            if($value->cat_alias == $als){
                $this->assigns->category = $value;
            }
        }
        $contents = $this->content_model->getInCategories($this->assigns->category->cat_value,1,100);
        
        $this->assigns->step_data = $this->data_model->onGetByType('guide');
        $this->assigns->contents = $contents;
        $this->smarty->view( 'investment/service-detail', $this->assigns );
    }
}
