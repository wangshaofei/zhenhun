<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {
	

	public function __construct(){
		parent::__construct();
	}


	public function index(){

	}

    /**
     *
     *  登陆的action
     */
	public function loginAction(){
        print_r($this->input->post());
        exit;
	}
}

?>