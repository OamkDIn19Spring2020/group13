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

	public function request() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-staff/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-staff/request');
		
	}

	public function mRequest() {
		$this->load->view('components/components-staff/request');

		$stuffs = $this->input->post('stuffs');
		$id = $this->session->userdata('id');
		$desc = $this->input->post('desc');
		$day = $this->input->post('dayRequest');

		$this->load->model('staffModel');
			//send data to model
			$this->staffModel->addRequest($stuffs, $id, $desc, $day);
		
	}

	// public function checkInOut(){
		
	// }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */