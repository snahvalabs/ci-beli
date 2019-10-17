<?php
class Predikat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_predikat');
	}

	public function index()
	{
		$this->load->view('view_predikat');
	}

	// When user submit data on view page, Then this function store data in array.
	public function data_submitted() {
		$nilai = $this->input->post('u_nilai');
		$predikat = $this->m_predikat->getPredikat($nilai);

		$data = array(
		'user_name' => $this->input->post('u_name'),
		'user_nilai' => $predikat
		);

		// Show submitted data on view page again.
		$this->load->view("view_predikat", $data);
	}

}
?>