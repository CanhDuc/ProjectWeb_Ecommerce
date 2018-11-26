<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('manager/home_view');

	}
	public function contact()
	{
		$this->load->view('manager/contact_view');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */