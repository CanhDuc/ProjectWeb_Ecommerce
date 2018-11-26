<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetailOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');

		$this->load->model('order_model');
		$this->load->model('user_model');
		$this->load->model('product_model');
		$this->load->model('transaction_model');
	}

	public function index()
	{
		$this->load->view('manager/detailorder_view');
	}

	public function loadRecord($rowno=0){

	    // Row per page
	    $rowperpage = 6;

	    // Row position
	    if($rowno != 0){
	   		$rowno = ($rowno-1) * $rowperpage;
	    }
	 
	    // All records count
	    $allcount = $this->order_model->getrecordCount();
	    
	    // Get records
	    $order = $this->order_model->getData($rowperpage,$rowno);

	    foreach ($order as $key => $value) {
	    	$tmp = $this->product_model->getDataById($value["product_id"]);
	    	$order[$key]['product'] = json_encode($tmp);

	    	$tmp = $this->transaction_model->getDataById($value["transaction_id"]);
	    	$order[$key]['user'] = json_encode($this->user_model->getDataById($tmp[0]["user_id"]));
	    }

	    // Pagination Configuration
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;

	    // Initialize
	    $this->pagination->initialize($config);

	    // Initialize $data Array
	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $order;
	    $data['row'] = $rowno;

	    echo json_encode($data);
	 
	}

	public function checkOrder($id){

		$this->order_model->checkById($id);
		echo "OK";
	}

}

/* End of file DetailOrder.php */
/* Location: ./application/controllers/DetailOrder.php */