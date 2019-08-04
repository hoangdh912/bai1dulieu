<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model'); //load model
		$result = $this->showData_model->getDatabase(); //use function in model to fetch data from database	
		$result = array('result_array' => $result); //turn data to array with key = data
		$this->load->view('showData_view', $result, FALSE);
	}

	public function deleteData($get_id)
	{
		// $id = $this->input->post('id');
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($get_id))
		{
			$this->load->view('deleteSuccess');
		}		
	}

	public function editData($get_id)
	{
		$this->load->model('showData_model');
		$result = $this->showData_model->editByID($get_id);
		$result = array('result_array' => $result);
		// data to view edit
		$this->load->view('editData_view', $result, FALSE);
	}

	public function updateData()
	{
		//Get data from view
		$id = $this->input->post('id');
		$sim_number = $this->input->post('sim_number');
		$sim_price = $this->input->post('sim_price');

		$this->load->model('showData_model');
		if($this->showData_model->updateDataByID($id, $sim_number, $sim_price))
		{
			header('Location: '. base_url() . 'index.php/showData');
		};
	}
}

/* End of file ShowData.php */
/* Location: ./application/controllers/ShowData.php */