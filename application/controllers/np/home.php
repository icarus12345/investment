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
        $this->assigns->featuredwork = $this->serialize_model
            ->getByType('np-featured-work',1,13);
        $this->assigns->news = $this->serialize_model
            ->getByType('np-news');
        $this->assigns->sliders = $this->serialize_model
            ->getByType('np-slider');
        $this->assigns->testimonials = $this->serialize_model
            ->getByType('np-testimonial');
        $this->assigns->partners = $this->serialize_model
            ->getByType('np-partner');
        $this->assigns->welcome = $this->serialize_model
            ->setType(null)
            ->onGet(118);
        $this->smarty->view( 'np/home', $this->assigns );
    }
    public function services(){
        $this->assigns->featuredwork = $this->serialize_model
            ->getByType('np-featured-work');
        $this->assigns->services = $this->serializedata_model
            ->getByType('np-service');
        $this->smarty->view( 'np/service', $this->assigns );
    }
    public function servicedetail($alias=""){

        $this->assigns->entrydetail = $this->serializedata_model
            ->setType('np-service')
            ->onGetByAlias($alias);
        if(empty($this->assigns->entrydetail)){
            show_404();
        }
        $this->assigns->doing = $this->serializedata_model
            ->setType('np-service-doing-'.$this->assigns->entrydetail->_id)
            ->onGets();
        $this->assigns->process = $this->serializedata_model
            ->setType('np-service-process-'.$this->assigns->entrydetail->_id)
            ->onGets();
        $this->assigns->services = $this->serializedata_model
            ->setType('np-service')
            ->onGets();
        $this->assigns->featuredwork = $this->serialize_model
            ->getByType('np-featured-work');

        $this->assigns->testimonials = $this->serialize_model
            ->getByType('np-testimonial');
        $this->smarty->view( 'np/service-detail', $this->assigns );
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
    public function about($alias=''){
        $this->assigns->abouts = $this->serialize_model
            ->setType('np-about')
            // ->sort()
            ->onGets();
        if($alias==''){
            $alias = $this->assigns->abouts[0]->_alias;
        }
        $this->assigns->entrydetail = $this->serialize_model
            ->setType('np-about')
            ->onGetByAlias($alias);
        if(empty($this->assigns->entrydetail)){
            show_404();
        }
        $this->assigns->featuredwork = $this->serialize_model
            ->getByType('np-featured-work');

        $this->assigns->testimonials = $this->serialize_model
            ->getByType('np-testimonial');

        $this->smarty->view( 'np/about', $this->assigns );
    }
}
