<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('level') == NULL) {
			redirect();
		}
	}
	
	public function index()
	{
		$id   = $this->session->userdata('id');
		if ($this->session->userdata('level') == 1) {
			redirect('admin');
		}else{
			$data = array(
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('vote', $data);
		}
		
	}
}
