<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

class CI_Phpmailer extends PHPMailer {
    var $parm;
    function __construct($exceptions = false) {
        parent::__construct($exceptions);
    }
    
    function init_mail(){
        // set CharSet is utf-8
        $this->CharSet = 'utf-8';
        // telling the class to use SMTP
        $this->IsSMTP();
        // Sets SMTP class debugging on or off
        $this->SMTPDebug = 1;
        // 1 = errors and messages
        // 2 = messages only
        // enable SMTP authentication
        $this->SMTPAuth = FALSE;
        // sets the prefix to the servier
        $this->SMTPSecure = 'ssl';//ssl
        $this->Mailer  = 'smtp';
        // sets GMAIL as the SMTP server
        $this->Host = 'ns8943.dotvndns.vn';
        // set the SMTP port for the GMAIL server
        $this->Port = 465;//465;//587
        // GMAIL username
        $this->Username = "admin@linkedproperties.net";
        // GMAIL password
        $this->Password = 'RUVM1649bsfj';
        $this->SetFrom($this->Username, $this->Username);
    }

    function send_mail($to,$subject, $message, $priority = 3) {
        //mail('khuongxuantruong@gmail.com', $message, $message);
        $this->init_mail();
        $this->Priority = $priority;
        $this->Subject = $subject;
        $this->MsgHTML($message);
        //$this->AddAddress($recipient);
        $this->AddAddress($to);
        return $this->Send();
        
    }
}