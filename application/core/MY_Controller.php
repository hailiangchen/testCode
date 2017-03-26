<?php

/**
 * Created by PhpStorm.
 * User: robot
 * Date: 2017/3/26
 * Time: 16:57
 */
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    protected function LogInfo($data=array())
    {
        $data["addtime"]=date('Y-m-d H:i:s');
        $this->load->model("modellog");
        $this->modellog->AddLog($data);
    }

    protected function SendMail($subjet,$messg)
    {
        $this->config->load('email_config', TRUE);
        $emailConfig = $this->config->item('useremail', 'email_config');
        $this->load->library('email');
        $this->email->initialize($emailConfig);

        $this->email->from('m13841056971_1@163.com','owner');
        $this->email->to('m13841056971_1@163.com');
        $this->email->subject($subjet);
        $this->email->message($messg);
        $this->email->send();
    }
}