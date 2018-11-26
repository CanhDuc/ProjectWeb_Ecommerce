<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of temporary_order_model
 *
 * @author Administrator
 */
class temporary_order_model extends CI_Model{
    //put your code here
    private $user;
    private $product;
    private $quantity;
    
    public function __construct()
    {
            parent::__construct();

    }
    
    public function  setProperties($user, $product, $quantity){
        
        $this->user = $user;
        $this->product = $product;
        $this->quantity = $quantity;
    }
    
    public function create_temporary_order($user, $product, $quantity){
        
        $order = new temporary_order_model();
        $order->setProperties($user, $product, $quantity);
        
        return $order;
    }
            
    public function getUser() {
        return $this->user;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function addQuantiy($num){
        $this->quantity += $num;
    }
    
}
