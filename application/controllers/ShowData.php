<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('showData_view');
	}

}

/* End of file ShowData.php */
/* Location: ./application/controllers/ShowData.php */