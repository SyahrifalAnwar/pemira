<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function pemira()
	{
		
		if ($this->uri->segment(3) == NULL || $this->uri->segment(3) == '') {
			$password = rand();

			$user_data = array(
				'organisasi'	=> $this->input->post('organisasi'),
				'ketua_nim' 	=> $this->input->post('ketua_nim'),
				'ketua_nama' 	=> $this->input->post('ketua_nama'),
				'ketua_email' 	=> $this->input->post('ketua_email'),
				'ketua_no_telp' => $this->input->post('ketua_no_telp'),
				'wakil_nim' 	=> $this->input->post('wakil_nim'),
				'wakil_nama' 	=> $this->input->post('wakil_nama'),
				'wakil_email' 	=> $this->input->post('wakil_email'),
				'wakil_no_telp' => $this->input->post('wakil_no_telp'),
				'password' 		=> $password,
			);
			$cekdokumen = $this->M_data->cekdokumen_presma($this->input->post('ketua_nim'));			

			if ($cekdokumen) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda sudah terdaftar<br>Cek email untuk melihat informasi akun</div>');
				redirect('secure/login');
			}else{				

				$this->session->set_userdata($user_data);

				$path = 'upload/'.$this->session->userdata('ketua_nim');
				if(!file_exists($path)){
					mkdir($path);
				}

				$path = 'upload/'.$this->session->userdata('wakil_nim');
				if(!file_exists($path)){
					mkdir($path);
				}
				$this->load->view('daftar_kpr_2');
			}

			
		}
		
		
	}

	public function kirimberkas_presma()
	{
		if ($this->session->userdata('organisasi') == NULL) {
			redirect('daftar_kpr');
		}
		$ketua_surat_mahasiswaaktif = $_FILES["ketua_surat_mahasiswaaktif"]["tmp_name"];
		$filename_ketua_surat_mahasiswaaktif = basename($_FILES["ketua_surat_mahasiswaaktif"]["name"]);
		move_uploaded_file($ketua_surat_mahasiswaaktif , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_mahasiswaaktif);

		$ketua_surat_hasilstudi = $_FILES["ketua_surat_hasilstudi"]["tmp_name"];
		$filename_ketua_surat_hasilstudi = basename($_FILES["ketua_surat_hasilstudi"]["name"]);
		move_uploaded_file($ketua_surat_hasilstudi , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_hasilstudi);

		$ketua_surat_mentoring = $_FILES["ketua_surat_mentoring"]["tmp_name"];
		$filename_ketua_surat_mentoring = basename($_FILES["ketua_surat_mentoring"]["name"]);
		move_uploaded_file($ketua_surat_mentoring , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_mentoring);

		$ketua_surat_cutiorganisasi = $_FILES["ketua_surat_cutiorganisasi"]["tmp_name"];
		$filename_ketua_surat_cutiorganisasi = basename($_FILES["ketua_surat_cutiorganisasi"]["name"]);
		move_uploaded_file($ketua_surat_cutiorganisasi , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_cutiorganisasi);

		$ketua_surat_kepanitiaan1 = $_FILES["ketua_surat_kepanitiaan1"]["tmp_name"];
		$filename_ketua_surat_kepanitiaan1 = basename($_FILES["ketua_surat_kepanitiaan1"]["name"]);
		move_uploaded_file($ketua_surat_kepanitiaan1 , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_kepanitiaan1);

		$ketua_surat_kepanitiaan2 = $_FILES["ketua_surat_kepanitiaan2"]["tmp_name"];
		$filename_ketua_surat_kepanitiaan2 = basename($_FILES["ketua_surat_kepanitiaan2"]["name"]);
		move_uploaded_file($ketua_surat_kepanitiaan2 , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_kepanitiaan2);

		$ketua_surat_kepanitiaan3 = $_FILES["ketua_surat_kepanitiaan3"]["tmp_name"];
		$filename_ketua_surat_kepanitiaan3 = basename($_FILES["ketua_surat_kepanitiaan3"]["name"]);
		move_uploaded_file($ketua_surat_kepanitiaan3 , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_kepanitiaan3);

		$ketua_surat_kepanitiaan4 = $_FILES["ketua_surat_kepanitiaan4"]["tmp_name"];
		$filename_ketua_surat_kepanitiaan4 = basename($_FILES["ketua_surat_kepanitiaan4"]["name"]);
		move_uploaded_file($ketua_surat_kepanitiaan4 , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_kepanitiaan4);

		$ketua_surat_kepanitiaan5 = $_FILES["ketua_surat_kepanitiaan5"]["tmp_name"];
		$filename_ketua_surat_kepanitiaan5 = basename($_FILES["ketua_surat_kepanitiaan5"]["name"]);
		move_uploaded_file($ketua_surat_kepanitiaan5 , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_kepanitiaan5);

		$ketua_visi_misi_program = $_FILES["ketua_visi_misi_program"]["tmp_name"];
		$filename_ketua_visi_misi_program = basename($_FILES["ketua_visi_misi_program"]["name"]);
		move_uploaded_file($ketua_visi_misi_program , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_visi_misi_program);

		$ketua_surat_dukungan = $_FILES["ketua_surat_dukungan"]["tmp_name"];
		$filename_ketua_surat_dukungan = basename($_FILES["ketua_surat_dukungan"]["name"]);
		move_uploaded_file($ketua_surat_dukungan , 'upload/'.$this->session->userdata('ketua_nim').'/'.$filename_ketua_surat_dukungan);

		// ----

		$wakil_surat_mahasiswaaktif = $_FILES["wakil_surat_mahasiswaaktif"]["tmp_name"];
		$filename_wakil_surat_mahasiswaaktif = basename($_FILES["wakil_surat_mahasiswaaktif"]["name"]);
		move_uploaded_file($wakil_surat_mahasiswaaktif , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_mahasiswaaktif);

		$wakil_surat_hasilstudi = $_FILES["wakil_surat_hasilstudi"]["tmp_name"];
		$filename_wakil_surat_hasilstudi = basename($_FILES["wakil_surat_hasilstudi"]["name"]);
		move_uploaded_file($wakil_surat_hasilstudi , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_hasilstudi);

		$wakil_surat_mentoring = $_FILES["wakil_surat_mentoring"]["tmp_name"];
		$filename_wakil_surat_mentoring = basename($_FILES["wakil_surat_mentoring"]["name"]);
		move_uploaded_file($wakil_surat_mentoring , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_mentoring);

		$wakil_surat_cutiorganisasi = $_FILES["wakil_surat_cutiorganisasi"]["tmp_name"];
		$filename_wakil_surat_cutiorganisasi = basename($_FILES["wakil_surat_cutiorganisasi"]["name"]);
		move_uploaded_file($wakil_surat_cutiorganisasi , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_cutiorganisasi);

		$wakil_surat_kepanitiaan1 = $_FILES["wakil_surat_kepanitiaan1"]["tmp_name"];
		$filename_wakil_surat_kepanitiaan1 = basename($_FILES["wakil_surat_kepanitiaan1"]["name"]);
		move_uploaded_file($wakil_surat_kepanitiaan1 , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_kepanitiaan1);

		$wakil_surat_kepanitiaan2 = $_FILES["wakil_surat_kepanitiaan2"]["tmp_name"];
		$filename_wakil_surat_kepanitiaan2 = basename($_FILES["wakil_surat_kepanitiaan2"]["name"]);
		move_uploaded_file($wakil_surat_kepanitiaan2 , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_kepanitiaan2);

		$wakil_surat_kepanitiaan3 = $_FILES["wakil_surat_kepanitiaan3"]["tmp_name"];
		$filename_wakil_surat_kepanitiaan3 = basename($_FILES["wakil_surat_kepanitiaan3"]["name"]);
		move_uploaded_file($wakil_surat_kepanitiaan3 , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_kepanitiaan3);

		$wakil_surat_kepanitiaan4 = $_FILES["wakil_surat_kepanitiaan4"]["tmp_name"];
		$filename_wakil_surat_kepanitiaan4 = basename($_FILES["wakil_surat_kepanitiaan4"]["name"]);
		move_uploaded_file($wakil_surat_kepanitiaan4 , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_kepanitiaan4);

		$wakil_surat_kepanitiaan5 = $_FILES["wakil_surat_kepanitiaan5"]["tmp_name"];
		$filename_wakil_surat_kepanitiaan5 = basename($_FILES["wakil_surat_kepanitiaan5"]["name"]);
		move_uploaded_file($wakil_surat_kepanitiaan5 , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_kepanitiaan5);

		$wakil_visi_misi_program = $_FILES["wakil_visi_misi_program"]["tmp_name"];
		$filename_wakil_visi_misi_program = basename($_FILES["wakil_visi_misi_program"]["name"]);
		move_uploaded_file($wakil_visi_misi_program , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_visi_misi_program);

		$wakil_surat_dukungan = $_FILES["wakil_surat_dukungan"]["tmp_name"];
		$filename_wakil_surat_dukungan = basename($_FILES["wakil_surat_dukungan"]["name"]);
		move_uploaded_file($wakil_surat_dukungan , 'upload/'.$this->session->userdata('wakil_nim').'/'.$filename_wakil_surat_dukungan);

		$this->load->model('M_data');

		$simpan = array(
			'id_organisasi' => $this->session->userdata('organisasi'),
			'ketua_nim' 	=> $this->session->userdata('ketua_nim'),
			'ketua_nama' 	=> $this->session->userdata('ketua_nama'),
			'ketua_email' 	=> $this->session->userdata('ketua_email'),
			'ketua_no_telp' => $this->session->userdata('ketua_no_telp'),
			'wakil_nim' 	=> $this->session->userdata('wakil_nim'),
			'wakil_nama' 	=> $this->session->userdata('wakil_nama'),
			'wakil_email' 	=> $this->session->userdata('wakil_email'),
			'wakil_no_telp' => $this->session->userdata('wakil_no_telp'),
			'ketua_surat_mahasiswaaktif' 	=> $filename_ketua_surat_mahasiswaaktif,
			'ketua_surat_hasilstudi' 		=> $filename_ketua_surat_hasilstudi,
			'ketua_surat_mentoring' 		=> $filename_ketua_surat_mentoring,
			'ketua_surat_cutiorganisasi' 	=> $filename_ketua_surat_cutiorganisasi,
			'ketua_surat_kepanitiaan1' 		=> $filename_ketua_surat_kepanitiaan1,
			'ketua_surat_kepanitiaan2' 		=> $filename_ketua_surat_kepanitiaan2, 
			'ketua_surat_kepanitiaan3' 		=> $filename_ketua_surat_kepanitiaan3, 
			'ketua_surat_kepanitiaan4' 		=> $filename_ketua_surat_kepanitiaan4, 
			'ketua_surat_kepanitiaan5' 		=> $filename_ketua_surat_kepanitiaan5,
			'ketua_visi_misi_program' 		=> $filename_ketua_visi_misi_program,
			'ketua_surat_dukungan' 			=> $filename_ketua_surat_dukungan,
			'wakil_surat_mahasiswaaktif' 	=> $filename_wakil_surat_mahasiswaaktif,
			'wakil_surat_hasilstudi' 		=> $filename_wakil_surat_hasilstudi,
			'wakil_surat_mentoring' 		=> $filename_wakil_surat_mentoring,
			'wakil_surat_cutiorganisasi' 	=> $filename_wakil_surat_cutiorganisasi,
			'wakil_surat_kepanitiaan1' 		=> $filename_wakil_surat_kepanitiaan1,
			'wakil_surat_kepanitiaan2' 		=> $filename_wakil_surat_kepanitiaan2, 
			'wakil_surat_kepanitiaan3' 		=> $filename_wakil_surat_kepanitiaan3, 
			'wakil_surat_kepanitiaan4' 		=> $filename_wakil_surat_kepanitiaan4, 
			'wakil_surat_kepanitiaan5' 		=> $filename_wakil_surat_kepanitiaan5,
			'wakil_visi_misi_program' 		=> $filename_wakil_visi_misi_program,
			'wakil_surat_dukungan' 			=> $filename_wakil_surat_dukungan
		);

		$data = $this->M_data->save_dokumen($simpan);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengupload dokumen</div>');
		redirect('registrasi/done');

	}

	public function done()
	{
		$this->session->sess_destroy();
    	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
    	$this->output->set_header("Pragma: no-cache");
		$this->load->view('regis/done');
	}


	public function dpm($value='')
	{
		if ($this->session->userdata('nim') == NULL) {
			redirect('daftar_kpr');
		}

		$password = rand();

		$user_data = array(
			'organisasi'	=> $this->input->post('organisasi'),
			'nim' 			=> $this->input->post('nim'),
			'nama' 			=> $this->input->post('nama'),
			'email' 		=> $this->input->post('email'),
			'no_telp' 		=> $this->input->post('no_telp'),
			'password' 		=> $password,
		);
		
		$cekdokumen = $this->M_data->cekdokumen($this->input->post('nim'));

		if ($cekdokumen) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda sudah mengupload dokumen</div>');
			redirect('registrasi/done');
		}else{
			$this->session->set_userdata($user_data);

			$path = 'upload/'.$this->session->userdata('nim');
			if(!file_exists($path)){
				mkdir($path);
			}


			$this->load->view('daftar_kpr_1');
		}		

		
	}
}
