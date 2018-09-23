<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data['content'] = 'content/dashboard';
		$data['title'] = "Dashboard - Posyandu";
		$this->load->view('home', $data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */