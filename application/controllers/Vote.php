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
			$data = array(
				'datauser' => $this->M_data->find_user($id),
				'count_peserta' => $this->M_data->count_peserta(),
				'kandidat_bem' => $this->M_data->kandidat_bem(),
				'kandidat_dpm' => $this->M_data->kandidat_dpm()
			);
			$this->load->view('admin', $data);
		}else if ($this->session->userdata('level') == 2) {
			redirect('admin/kandidat');
		}else if ($this->session->userdata('level') == 3) {
			$data = array(
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('vote', $data);
		}else{
			$this->load->view('login');
		}

		$id   = $this->session->userdata('id');
		
	}

	public function kandidat($url='')
	{
		$id   = $this->session->userdata('id');

		if ($url == 'bem') {
			$data = array(
				'kandidat_bem' => $this->M_data->pendaftar_presma(),
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('vote/kandidat_bem', $data);
		}else if ($url == 'dpm'){
			$data = array(
				'kandidat_dpm' => $this->M_data->pendaftar_dpm(),
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('vote/kandidat_dpm', $data);
		}else if ($url == 'senada'){
			$data = array(
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('vote/kandidat_senada', $data);
		}
	}
}
