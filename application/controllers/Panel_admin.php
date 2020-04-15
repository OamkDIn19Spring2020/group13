<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function customer(){

		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/customer_view');
	}

	public function staff(){

		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/staff_view');
	}

	public function reservation() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/reservation');
		
	}

	public function payment() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		
	}

	public function room() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');	
	}

	// fetch data search user and customer

	public function searchCustomer() {
		$this->load->view('fetchCustomer');
	}

	public function searchStaff() {
		$this->load->view('fetchStaff');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */