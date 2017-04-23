<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;
        $this->load->model('front/cdata_model');
        $this->cdata_model->type = 'gallery';
    }
    public function index(){
        $this->assigns->featuredwork = $this->serialize_model->getByType('np-featured-work',1,13);
        $this->assigns->news = $this->serialize_model->getByType('np-news');
        $this->assigns->sliders = $this->serialize_model->getByType('np-slider');
        $this->assigns->testimonials = $this->serialize_model->getByType('np-testimonial');
        $this->assigns->partners = $this->serialize_model->getByType('np-partner');
        $this->assigns->welcome = $this->serialize_model->setType(null)->onGet(118);
        $this->smarty->view( 'np/home', $this->assigns );
    }
    public function service(){
        $this->assigns->featuredwork = $this->serialize_model->getByType('np-featured-work');
        $this->assigns->services = $this->serializedata_model->getByType('np-service');
        $this->smarty->view( 'np/service', $this->assigns );
    }
    public function policy(){
        $this->assigns->actived_menu = 'policy';
        $this->content_model->type = '';
        $this->assigns->content_detail = $this->content_model->onGet(2);
        $this->smarty->view( 'np/policy', $this->assigns );
    }
    public function teamcondition(){
        $this->assigns->actived_menu = 'team';
        $this->content_model->type = '';
        $this->assigns->content_detail = $this->content_model->onGet(1);
        $this->smarty->view( 'np/team', $this->assigns );
    }
    public function about(){
        $this->assigns->actived_menu = 'about';
        $this->cdata_model->type = '';
        $item = $this->cdata_model->onGet(13);
        $this->assigns->cdata = $item;
        $this->assigns->testimonials = $this->image_model->onGetByType('testimonial');
        $this->smarty->view( 'np/about', $this->assigns );
    }
}
