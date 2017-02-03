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
    public function preview(){
        $apikey = '1277df3dc8367f8fa8015d';
        $video_url = 'http://img-9gag-fun.9cache.com/photo/aAwvmzL_460sv.mp4';
        $url = 'http://cdn.iframe.ly/api/oembed?url='.urlencode($video_url).'&key='.$apikey;
        echo $url;
        $info = get_data($url);
        var_dump($info);

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
        $url = $this->input->post('url');
        $type = $this->input->post('type');
        $time = $this->session->userdata('time');
        if($time){
            if(time() - $time < 30){
                $output["message"]='Mỗi lần post bài cách nhau 30 giây. Cười cái coi !';
                $wait = true;
            }
        }
        $img_formats = array("png", "jpg", "jpeg", "gif", "tiff");  
        if(!$wait)
        if(
            !empty($title) &&
            !empty($url)
            ){
            if($type == 'youtube'){
                $params = array(
                    '_title'     => $title,
                    '_type'      => 'funny',
                    '_status'    => 'true',
                    '_data'      => serialize(array(
                        'url'    => $url,
                        'author' => 'Cười C.c.',
                        'type'   => 'youtube',
                        'id'     => $this->input->post('id')
                        ))
                );
                $status = $this->serialize_model->onInsert($params);
            }else{
                $path_info = pathinfo($url);
                if (in_array(strtolower($path_info['extension']), $img_formats)) {
                    // image
                    $params = array(
                        '_title'     => $title,
                        '_type'      => 'funny',
                        '_status'    => 'true',
                        '_data'      => serialize(array(
                            'url'    => $url,
                            'author' => 'Cười C.c.',
                            'type'   => 'Image'
                            ))
                    );
                    $status = $this->serialize_model->onInsert($params);
                }
            }
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
