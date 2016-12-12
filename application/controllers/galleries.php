<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class galleries extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
        $this->perpage = 5;
        $this->load->model('front/cdata_model');
        $this->cdata_model->type = 'gallery';
    }
    public function index(){
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
        $this->smarty->view( 'investment/gallery', $this->assigns );
    }
    function detail($als=''){
        $item = $this->cdata_model->onGetByAlias($als);
        $this->assigns->gallery_data = $item;
        $this->smarty->view( 'investment/gallery-detail', $this->assigns );
    }
}
