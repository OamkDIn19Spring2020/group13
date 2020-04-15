<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function customer(){

		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		$this->load->view('/components-adm/customer_view');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */