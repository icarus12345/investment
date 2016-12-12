<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class blog extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;
        $this->assigns->actived_menu = 'blogs';
    }
    public function index(){
        $this->assigns->site = array(
            'title'=>'',
            'desc'=>'',
            'image'=>''
        );
        $this->page(1);
    }
    function month($year = '',$month = '', $p = 1){
        $this->assigns->by='time';
        $this->assigns->time="$year-$month";
        $this->db
            ->where("MONTH(content_insert)",$month, false)
            ->where("YEAR(content_insert)",$year, false);
        $this->assigns->list_blogs = $this->content_model->getLatest(null,$p,$this->perpage);
        $this->assigns->paging = $this->_getPaging($p,$this->perpage,"/blogs/$year-$month/page/");
        $this->smarty->view( 'investment/blog', $this->assigns );
    }
    function route($als='', $p = 1){
        foreach ($this->assigns->blog_cates as $key => $value) {
            if($value->cat_alias == $als){
                $this->category($value,$p);
                return;
            }
        }
        $this->detail($als);
    }
    function detail($als=''){
        $this->assigns->by='cat';
        $this->assigns->blog_detail = $this->content_model->onGetByAlias($als);
        foreach ($this->assigns->blog_cates as $key => $value) {
            if($this->assigns->blog_detail && $value->cat_id == $this->assigns->blog_detail->content_category){
                $this->assigns->category = $value;
            }
        }
        $this->smarty->view( 'investment/blog-detail', $this->assigns );
    }
    function category($cat=null,$p=1){
        $this->assigns->category = $cat;
        $this->assigns->by='cat';
        $this->assigns->list_blogs = $this->content_model->getLatest($cat->cat_value,$p,$this->perpage);
        $this->assigns->paging = $this->_getPaging($p,$this->perpage,"/blogs/$cat->cat_alias/page/");
        $this->smarty->view( 'investment/blog', $this->assigns );
    }
    function page($p=1){
        $this->assigns->by='cat';
        $this->assigns->list_blogs = $this->content_model->getLatest(null,$p,$this->perpage);
        $this->assigns->paging = $this->_getPaging($p,$this->perpage,'/blogs/page/');
        $this->smarty->view( 'investment/blog', $this->assigns );
    }
    
}
