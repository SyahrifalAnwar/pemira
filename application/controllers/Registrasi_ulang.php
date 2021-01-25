<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_ulang extends CI_Controller {

	
	public function index()
	{
		$this->load->view('registrasi_ulang');
	}

	public function regis()
	{
		$nim = $this->input->post('nim');
		$this->load->model('M_data');
		$reg = $this->M_data->regisulang_check($nim);
		$password = rand();
		$pw = sha1($password);
		foreach ($reg as $rig) {

			if ($rig['status'] == 0) {

				$this->M_data->save_regisulang($nim, $pw);

				$email = $rig['email'];

				$user_data = array(
					'data_user' => $reg,
					'password' => $password);

				$config = [
					'mailtype'  => 'html',
					'charset'   => 'utf-8',
					'protocol'  => 'smtp',
					'smtp_host' => $this->config->item('email_host'),
					'smtp_user' => $this->config->item('email_username'),
					'smtp_pass'   => $this->config->item('email_password'),
					'smtp_crypto' => 'ssl',
					'smtp_port'   => 465,
					'crlf'    => "\r\n",
					'newline' => "\r\n",
					'wordwrap' => TRUE
				];

				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
				$this->email->set_header('Content-type', 'text/html');
				$this->email->initialize($config);
				$this->load->library('email', $config);

				$mesg = $this->load->view('mail_regis', $user_data, true);

				$this->email->from($this->config->item('email_username'), "KPR STT-NF", $this->config->item('email_username'));
				$this->email->to($email);
				$this->email->subject('Registrasi Ulang Pemira');
				$this->email->message($mesg);

				if($this->email->send()) {
					$validator['success'] = true;
					$validator['status'] = 'success';
					$validator['messages'] = "Registrasi ulang diterima silahkan<br> cek email kampus anda.<br>".$email;
				}
				else {
					$validator['success'] = true;
					$validator['status'] = 'success';
					$validator['messages'] = "Registrasi ulang diterima silahkan<br> cek email kampus anda.<br>".$email;
				}



			}else if($rig['status'] == 1){

				$validator['success'] = false;
				$validator['status'] = 'error';
				$validator['messages'] = "Anda sudah melakkukan registrasi ulang.";

			}else if($rig['status'] == 2){
				$validator['success'] = false;
				$validator['status'] = 'error';
				$validator['messages'] = "Anda sudah melakkukan voting.";

			}else if($rig['status'] == NULL || $rig['status'] == ''){
				$validator['success'] = false;
				$validator['status'] = 'error';
				$validator['messages'] = "NIM anda tidak terdaftar.";
			}

			echo json_encode($validator);
		}

	}
}
