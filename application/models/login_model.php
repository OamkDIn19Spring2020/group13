<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->database();
	}

	public function addMember($username, $pwd, $rePwd, $type , $fn , $ln , $phone , $email , $department , $salary) 
	{
		// check that already exist the username?
		$this->db->where('username', $username);
		$countUser = $this->db->get('register_tr2k')->num_rows();

		if ($pwd != $rePwd) {
			echo "<span style='color: red;'> Password is not the same !! </span>";
		}
		else if ($countUser == '0')
		{
			$message = "<span style='color: red;'> Register success !! </span>";
			$object = array('username' => $username
							,'password' => $pwd
							,'type' => $type
							,'firstname' => $fn
							,'lastname' => $ln
							,'telephone' => $phone
							,'email' => $email
							,'department' => $department
							,'salary' => $salary
							
						);
			$this->db->insert('register_tr2k', $object);
			redirect('./index','refresh');
			echo "<script type='text/javascript'>alert('$message');</script>"; 
		}
		else
		{
			echo "<span style='color: red;'> Username exist !! </span>";
		}
	}

	public function getUser($Username, $pwd)
	{
		$this->db->where('username', $Username);
		$this->db->where('password', $pwd);
		$count = $this->db->get('register_tr2k')->num_rows();
		return $count;
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */