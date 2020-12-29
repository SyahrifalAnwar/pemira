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

	public function daftar_kpr()
	{
		$password = rand();

		if ($this->uri->segment(3) == 1) {
			$user_data = array(
				'organisasi'	=> $this->input->post('organisasi'),
				'nim' 			=> $this->input->post('nim'),
				'nama' 			=> $this->input->post('nama'),
				'email' 		=> $this->input->post('email'),
				'no_telp' 		=> $this->input->post('no_telp'),
				'password' 		=> $password,
			);
			$this->session->set_userdata($user_data);

			mkdir('upload/'.$this->session->userdata('nim'));

			$cekdokumen = $this->M_data->cekdokumen($this->input->post('nim'));
			if ($cekdokumen) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda sudah terdaftar<br>Cek email untuk melihat informasi akun</div>');
				redirect('secure/login');
			}else{
				$this->load->view('daftar_kpr_1');
			}

			

		}else if ($this->uri->segment(3) == 2) {
			$surat_mahasiswaaktif = $_FILES["surat_mahasiswaaktif"]["tmp_name"];
			$filename_surat_mahasiswaaktif = basename($_FILES["surat_mahasiswaaktif"]["name"]);
			move_uploaded_file($surat_mahasiswaaktif , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_mahasiswaaktif);

			$surat_hasilstudi = $_FILES["surat_hasilstudi"]["tmp_name"];
			$filename_surat_hasilstudi = basename($_FILES["surat_hasilstudi"]["name"]);
			move_uploaded_file($surat_hasilstudi , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_hasilstudi);

			$surat_mentoring = $_FILES["surat_mentoring"]["tmp_name"];
			$filename_surat_mentoring = basename($_FILES["surat_mentoring"]["name"]);
			move_uploaded_file($surat_mentoring , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_mentoring);

			$surat_cutiorganisasi = $_FILES["surat_cutiorganisasi"]["tmp_name"];
			$filename_surat_cutiorganisasi = basename($_FILES["surat_cutiorganisasi"]["name"]);
			move_uploaded_file($surat_cutiorganisasi , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_cutiorganisasi);

			$surat_kepanitiaan1 = $_FILES["surat_kepanitiaan1"]["tmp_name"];
			$filename_surat_kepanitiaan1 = basename($_FILES["surat_kepanitiaan1"]["name"]);
			move_uploaded_file($surat_kepanitiaan1 , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_kepanitiaan1);

			$surat_kepanitiaan2 = $_FILES["surat_kepanitiaan2"]["tmp_name"];
			$filename_surat_kepanitiaan2 = basename($_FILES["surat_kepanitiaan2"]["name"]);
			move_uploaded_file($surat_kepanitiaan2 , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_kepanitiaan2);

			$surat_kepanitiaan3 = $_FILES["surat_kepanitiaan3"]["tmp_name"];
			$filename_surat_kepanitiaan3 = basename($_FILES["surat_kepanitiaan3"]["name"]);
			move_uploaded_file($surat_kepanitiaan3 , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_kepanitiaan3);

			$surat_kepanitiaan4 = $_FILES["surat_kepanitiaan4"]["tmp_name"];
			$filename_surat_kepanitiaan4 = basename($_FILES["surat_kepanitiaan4"]["name"]);
			move_uploaded_file($surat_kepanitiaan4 , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_kepanitiaan4);

			$surat_kepanitiaan5 = $_FILES["surat_kepanitiaan5"]["tmp_name"];
			$filename_surat_kepanitiaan5 = basename($_FILES["surat_kepanitiaan5"]["name"]);
			move_uploaded_file($surat_kepanitiaan5 , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_kepanitiaan5);

			$visi_misi_program = $_FILES["visi_misi_program"]["tmp_name"];
			$filename_visi_misi_program = basename($_FILES["visi_misi_program"]["name"]);
			move_uploaded_file($visi_misi_program , 'upload/'.$this->session->userdata('nim').'/'.$filename_visi_misi_program);

			$surat_dukungan = $_FILES["surat_dukungan"]["tmp_name"];
			$filename_surat_dukungan = basename($_FILES["surat_dukungan"]["name"]);
			move_uploaded_file($surat_dukungan , 'upload/'.$this->session->userdata('nim').'/'.$filename_surat_dukungan);

			$this->load->model('M_data');

			$simpan = array(
				'id_organisasi' => $this->session->userdata('organisasi'),
				'nim' => $this->session->userdata('nim'),
				'surat_mahasiswaaktif' => $filename_surat_mahasiswaaktif,
				'surat_hasilstudi' => $filename_surat_hasilstudi,
				'surat_mentoring' => $filename_surat_mentoring,
				'surat_cutiorganisasi' => $filename_surat_cutiorganisasi,
				'surat_kepanitiaan1' => $filename_surat_kepanitiaan1,
				'surat_kepanitiaan2' => $filename_surat_kepanitiaan2, 
				'surat_kepanitiaan3' => $filename_surat_kepanitiaan3, 
				'surat_kepanitiaan4' => $filename_surat_kepanitiaan4, 
				'surat_kepanitiaan5' => $filename_surat_kepanitiaan5,
				'visi_misi_program' => $filename_visi_misi_program,
				'surat_dukungan' => $filename_surat_dukungan
			);
			$data = $this->M_data->save_dokumen($simpan);
			
			$register = array(
				'id_level' => 2,
				'nama' => $this->session->userdata('nama'),
				'nim' => $this->session->userdata('nim'),
				'no_telp' => $this->session->userdata('no_telp'),
				'email' => $this->session->userdata('email'),
				'sandi' => SHA1($this->session->userdata('password')),
				'status' => 0);

			$data = $this->M_data->register($register);

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

            $mesg = $this->load->view('mail_regis', $register,true);

            $this->email->from($this->config->item('email_username'), "KPR STT-NF", $this->config->item('email_username'));
            $this->email->to($this->session->userdata('email'));
            $this->email->subject('Pendaftaran Pemira');
            $this->email->message($mesg);
            
            

            if($this->email->send()) {
            	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen berhasil di upload<br>Silahkan cek email untuk melihat informasi akun mu</div>');
            	redirect('secure/login');
            }
            else {
            	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Dokumen berhasil di upload<br>Silahkan cek email untuk melihat informasi akun mu</div>');
            	redirect('secure/login');
            }


        }else{
        	$this->load->view('daftar_kpr');
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
