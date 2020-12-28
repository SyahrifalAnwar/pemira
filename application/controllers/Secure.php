<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	public function index($value='')
	{
		redirect();
	}

	public function login()
	{
		if ($this->session->userdata('level') == 1) {
			redirect('admin');
		}else if ($this->session->userdata('level') == 2) {
			redirect('admin/kandidat');
		}else if ($this->session->userdata('level') == 3) {
			redirect('vote');
		}else{
			$this->load->view('login');
		}
		
	}

	public function check_login()
	{
		$this->load->model('M_data');

		$nim = $this->input->post('nim');
		$password = SHA1($this->input->post('password'));
		$data 	= $this->M_data->checkleveluser($nim, $password);

		$level = $this->M_data->find_user($data);

		foreach ($level as $lvl){
			$leveluser = $lvl['id_level'];
		}

		if($data){

			$user_data = array(
				'id' => $data,
				'login_status' => 'success',
				'level' => $leveluser,
			);

			$this->session->set_userdata($user_data);    

			$validator['success'] = true;
			$validator['status'] = 'success';
			$validator['messages'] = "Selamat Datang";
			$validator['data'] = $user_data;

		}else{

			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Username / Password anda salah";

		}

		echo json_encode($validator);

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		redirect();
	}
}
