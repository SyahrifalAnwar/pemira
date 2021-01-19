<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('level') == NULL) {
			redirect();
		}
	}

	public function index()
	{
		$id   = $this->session->userdata('id');
		$data = array(
				'datauser' => $this->M_data->find_user($id),
				'count_peserta' => $this->M_data->count_peserta(),
				'kandidat_bem' => $this->M_data->kandidat_bem(),
				'kandidat_dpm' => $this->M_data->kandidat_dpm()
			);
		if ($this->session->userdata('level') == 1) {
			$this->load->view('admin', $data);
		}else if ($this->session->userdata('level') == 2) {
			redirect('admin/kandidat');
		}else if ($this->session->userdata('level') == 3) {
			redirect('vote');
		}else{
			$this->load->view('login');
		}
		
	}

	public function kandidat($value='')
	{
		$id   = $this->session->userdata('id');
		$data = array(
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('admin/kandidat', $data);
	}

	public function pemilih()
	{
		$id   = $this->session->userdata('id');
		$data = array(
				'datauser' => $this->M_data->find_user($id)
			);
		$this->load->view('admin/data_pemilih', $data);
	}
}
