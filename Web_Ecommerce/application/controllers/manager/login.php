<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
}   

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('manager/Form_login');
	}
	public function valid(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('admin_model');

		$user = $this->admin_model->checkAdmin($username, $password);

		if(count($user) == 0){
			$this->load->view('errors/notify_error');
		}
		else{
			$_SESSION["admin"] = $user[0];
			$this->load->view('manager/home_view');
		}
	}

	public function logout(){
		session_unset();
		$this->load->view('manager/Form_login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */