<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        # $this->load->model('model');
    }

	public function index() {
		$data['err_message'] = "";
		$this->load->view('index',$data);	
	}

}
