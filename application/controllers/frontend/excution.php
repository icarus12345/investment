<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class excution extends FE_Controller {
    function __construct() {
        parent::__construct();
        $this->contact_model = new Core_Model('_contactus','contact_','id');
    }
    function addComment(){
        $this->cmt_model = new Core_Model('_comment','comment_','id');
        $output["result"] = -1;
        $output["message"]='Fail ! Please try again .';
        $params = $this->input->post('params');
        $time = $this->session->userdata('time');
        if($time){
            if(time() - $time < 60){
                $output["message"]='Fail ! Please again';
                $wait = true;
            }
        }
        if(!$wait)
        if(
            !empty($params['comment_key']) &&
            !empty($params['comment_name']) &&
            !empty($params['comment_email']) &&
            !empty($params['comment_content'])
            ){
            $status = $this->cmt_model->onInsert($params);
            if($status){
                $output["result"] = 1;
                $output["message"]='Success !';
                $this->session->set_userdata('time', time());
            }
        } else {
            $output["message"]='Please input comment form !';
        }
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
    }
    function loadComment(){
        $key = $this->input->post('key');
        $page = (int) $this->input->post('page');
        if(!$page) $page = 1;
        $perpage = 5;
        $this->load->model('front/comment_model');
        $this->assigns->comments = $this->comment_model->onGets($key,$page,$perpage);
        $this->assigns->paging = $this->_getPaging($page,$perpage,'loadComment(%d)');
        $this->smarty->view( 'plugin/comment', $this->assigns );
    }
    function getCaptcha(){
        $output["result"] = -1;
        $this->createCaptcha(true);
        $output["captcha"] = $_SESSION['captcha']['image'];
        $this->output->set_output(json_encode($output));
    }
    function createCaptcha($re=false){
        if(!$re)
            if($_SESSION['captcha']){
                if(time()-7200 < $_SESSION['captcha']['time'])
                return;
            }
        $cap_parm = array(
            'length'  => 4,
            'img_path'  => APPPATH.'../captcha/',
            'img_url'   => '/captcha/',
            //'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => 80,
            'img_height' => 30,
            'expiration' => 7200
            );
        $this->load->helper('captcha');
        $_SESSION['captcha'] = create_captcha($cap_parm);
    }
    function sendMessage(){
        $output["result"] = -1;
        $output["message"]='Bad Request !';
        $params = $this->input->post('params');
        $time = $this->session->userdata('time');
        if($time){
            if(time() - $time < 60){
                $output["message"]='Fail ! Please try again';
                $wait = true;
            }
        }
        if(!$wait)
        if(
            !empty($params['contact_name']) &&
            !empty($params['contact_email']) &&
            !empty($params['contact_subject']) &&
            !empty($params['contact_message'])
            ){
            if($this->contact_model->onInsert($params)){
                $output["result"] = 1;
                $output["message"]='Success !';
                $this->session->set_userdata('time', time());
                $this->sendLetter();
            }else{
                $output["message"]='Fail .';
            }
        } else {
            $output["message"]='Please input request form !';
        }
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
    }

    function subcriber(){
        $output["result"] = -1;
        $output["message"]='Bad Request !';
        $params = $this->input->post('params');
        $time = $this->session->userdata('time');
        if($time){
            if(time() - $time < 60){
                $output["message"]='Fail ! Please try again';
                $wait = true;
            }
        }
        if(!$wait)
        if(
            !empty($params['subcriber_email'])
            ){
            $this->subcriber_model = new Core_Model('_subcriber','subcriber_','id');
            if($this->subcriber_model->onInsert($params)){
                $output["result"] = 1;
                $output["message"]='Success !';
                $this->session->set_userdata('time', time());
            }else{
                $output["message"]='Fail .';
            }
        } else {
            $output["message"]='Please input email !';
        }
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($output));
    }
    // private function sendMail(){
    //     $this->load->library('CI_Phpmailer');
    //     $mailer = new CI_Phpmailer();
    //     $mailer->prm = $this->setting_model->getByType('mailer');
    //     if($mailer->prm['Send Message']->Value=='true'){
    //         $this->assigns->item = $this->input->post('params');
    //         $subject = "PushClimbing - You have new request at ". date('d/m/Y');
    //         $body = $this->smarty->view( 'pushclimbing/mailbody', $this->assigns, true );
    //         $mailer->send_mail($mailer->prm['To']->Value,$subject,$body);
    //     }
    // }
    function sendMail(){
        $this->load->library('CI_Phpmailer');
        $mailer = new CI_Phpmailer();
        // $mailer->prm = $this->setting_model->getByType('mailer');
        // if($mailer->prm['Send Message']->Value=='true'){
        //     $this->assigns->item = $this->input->post('params');
        //     $subject = "PushClimbing - You have new request at ". date('d/m/Y');
        //     $body = $this->smarty->view( 'pushclimbing/mailbody', $this->assigns, true );
        //     $mailer->send_mail($mailer->prm['To']->Value,$subject,$body);
        // }
        $mailer->send_mail('khuongxuantruong@gmail.com','SUBJECT OF EMAIL','BODY OF EMAIL');
    }
    function sendLetter(){
        $params = $this->input->post('params');
        switch ($params['contact_type']) {
            case 'contact':
            case 'request':
                $this->assigns->params = $params;
                $body = $this->smarty->view( 'mailtemplate/body_contact', $this->assigns, true );
                $subject = "VIETNAM'S PROPERTY INVESTMENT - You have new request at ". date('d/m/Y');
                $this->load->library('CI_Phpmailer');
                $mailer = new CI_Phpmailer();
                $mailer->send_mail('info@linkedproperties.net',$subject,$body);
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
?>