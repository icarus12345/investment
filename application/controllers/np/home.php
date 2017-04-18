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
        $this->assigns->actived_menu = 'home';
        $this->assigns->sliders = $this->image_model->onGetByType('slider');
        $sliders = $this->serialize_model->getByType('np-slider');
        $this->assigns->sliders = $sliders;

        $this->assigns->gallery_cates = $this->category_model->onGetByType($this->assigns->fecog['gallery']);
        $data = $this->cdata_model->getInCategories(null,1,100);
        foreach ($data as $value) {
            $gallery_data[] = array(
                'type'=>$value->data_category,
                'data'=>$value->data_data['thumb'],
                'url'=>'/gallery/'.$value->data_data['alias']
                );
        }
        $this->assigns->gallery_data = $gallery_data;
        $this->smarty->view( 'np/home', $this->assigns );
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
