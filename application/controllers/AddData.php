<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('addData_view');
	}

	public function insertData_controller()
	{
		// Get Data
		$sim_number = $this->input->post('sim_number');
		$sim_price = $this->input->post('sim_price');
		// Put data to model
		$this->load->model('addData_model');
		if($this->addData_model->insert($sim_number, $sim_price)){
			echo "Insert successfully";
			header('Location: '. base_url() . 'index.php/showData');
		} else {
			echo "Error";
		}
		

	}
}

/* End of file AddData.php */
/* Location: ./application/controllers/AddData.php */