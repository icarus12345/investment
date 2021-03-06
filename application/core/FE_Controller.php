<?php
class FE_Controller extends CI_Controller {
    public $assigns;
    public function __construct() {
        parent::__construct();
        $this->smarty->caching = false;
        $this->assigns = new stdClass();
        $this->load->library('pagination');
        $this->load->model('front/category_model');
        $this->load->model('front/image_model');
        $this->load->model('front/product_model');
        $this->load->model('front/album_model');
        $this->load->model('front/content_model');
        $this->load->model('front/data_model');
        $this->assigns->fecog = array(
            'blog'=> 'blog',
            'partner'=> 'partner',
            'gallery'=> 'gallery',
            'investment'=> 'investment',
            'service'=> 'service',
        );
        $this->content_model->type = $this->assigns->fecog['blog'];
        $this->assigns->settting_data = $this->data_model->loadData('scake');
        if(!$this->input->is_ajax_request()){
            $this->assigns->blog_cates = $this->category_model->onGetByType($this->assigns->fecog['blog']);
            $this->assigns->investment_cates = $this->category_model->onGetByType($this->assigns->fecog['investment']);
            $this->assigns->service_cates = $this->category_model->onGetByType($this->assigns->fecog['service']);
            $this->assigns->partners = $this->image_model->onGetByType($this->assigns->fecog['partner']);
            $this->assigns->feature_blogs = $this->content_model->getFeature(null,1,6);
        }

        // $pos = strpos($_SERVER['SERVER_NAME'], 'en.');
        // if ($pos === false) {
        //     $this->assigns->lang = 'vi';
        // }else{
        //     $this->assigns->lang = 'en';
        // }
        // $this->iLanguage =new CI_Language();
        // $this->assigns->languages = $this->iLanguage->load('all',$this->assigns->lang,true);
        
    }
    function loadSeo($seo_key=''){
        $query = $this->db
            ->where("seo_key", $seo_key)
            ->get('_seo');
        $this->assigns->seo = $query->row();
    }
    
    function nothing(){}
    function _addView($table='',$prefix='',$id){
        if($_SESSION["addviews"][date('Y-m-d-H-i')]["$table$id"]) return;
        $_SESSION["addviews"][date('Y-m-d-H-i')]["$table$id"] = 1;
        $this->db->set($prefix.'view',$prefix."view +1",false)
            ->where($prefix.'id',$id)
            ->update($table);
        $this->load->model('dashboard/cp/chart_model');
        $this->chart_model->add($table,$id);
    }
    function _getPaging($page=1,$perpage=10,$function=''){
        $query = $this->db->query('SELECT FOUND_ROWS() AS `found_rows`;');
        $tmp = $query->row_array();
        $total_rows = $tmp['found_rows'];
        $config['is_ajax_paging'] = $this->input->is_ajax_request();
        $config['paging_function'] = $function;
        $config['base_url'] = $function;
        $config['first_url'] = "";
        $config['suffix'] = '';
        $config['total_rows'] = $this->assigns->total_rows = $total_rows;
        $config['per_page'] = $perpage;
        $config['cur_page'] = $page;
        $config['num_links'] = 3;
        $config['use_page_numbers'] = true;
        // $config['uri_segment'] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '«';
        // $config['first_link'] = false;
        $config['first_tag_open'] = '<li class="page first">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '»';
        // $config['last_link'] = false;
        $config['last_tag_open'] = '<li class="page last">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fa fa-arrow-right"></i>';
        $config['next_tag_open'] = '<li class="page prev">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-arrow-left"></i>';
        $config['prev_tag_open'] = '<li class="page next">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
}
?>