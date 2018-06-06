<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Akademik_model', 'Akademik', TRUE);
     	// if ($this->session->userdata('login') == FALSE) {
      //       redirect('Login');
      //   }else if ($this->session->userdata('level') != "1") {
      //       redirect('Login');
      //   }
    }
    
	public function index()
	{
		$this->load->view('index.php');
		
	}

}