<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_count extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_data');
		$data = array(
			'satu' => $this->M_data->paslon1(),
			'dua' => $this->M_data->paslon2(), );
		$this->load->view('livecount', $data);
	}

}
