<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class temporaryOrderController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $this->load->model('temporary_order_model');  
                    session_start();
                    
                    $user_id = $_SESSION["user"]["user_id"];
                    $product_id = $_POST['product_id'];
                    $quantity = $_POST['quantity'];
                    
                    $this->load->model('product_model');
                    $product = $this->product_model->getDataById($product_id)[0];
                    
                     
                    $order = $this->temporary_order_model->create_temporary_order($_SESSION["user"], $product, $quantity);
                    
                    
                    
                    
                    
                    if(!isset($_SESSION["orderList"])){
                        
                        $_SESSION["orderList"] = array();
                    }
                    
                        
                    $position = -1;
                    for($i = 0; $i < count($_SESSION["orderList"]); $i++){
                        if($_SESSION["orderList"][$i]->getProduct()['product_id'] == $product_id){
                            $position = $i;
                            break;
                        }

                    }

                    if($position != -1){
                        $number = $quantity + $_SESSION["orderList"][$position]->getQuantity();
                        if($number <= $product['quantity']){
                            $_SESSION["orderList"][$position]->addQuantiy(intval($quantity));
                            header("Location: ".base_url()."index.php/orderListController");
                            exit;
                        }
                        else{
                            $this->load->view("shop/generalError");
                        }
                        
                        
                    }
                    else{
                        
                        array_push($_SESSION["orderList"], $order);
                        header("Location: ".base_url()."index.php/orderListController");
                        exit;
                    }
                    
                }
                else{
                    
                    session_start();
                    if(isset($_SESSION["user"])){
                        $product_id = $_GET['product_id'];
                        $this->load->model('product_model');
                        $product = $this->product_model->getDataById($product_id)[0];

                        $this->load->model('productcategory_model');
                        $root_categories = $this->productcategory_model->getRootCategories();

                        $parameters = array("root_categories" => $root_categories, "product" => $product);

                        $this->load->view('shop/add_order_view', $parameters);
                    }
                    else{
                        $this->load->view('shop/not_login_error');
                    }
                }
	}

}
