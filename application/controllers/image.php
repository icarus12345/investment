<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class image extends FE_Controller {
    public $perpage;
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->smarty->view( 'funny/template', $this->assigns );
    }
    public function add(){
        $this->smarty->view( 'funny/addImage', $this->assigns );

    }
    public function detail($Id=''){
        $entry = $this->serialize_model->onGet($Id);
        $this->assigns->entry = $entry;
        $this->smarty->view( 'funny/image', $this->assigns );
    }
    public function onAddImage(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)) 
            $_POST = json_decode(file_get_contents('php://input'), true);
        $output["result"] = -1;
        $output["message"]='Cười cái coi ! Bad request.';
        $title = $this->input->post('title');
        $image = $this->input->post('image');
        $time = $this->session->userdata('time');
        if($time){
            if(time() - $time < 60){
                $output["message"]='Mỗi lần post bài cách nhau 1 phút. Cười cái coi !';
                $wait = true;
            }
        }
        if(!$wait)
        if(
            !empty($title) &&
            !empty($image)
            ){
            $params = array(
                '_title'     => $title,
                '_type'      => 'image',
                '_status'    => 'true',
                '_data'      => serialize(array(
                    'url'    => $image,
                    'author' => 'Cười C.c.',
                    'type'   => 'Image'
                    ))
            );
            $status = $this->serialize_model->onInsert($params);
            if($status){
                $output["result"] = 1;
                $output["message"] = 'Đăng bài thành công ! Cười cái coi !';
                $output["url"] = "#/image/detail/".$this->serialize_model->_get_last_insert_id();
                $this->session->set_userdata('time', time());
            }
        } else {
            $output["message"]='Vui lòng hoàn thành thông tin ! Cười cái coi !';
            $output["post"] = $_REQUEST;
        }
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
    }
}
