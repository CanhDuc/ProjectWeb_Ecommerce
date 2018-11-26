<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addTransactionController
 *
 * @author Administrator
 */
class addTransactionController extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->load->model('temporary_order_model');
            $this->load->model("order_model");
            $this->load->model("product_model");
            session_start();
            
            if(isset($_SESSION["user"]) && isset($_SESSION["orderList"]) && (count($_SESSION["orderList"]) > 0)){
                
                $user_id = $_SESSION["user"]['user_id'];
                $orderList = $_SESSION["orderList"];
                
                $total_money = 0;
                foreach($orderList as $order){

                    $total_money += $order->getQuantity() * $order->getProduct()['price'] * (1 - $order->getProduct()['discount']/100);
                }
                $time_require = 3;
                $this->load->model("transaction_model");
                $transaction_id = $this->transaction_model->insertTransaction($user_id, $total_money, $time_require);
                
                foreach($orderList as $order){

                    $this->order_model->insertOrder($transaction_id, $order->getProduct()['product_id'], $order->getQuantity());
                    $this->product_model->minusQuantity($order->getProduct()['product_id'], $order->getQuantity());
                }
                unset($_SESSION['orderList']);
                header("Location: ".base_url()."index.php/transactionListController");
                exit;
            }
            else{
                $this->load->view("shop/generalError");
            }
        }
        else{
            $this->load->view("shop/generalError");
        }
    }
    
}
