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

        
    }

    function ENSLNAHGNIGL383()
    {
        $this->load->view('header');
        $this->load->view('Manager_main');
    }
    
    function welcome()
    {
        $this->load->model('modeluser');
        $data['result']=$this->modeluser->GetUser();

        $this->load->view('header');
        $this->load->view('Manager_adminlist',$data);
    }

}