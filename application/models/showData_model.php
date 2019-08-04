<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDatabase()
	{
		$this->db->select('*');// tuong tu SELECT SQL
		$result = $this->db->get('sim_number'); //tuong tu fetch
		$result = $result->result_array();
		return $result;
	}

	public function deleteDataById($id)
	{
		$this->db->where('id', $id); //Tuong tu SELECT WHERE id = $id
		return $this->db->delete('sim_number');
	}

	public function editByID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$result = $this->db->get('sim_number');
		$result = $result->result_array();
		return $result;
	}

	public function updateDataByID($id, $sim_number, $sim_price)
	{
		$updateData = array(
			'id' => $id,
			'sim_number' => $sim_number,
			'sim_price' => $sim_price
			);
		$this->db->select('*');
		$this->db->where('id', $id);
		$result = $this->db->update('sim_number', $updateData);
		return $result;
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */