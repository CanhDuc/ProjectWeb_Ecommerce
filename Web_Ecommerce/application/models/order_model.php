<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData(){
		$this->db->select('*');
		$this->db->order_by('order_id', 'asc');
		$data = $this->db->get('ordertable');
		$data = $data->result_array();

		return $data;
	}
	public function deleteById($id)
	{
		$this->db->where('order_id', $id);
		return $this->db->delete('ordertable');

	}
	public function getDataById($id){
		$this->db->select('*');
		$this->db->where('order_id', $id);
		$data = $this->db->get('ordertable');
		$data = $data->result_array();
		return $data;
	}

	public function updateById($id,$transaction_id,$product_id,$quantity,$stautus){
		$data = array(
			'transaction_id' => $transaction_id,
			'product_id' => $product_id,
			'quantity' => $quantity,
			'status' => $status 
		);
		$this->db->where('order_id', $id);
		return $this->db->update('ordertable', $data);
	}
	public function checkById($id){
		$sql = "UPDATE ordertable
				SET status = '1'
				WHERE order_id = $id";
        $this->db->query($sql);
	}

	public function getData($length,$start) {
	    // $rowperpage length, $rowno start
	    $this->db->select('*');
	    $this->db->order_by('order_id', 'desc');
	    $this->db->from('ordertable');
	    $this->db->limit($length, $start);  
	    $query = $this->db->get();
	 	
	    return $query->result_array();
	}

	// Select total records
	public function getrecordCount() {

	    $this->db->select('count(*) as allcount');
	    $this->db->from('ordertable');
	    $query = $this->db->get();
	    $result = $query->result_array();
	 
	    return $result[0]['allcount'];
	}
        
    public function insertOrder($transaction_id, $product_id, $quantity){
        
        $data = array(
			'transaction_id' => $transaction_id,
			'product_id' => $product_id,
			'quantity' => $quantity,
			'status' => 0,
		);
        
        $this->db->insert('ordertable', $data);
        return $this->db->insert_id();
    }

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */