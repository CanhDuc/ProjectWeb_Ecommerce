<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class signinController extends CI_Controller{
    
    public function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
        $this->load->model('productcategory_model');
        $root_categories = $this->productcategory_model->getRootCategories();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $user_name = $_POST['user_name'];
            $password = $_POST['password']; 
            
            $this->load->model('user_model');
        
            $user = $this->user_model->checkUser($user_name, $password);
            
            if(count($user) != 0){
                session_start();
                $_SESSION["user"] = $user[0];
                header("Location: ".base_url()."index.php/clientHome");
            }
            else{
                $error = "Tên đăng nhập hoặc mật khẩu không đúng";
                $parameter = array("error" => $error, "root_categories" => $root_categories);
                $this->load->view("shop/signin", $parameter);
            }
            
        }
        else{
            
            $error = "";
            $parameter = array("error" => $error, "root_categories" => $root_categories);
            $this->load->view("shop/signin", $parameter);
        }
        
    }
}

