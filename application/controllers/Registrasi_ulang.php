<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_ulang extends CI_Controller {

	
	public function index()
	{
		$this->load->view('registrasi_ulang');
	}

	public function regis()
	{
		$this->load->model('M_data');

		$password = rand();
		$pw = sha1($password);

		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		
		$reg = $this->M_data->regisulang_check($nim);
		$data = $this->M_data->regisulang_check_mail($email);
		$no = 0;

		if ($data) {
			
			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Email sudah terdaftar.";
			echo json_encode($validator);
		}else{
			foreach ($reg as $rig) {

				if ($rig['status'] == 0) {

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
						$this->M_data->save_regisulang($nim, $pw, $email);

						$validator['success'] = true;
						$validator['status'] = 'success';
						$validator['messages'] = "Registrasi ulang diterima silahkan<br> cek email kampus anda.<br>".$email;
					}
					else {
						$this->M_data->save_regisulang($nim, $pw, $email);
						
						$validator['success'] = true;
						$validator['status'] = 'success';
						$validator['messages'] = "Registrasi ulang diterima silahkan<br> cek email kampus anda.<br>".$email;
					}



				}else if($rig['status'] == 1){

					$validator['success'] = false;
					$validator['status'] = 'error';
					$validator['messages'] = "Anda sudah melakukan registrasi ulang.";

				}else if($rig['status'] == 2){
					$validator['success'] = false;
					$validator['status'] = 'error';
					$validator['messages'] = "Anda sudah melakukan voting.";

				}else{

					$validator['success'] = false;
					$validator['status'] = 'error';
					$validator['messages'] = "Maaf, anda belum terdaftar sebagai Daftar Pemilih Tetap pada pelaksanaan Pemira tahun ini, segera perbaharui status keikutsertaan anda melalui livechat kami";
				}

				echo json_encode($validator);
			}
		}

		

	}
}
