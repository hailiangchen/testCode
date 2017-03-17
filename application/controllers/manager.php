<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        if($this->session->userdata("admin")==null)
        {
            header('HTTP/1.1 404 Not Found');
            show_404();
        }
    }
    function index()
    {

        $this->load->view('header');
        $this->load->view('Manager_main');
    }

    function welcome()
    {
        $this->load->model('modeluser');
        $data['result']=$this->modeluser->GetUser();

        $this->load->view('header');
        $this->load->view('Manager_userloginlist',$data);
    }

    function admin(){
        $this->load->model('modeladmin');
        $data['result']=$this->modeladmin->GetAdmin();

        $this->load->view("header.php");
        $this->load->view("Manager_adminlist",$data);
    }

    private function addadmin()
    {
        $userpass="admin";
        $data["username"]="admin";
        $data["salt"]=random_string('alpha',16);
        $data["userpass"]=md5($userpass.$data['salt']);
        $data["addtime"]=date('Y-m-d H:i:s');
        $data['status']=1;
        $data['beizhu']="系统管理员";
        $data["telephone"]='13555555555';
        $this->load->model('modeladmin');
        $re=$this->modeladmin->AddAdmin($data);
        var_dump($re);
    }

}