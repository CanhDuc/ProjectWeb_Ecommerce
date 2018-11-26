<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orderListController extends CI_Controller {

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
                
                
//                $this->load->model('productcategory_model');
//                $root_categories = $this->productcategory_model->getRootCategories();
//                $this->load->model('product_model');
//                if(!isset($_GET['category_id'])){
//                    
//                    $product_list = $this->product_model->getAllData();
//                }
//                else{
//                    
//                    $product_list = $this->product_model->getDataByCategory($_GET['category_id']);
//                }
//                
//                
//                $parameters = array("root_categories" => $root_categories, "product_list" => $product_list);
//                
//                
//		$this->load->view('shop/home', $parameters);
                $this->load->model('temporary_order_model'); // Don hang tam thoi
                

                session_start();
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    
                    if (isset($_POST['temp_orders'])) 
                    {
                        if(isset($_SESSION["orderList"]) && (count($_SESSION["orderList"]) > 0)){
                            foreach($_POST['temp_orders'] as $temp_order){
                                array_splice($_SESSION["orderList"], $temp_order, 1);
                            }
                            
                        }
                    }
                }
                
                    
                if(isset($_SESSION["user"])){

                    if(!isset($_SESSION["orderList"])){
                        $_SESSION["orderList"] = array();
                        $note = "Bạn chưa có sản phẩm nào trong giỏ hàng";
                    }
                    else if(count($_SESSION["orderList"]) == 0){
                        $note = "Bạn không còn sản phẩm nào trong giỏ hàng";
                    }
                    else {
                        $note = "";
                    }

                    $orderList = $_SESSION["orderList"];

                    $this->load->model('productcategory_model');
                    $root_categories = $this->productcategory_model->getRootCategories();

                    $total_money = 0;
                    foreach($orderList as $order){

                        $total_money += $order->getQuantity() * $order->getProduct()['price'] * (1 - $order->getProduct()['discount']/100);
                    }

                    $parameters = array("root_categories" => $root_categories, "orderList" => $orderList, "total_money" => $total_money, "note" => $note);

                    $this->load->view('shop/order_list_view', $parameters);
                }
                else{
                    $this->load->view('shop/not_login_error');
                }

                
                
	}

}