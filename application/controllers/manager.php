<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends MY_Controller
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
        $userpass="51vv.userManager";
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

    public function chanagepass()
    {
        $pass=$this->input->post('pass');
        $data['id']=$this->input->post('id');

        $this->load->model('modeladmin');
        $re=$this->modeladmin->GetAdmin(array('id'=>$data["id"],'first'=>true));
        $data["userpass"]=md5($pass.$re->salt);

        $r=$this->modeladmin->UpdateAdmin(array('id'=>$data["id"],'userpass'=>$data["userpass"]));

        $datalog["record"]="修改密码";
        $datalog["recordcontent"]="修改密码为：".$pass."修改成功";
        $datalog["username"]="操作人：".$this->session->userdata("admin")->username."id：".$this->session->userdata("admin")->id;
        $this->LogInfo($datalog);
        echo json_encode(array('code'=>$r));
    }

    public function deleteuserlist()
    {
        $this->load->model('modeluser');
        $result=$this->modeluser->DeleteUserAll();

        $datalog["record"]="删除全部用户信息";
        $datalog["recordcontent"]="操作成功";
        $datalog["username"]="操作人：".$this->session->userdata("admin")->username."id：".$this->session->userdata("admin")->id;
        $this->LogInfo($datalog);
        echo json_encode(array('code'=>$result));

    }

    public function  logout()
    {
        $this->session->unset_userdata('admin');
        $datalog["record"]="退出登录";
        $datalog["recordcontent"]="成功";
        $datalog["username"]="操作人：".$this->session->userdata("admin")->username."id：".$this->session->userdata("admin")->id;
        $this->LogInfo($datalog);
        redirect(base_url('admin/login'));
    }

}