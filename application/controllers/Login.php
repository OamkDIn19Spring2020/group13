<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function register()
	{
		$this->load->view('register_view');

		$username = $this->input->post('username');
		$pwd = $this->input->post('Password');
		$rePwd = $this->input->post('RePassword');
		
		if ($username && $pwd && $rePwd) {
			$this->load->model('login_model');
			$this->login_model->addMember($username, $pwd, $rePwd);
		}
	}

	public function dangNhap() 
	{
		$this->load->view('login_view');

		//get the data from the view
		$Username = $this->input->post('Username');
		$pwd = $this->input->post('Password');

		//send data to model
		$this->load->model('login_model');
		$dem = $this->login_model->getUser($Username, $pwd);

		if($dem == '1') {
			//create session
			$this->session->set_userdata('userSession', $Username);
			$message = 'Welcome back '.$Username;
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('/dashboard','refresh');
		}
		else {
			$message = "wrong user";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	public function dashboard()
	{
		if($this->session->userdata('userSession')) {
			$this->load->view('dashboard');
		} else {
			redirect('/index','refresh');
		}
	}

	public function logout(){
		if($this->session->userdata('userSession')) {
			$this->session->unset_userdata('userSession');
			redirect('/index','refresh');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */