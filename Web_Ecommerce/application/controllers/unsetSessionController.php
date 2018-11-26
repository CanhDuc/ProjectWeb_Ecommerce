<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class unsetSessionController extends CI_Controller{
    
    public function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
        
        session_start();
        session_unset();
        header("Location: ".base_url()."index.php/clientHome");
        exit;
    }
    
}