<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($sim_number, $sim_price)
	{
		$data = [
		    'sim_number' => $sim_number,
		    'sim_price' => $sim_price
		];
		$this->db->insert('sim_number', $data);
		return $this->db->insert_id(); //return the id value
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */