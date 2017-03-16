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



        var_dump($this->_emailconfig);
    }
}
