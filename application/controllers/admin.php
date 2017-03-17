<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function  login()
    {
        $this->load->view('adminlogin');
    }

   public function loginForm()
   {
       $data['username']=$this->input->post('username');
       $data['userpass']=$this->input->post('password');

       $this->load->model('modeladmin');
       $re=$this->modeladmin->GetAdmin(array('username'=>$data['username'],'first'=>true));

        $p1=md5($data['userpass'].$re->salt);
        if($p1==$re->userpass)
        {
            $this->session->set_userdata("admin",$re);
             echo json_encode(array('code'=>"ok",'url'=>base_url('manager/index')));
        }else{
            echo json_encode(array('code'=>"error"));
        }



   }
}