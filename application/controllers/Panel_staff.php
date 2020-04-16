<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		redirect('../Panel_staff/toDoList','refresh');
	}

	public function check(){

		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/check');
	}

	public function schedule(){

		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/schedule');
	}

	public function toDoList() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/toDoList');
		
	}

	public function history() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/history');
	}

	public function payment() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/payment');
		
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */