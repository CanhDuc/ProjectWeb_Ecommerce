<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of searchController
 *
 * @author Administrator
 */
class searchController extends CI_Controller {
    //put your code here
    public function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
        $this->load->model('productcategory_model');
        $root_categories = $this->productcategory_model->getRootCategories();
        $name = $_GET["name"];
        
        $this->load->model('product_model');
        $product_list = $this->product_model->searchByName($name);
        
        $parameter = array("root_categories" => $root_categories, "product_list" => $product_list);
        
        $this->load->view("shop/home", $parameter);
    }
}
