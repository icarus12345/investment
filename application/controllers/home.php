<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 4;
    }
    public function index(){
        // $serialize_model = new serialize_model('slider');
        $sliders = $this->serialize_model->getByType('slider');
        $this->assigns->sliders = $sliders;
        $this->assigns->aTestimonial = $this->serialize_model->getByType('testimonial');
        $this->serialize_model->setType('news');
        $news_data = $this->serialize_model->getEntrys(1,5);
        $this->assigns->news_data = $news_data;
        $this->smarty->view( 'eye/01_home', $this->assigns );
    }

    

    function meetTheTeam(){
        $this->assigns->aTeams = $this->serialize_model->getByType('team');
        $this->smarty->view( 'eye/03_meet', $this->assigns );
    }
    function getNext($item){

    }
    function about(){
        $this->smarty->view( 'eye/02_about', $this->assigns );
    }
    function aboutDetail($alias=''){
        $this->serialize_model->setType('content');
        $this->assigns->content_detail = $this->serialize_model->onGetByAlias($alias);
        if($this->assigns->content_detail){
            $this->db->where('_category', 477);
            $next = $this->serialize_model->getNextItem($this->assigns->content_detail);
            $this->db->where('_category', 477);
            $prev = $this->serialize_model->getPrevItem($this->assigns->content_detail);
            $this->assigns->next = $next;
            $this->assigns->prev = $prev;
        }else show_404();
        $this->smarty->view( 'eye/04_about_detail', $this->assigns );
    }
    function patients(){
        $this->serialize_model->setType('content');
        $this->assigns->aPatients = $this->serialize_model->getByCategory(476);
        $this->smarty->view( 'eye/07_patients', $this->assigns );
    }
    function patientDetail($alias=''){
        $this->serialize_model->setType('content');
        $this->assigns->content_detail = $this->serialize_model->onGetByAlias($alias);
        if($this->assigns->content_detail){
            $this->db->where('_category', 476);
            $next = $this->serialize_model->getNextItem($this->assigns->content_detail);
            $this->db->where('_category', 476);
            $prev = $this->serialize_model->getPrevItem($this->assigns->content_detail);
            $this->assigns->next = $next;
            $this->assigns->prev = $prev;
        }else show_404();
        $this->smarty->view( 'eye/08_patient_detail', $this->assigns );
    }
    function news($page=1){
        $this->serialize_model->setType('news');
        $this->assigns->entrys = $this->serialize_model->getEntrys($page,$this->perpage);
        $this->assigns->paging = $this->_getPaging($page,$this->perpage,'/news/page/');
        $this->smarty->view( 'eye/05_news', $this->assigns );
    }
    function newsDetail($alias=''){
        $this->serialize_model->setType('news');
        $this->assigns->content_detail = $this->serialize_model->onGetByAlias($alias);
        if($this->assigns->content_detail){
            // $this->db->where('_category', 477);
            $next = $this->serialize_model->getNextItem($this->assigns->content_detail);
            // $this->db->where('_category', 477);
            $prev = $this->serialize_model->getPrevItem($this->assigns->content_detail);
            $this->assigns->next = $next;
            $this->assigns->prev = $prev;
        }else show_404();
        $this->smarty->view( 'eye/06_news_detail', $this->assigns );
    }

    function referrals(){
        $this->serialize_model->setType('content');
        $this->assigns->content_detail = $this->serialize_model->onGet(110);
        if($this->assigns->content_detail){
            
        }else show_404();
        $this->smarty->view( 'eye/09_referrals', $this->assigns );
    }

    function services($cat_alias = ''){
        foreach ($this->assigns->aServiceCate as $key => $value) {
            if($cat_alias==$value->cat_alias){
                $this->assigns->selected_cat = $value;
                $cat = $value->cat_id;
            }
        }
        $this->serialize_model->setType('services');
        $this->assigns->aServices = $this->serialize_model->getByCategory($cat);
        $this->smarty->view( 'eye/10_services', $this->assigns );
    }

    function serviceDetail($cat_alias = '',$alias=''){
        foreach ($this->assigns->aServiceCate as $key => $value) {
            if($cat_alias==$value->cat_alias){
                $this->assigns->selected_cat = $value;
                $cat = $value->cat_id;
            }
        }
        $this->serialize_model->setType('services');
        $this->assigns->content_detail = $this->serialize_model->onGetByAlias($alias);
        if($this->assigns->content_detail){
            $this->db->where('_category', $cat);
            $next = $this->serialize_model->getNextItem($this->assigns->content_detail);
            $this->db->where('_category', $cat);
            $prev = $this->serialize_model->getPrevItem($this->assigns->content_detail);
            $this->assigns->next = $next;
            $this->assigns->prev = $prev;
        }else show_404();
        $this->smarty->view( 'eye/11_service_detail', $this->assigns );
    }
    function contact(){
        $this->smarty->view( 'eye/12_contact', $this->assigns );
    }
}
