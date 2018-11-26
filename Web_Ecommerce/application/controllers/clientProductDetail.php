<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clientProductDetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//                $this->load->model('product_model');
//                $productList = $this->product_model->getAllData();
//                
//                $productList = array("productList" => $productList);
                
                
                $this->load->model('productcategory_model');
                $root_categories = $this->productcategory_model->getRootCategories();
                $this->load->model('product_model');
                $id = $_GET['id'];
                $product = $this->product_model->getDataById($id)[0];
                
                $parameters = array("root_categories" => $root_categories, "product" => $product);
                
                
		$this->load->view('shop/product_detail', $parameters);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
