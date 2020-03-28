<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('type') == '0') {
			$this->load->view('dashboard');	
		} 
		else if ($this->session->userdata('type') == '1')
		{
			$this->load->view('staff_view');
		}
		else if (!$this->session->userdata('userSession')) {
			$this->load->view('login_view');
		}
	}

	public function register()
	{
		$this->load->view('register_view');

		$username = $this->input->post('username');
		$pwd = $this->input->post('Password');
		$rePwd = $this->input->post('RePassword');
		$type = $this->input->post('type');
		$fn = $this->input->post('fn');
		$ln = $this->input->post('ln');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$department = $this->input->post('department');
		$salary = $this->input->post('salary');
		$hiring_date = $this->input->post('hDay');

		
		if ($username && $pwd && $rePwd && $type && $fn && $ln && $phone && $email && $department && $salary && $hiring_date )
		{
			$this->load->model('login_model');
			$this->login_model->addMember($username, $pwd, $rePwd, $type , $fn , $ln , $phone , $email , $department , $salary , $hiring_date);
		}
		else
		{	
				echo "<span style='color: red;'> Wrong input !! </span>";
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
		$count = $this->login_model->getUser($Username, $pwd);
		$type = $this->login_model->getType($Username);

		
		if($count == '1' && $type['type'] == '0') {
			//create session
			$type = $type['type'];
			$this->session->set_userdata('userSession', $Username);
			$this->session->set_userdata('type', $type);
			$message = 'Welcome back '.$Username;
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('/dashboard','refresh');	
		}
		else if($count == '1' && $type['type'] == '1') {
			//create session
			$type = $type['type'];
			$this->session->set_userdata('userSession', $Username);
			$this->session->set_userdata('type', $type);
			$message = 'Welcome back '.$Username;
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('/staff','refresh');	
		}
		else {
			$message = "wrong user";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	public function dashboard()
	{
		if($this->session->userdata('type') == '0'){  ///not loading _SESSION['TYPE'] yet
			$this->load->view('dashboard');
		} else {
			redirect('/index','refresh');
		}
	}

	public function logout(){
		if($this->session->userdata('userSession')) {
			$this->session->unset_userdata('userSession');
			$this->session->unset_userdata('type');
			redirect('/index','refresh');
		}
	}

	public function staff(){
		if($this->session->userdata('type') == '1') {
			$this->load->view('staff_view');
		} else
		{
			redirect('/index','refresh');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */