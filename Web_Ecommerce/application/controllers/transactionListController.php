<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of transactionListController
 *
 * @author Administrator
 */
class transactionListController extends CI_Controller {
    //put your code here
    public function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
        $this->load->model("temporary_order_model");
        session_start();
        if(!isset($_SESSION['user'])){
            
            $this->load->view("shop/not_login_error");
        }
        else{
            $this->load->model('productcategory_model');
            $root_categories = $this->productcategory_model->getRootCategories();
            $this->load->model('transaction_model');
            $transaction_list = $this->transaction_model->getTransactionListByUser($_SESSION['user']['user_id']);
            $parameters = array("transaction_list" => $transaction_list, "root_categories" => $root_categories);
            $this->load->view("shop/transaction_list_view", $parameters);
        }
        
    }
}
