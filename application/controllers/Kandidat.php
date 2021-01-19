<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_data');
		
		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm(),
			'pendaftar_presma' => $this->M_data->pendaftar_presma(), );
		$this->load->view('pendaftar_sementara', $data);
	}

	public function detail()
	{
		$id_kandidat = $this->uri->segment(3);
		$data = array(
			'detail_dpm' => $this->M_data->detail_dpm($id_kandidat) );
		$this->load->view('detail_dpm', $data);
	}
}
