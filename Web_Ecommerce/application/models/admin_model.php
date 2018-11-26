<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('admin_id', 'asc');
		$data = $this->db->get('admin');
		$data = $data->result_array();
		return $data;
	}
	public function checkAdmin($user_name, $password){
        
        $query = "select * from admin where user_name like '$user_name' and password like '".$password."'";
        $user = $this->db->query($query);
        $user = $user->result_array();
        
        return $user;
    }

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */