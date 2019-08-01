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

}

/* End of file AddData.php */
/* Location: ./application/controllers/AddData.php */