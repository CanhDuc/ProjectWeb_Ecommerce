<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productcategory_model extends CI_Model {

	private $categoryID;
        private $categoryName;

	public function __construct()
	{
            parent::__construct();
 
	}
        
        public function setProperties($categoryID){
            
            $this->categoryID = $categoryID;

            $this->db->select('category_name');
            $this->db->where('category_id', $categoryID);
            $result = $this->db->get('productcategory');
            $result = $result->result_array();

            $this->categoryName = $result[0]['category_name'];
        }
        
        public function getSubCategoryList(){
            $result = array();
            
            $this->db->select('category_id');
            $this->db->where('parent_id', $this->categoryID);
            $id_list = $this->db->get('productcategory');
            $id_list = $id_list->result_array();
            
            $tempCategory;
            foreach ($id_list as $id) {
                $tempCategory = new productcategory_model();
                $tempCategory->setProperties($id['category_id']);
                array_push($result, $tempCategory);
            }
            
            return $result;
        }
                
        public function getCategoryID() {
            return $this->categoryID;
        }

        public function getCategoryName() {
            return $this->categoryName;
        }

        public function getObjectDataByID($id){
            
            $this->db->select('category_id');
            $this->db->where('category_id', $id);
            $data = $this->db->get('productcategory');
            $data = $data->result_array();
            
            $result = new productcategory_model();
            $result->setProperties($data[0]['category_id']);
            return $result;
        }

        public function getRootCategories(){
            
            $this->db->select('category_id');
            $this->db->where('parent_id', 0);
            $data = $this->db->get('productcategory');
            $data = $data->result_array();
            
            $result = array();
            $tempCategory;
            
            foreach($data as $value){
                
                $tempCategory = new productcategory_model();
                $tempCategory->setProperties($value['category_id']);
                array_push($result, $tempCategory);
                
            }
            
            return $result;
        }
        
        public function insertDataToMysql($name,$parent_id)
	{
		$data = array(
			'category_name' => $name,
			'parent_id' => $parent_id
		);
		$this->db->insert('productcategory', $data);
		return $this->db->insert_id();
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('category_id', 'asc');
		$data = $this->db->get('productcategory');
		$data = $data->result_array();

		return $data;
	}

	public function getDataById($key){
		$this->db->select('*');
		$this->db->where('category_id', $key);
		$data = $this->db->get('productcategory');
		$data = $data->result_array();
		return $data;
		// echo '<pre>';
		// var_dump($dulieu);
	}

	public function updateById($id,$name,$parent_id){
		$data = array(
			'category_name' => $name,
			'parent_id' => $parent_id
		);
		$this->db->where('category_id', $id);
		return $this->db->update('productcategory', $data);
	}

	public function removeById($id)
	{
		$this->db->where('category_id', $id);
		return $this->db->delete('productcategory');

	}

}

/* End of file productcategory_model.php */
/* Location: ./application/models/productcategory_model.php */