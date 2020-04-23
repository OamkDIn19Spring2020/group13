<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');
		$this->load->model('adminFunction');
	}

	public function index(){
		redirect('./dashboard','refresh');
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

	public function request() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/request_view');
	}

	public function room() {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$result['data']=$this->adminFunction->getRoom();
		$this->load->view('/components/components-adm/room_view',$result);
	}

	// fetch data search user and customer

	public function searchCustomer() {
		$this->load->view('fetchCustomer');
	}

	public function searchStaff() {
		$this->load->view('fetchStaff');
	}

	public function searchReserv() {
		$this->load->view('fetchReservation');
	}

	public function requestStaff() {
		$this->load->view('fetchRequest');
	}

	public function fetchEdit() {
		$this->load->view('fetchEdit');
	}

	public function deleteBtn() {
		$this->load->view('delete');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */