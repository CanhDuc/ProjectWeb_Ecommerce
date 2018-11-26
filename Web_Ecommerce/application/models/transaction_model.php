<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of transaction_model
 *
 * @author Administrator
 */
class transaction_model extends CI_Model {
    
    
    public function __construct()
    {
            parent::__construct();
    }
    
    public function insertTransaction($user_id, $money_amount, $time_require){
        
        $data = array(
                'user_id' => $user_id,
                'money_amount' => $money_amount,
                'time_require' => $time_require,
                'create_date' => date("Y-m-d"),
                'status' => 0
        );
        
        $this->db->insert('transaction', $data);
        return $this->db->insert_id();
    }
    
    public function selectTransactionByID($id){
        
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $data = $this->db->get('transaction');
        $data = $data->result_array();

        return $data[0];
        
    }
    
    public function getTransactionListByUser($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $data = $this->db->get('transaction');
        $data = $data->result_array();

        return $data;
    }
    public function getDataById($id){
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $data = $this->db->get('transaction');
        return $data->result_array();
    }
}