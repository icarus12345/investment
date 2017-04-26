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
        $this->assigns->featuredwork = $this->serializedata_model
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
        $this->assigns->selected_menu = 'service';
        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');
        $this->assigns->services = $this->serializedata_model
            ->getByType('np-service');
        $this->smarty->view( 'np/service', $this->assigns );
    }
    public function partner(){
        $this->assigns->selected_menu = 'partner';
        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');
        $this->assigns->partner = $this->serialize_model
            ->getByType('np-partner');
        $this->smarty->view( 'np/partner', $this->assigns );
    }
    public function servicedetail($alias=""){
        $this->assigns->selected_menu = 'service';
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
        $this->assigns->featuredwork = $this->serializedata_model
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
        $this->assigns->selected_menu = 'about';
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
        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');

        $this->assigns->testimonials = $this->serialize_model
            ->getByType('np-testimonial');
        if($this->assigns->entrydetail->_id == 143){
            $this->assigns->subEntrys = $this->serialize_model
                ->getByType('np-business-regis');
        }
        if($this->assigns->entrydetail->_id == 151){
            $this->assigns->subEntrys = $this->serialize_model
                ->getByType('np-staff');
        }
        $this->smarty->view( 'np/about', $this->assigns );
    }
    function blogs($page = 1, $catalias = null){
        $this->perpage = 5;
        $this->assigns->selected_menu = 'blogs';
        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');

        $this->assigns->categorys = $this->category_model
            ->onGetByType('np-news');
        if($catalias){
            $this->assigns->catdetail = $this->category_model
                ->onGetByAlias($catalias);
            if(empty($this->assigns->catdetail)){
                show_404();
            }
            // $this->serialize_model->setCate($this->assigns->catdetail->cat_id);
            $catid = $this->assigns->catdetail->cat_id;
        }
        $this->assigns->blogs = $this->serialize_model
            ->joinCate()
            // ->setType('np-news')
            ->getByType('np-news',$page,$this->perpage,$catid);

        $this->assigns->paging = $this->_getPaging($page,$this->perpage,'blogs/page/');
        $this->smarty->view( 'np/blogs', $this->assigns );
    }
    function blogdetail($catalias = null,$alias = null){
        $this->assigns->selected_menu = 'blogs';
        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');

        $this->assigns->categorys = $this->category_model
            ->onGetByType('np-news');
        if($catalias){
            $this->assigns->catdetail = $this->category_model
                ->onGetByAlias($catalias);
            if(empty($this->assigns->catdetail)){
                show_404();
            }
            // $this->serialize_model->setCate($this->assigns->catdetail->cat_id);
            $catid = $this->assigns->catdetail->cat_id;
        }

        $this->assigns->entrydetail = $this->serialize_model
            ->setType('np-news')
            ->joinCate()
            ->onGetByAlias($alias);
        if(empty($this->assigns->entrydetail)){
            show_404();
        }else{
            $this->_addView('serialize','_',$this->assigns->entrydetail->_id);
        }
        
        $this->smarty->view( 'np/blog-detail', $this->assigns );
    }
    function project($alias=null){
        $this->assigns->selected_menu = 'project';
        $page = 1;
        $perpage = 100;
        $this->assigns->categorys = $this->category_model
            ->onGetByType('np-featured-work');
        if($alias){
            $this->assigns->catdetail = $this->category_model
                ->onGetByAlias($alias);
            if(empty($this->assigns->catdetail)){
                $this->assigns->entrydetail = $this->serializedata_model
                    ->setType('np-featured-work')
                    ->joinCate()
                    ->onGetByAlias($alias);
                if(empty($this->assigns->entrydetail)){
                    show_404();
                }else{
                    $this->assigns->images = $this->serializedata_model
                        ->setType('np-featured-work-'.$this->assigns->entrydetail->_id)
                        ->onGets();
                    $this->assigns->nextentry = $this->serializedata_model
                        ->setType('np-featured-work-'.$this->assigns->entrydetail->_id)
                        ->getNextItem($this->assigns->entrydetail);
                    $this->assigns->preventry = $this->serializedata_model
                        ->setType('np-featured-work-'.$this->assigns->entrydetail->_id)
                        ->getPrevItem($this->assigns->entrydetail);
                        
                    $this->_addView('serializedata','_',$this->assigns->entrydetail->_id);
                }
                
            }else{
                // $this->serialize_model->setCate($this->assigns->catdetail->cat_id);
                $catid = $this->assigns->catdetail->cat_id;
            }
        }
        $this->assigns->featuredwork2 = $this->serializedata_model
            ->getByType('np-featured-work',$page,$perpage,$catid);

        $this->assigns->featuredwork = $this->serializedata_model
            ->getByType('np-featured-work');
        $this->smarty->view( 'np/project', $this->assigns );
    }

}
