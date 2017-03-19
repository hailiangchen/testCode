<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useremail extends CI_Controller {

    public $_emailconfig;

    function __construct()
    {
        parent::__construct();
        $this->config->load('email_config', TRUE);
        $this->_emailconfig = $this->config->item('useremail', 'email_config');
    }

    public function index()
    {
        $this->load->library('email');
        $this->email->initialize($this->_emailconfig);

        $this->email->from('robo@pmworker.com','robo');
        $this->email->to('robo@pmworker.com');
        $this->email->subject("Email Test");
        $this->email->message("邮箱测试");
        $r=$this->email->send();
        var_dump($r);
    }
    public function  ceshi()
    {
        //echo date('Y-m-d H:i:s');

        $this->load->helper('getip');
        var_dump(get_clientIP());

        /*$arr=array('id'=>1);
        foreach ($arr as $item=>$value)
        {
            echo $item;
            echo "<br/>";
            echo $value;
        }

        $a1=array("a"=>"red","b"=>"green");
        $a2=array("c"=>"blue","b"=>"yellow");
        print_r(array_merge($a2,$a1));*/

       /* $this->load->helper('string');
        $rom=random_string('alpha',16);
        echo $rom;
        echo "<br />";
        echo md5('abcd1234',$rom);
        echo "<br/>";
        echo password_hash($rom,PASSWORD_DEFAULT);*/
    }
}
