<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function check(){

		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		$this->load->view('/components-adm/customer_view');
	}

	public function schedule(){

		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		$this->load->view('/components-adm/staff_view');
	}

	public function toDoList() {
		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		$this->load->view('/components-adm/reservation');
		
	}

	public function history() {
		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		
	}

	public function payment() {
		$this->load->view('/components-adm/header_adm');
		$this->load->view('/components-adm/navbar');
		$this->load->view('/components-adm/view');
		
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */