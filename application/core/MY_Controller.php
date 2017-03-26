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
}