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
		}else if ($this->session->userdata('level') == 2 || $this->session->userdata('level') == 4) {
			redirect('admin/base_kandidat');
		}else if ($this->session->userdata('level') == 3 || $this->session->userdata('level') == 5) {
			redirect('vote');
		}else{
			$this->load->view('login');
		}
		
	}

	public function live_data()
	{
		$this->load->model('M_data');
		echo json_encode(array('result' => $this->M_data->live_data()));
	}

	public function live_data_pemilih($value='')
	{
		$this->load->model('M_data');
		echo json_encode(array('result' => $this->M_data->live_data_pemilih()));
	}

	public function live_data_registrasi($value='')
	{
		$this->load->model('M_data');
		$A16 = $this->M_data->A16();
		$B16 = $this->M_data->B16();
		$A17 = $this->M_data->A17();
		$B17 = $this->M_data->B17();
		$A18 = $this->M_data->A18();
		$B18 = $this->M_data->B18();
		$A19 = $this->M_data->A19();
		$B19 = $this->M_data->B19();
		$A20 = $this->M_data->A20();
		$B20 = $this->M_data->B20();
		
		$data['0'] = array($A16,$A17,$A18,$A19,$A20);
		$data['1'] = array($B16,$B16,$B18,$B19,$B20);
		
		// $data = array (
		// 	array("2018",$A18,$B18),
		// 	array("2019",$A19,$B19),
		// 	array("2020",17,15)
		// );

		$encode = json_encode($data);
		$replace = str_replace('"',"", $encode);
		echo $replace;
	}

	public function live_data_voting($value='')
	{
		$this->load->model('M_data');
		$A16 = $this->M_data->C16();
		$B16 = $this->M_data->D16();
		$A17 = $this->M_data->C17();
		$B17 = $this->M_data->D17();
		$A18 = $this->M_data->C18();
		$B18 = $this->M_data->D18();
		$A19 = $this->M_data->C19();
		$B19 = $this->M_data->D19();
		$A20 = $this->M_data->C20();
		$B20 = $this->M_data->D20();
		
		$data['0'] = array($A16, $A17,$A18,$A19,$A20);
		$data['1'] = array($B16, $B17,$B18,$B19,$B20);

		$encode = json_encode($data);
		$replace = str_replace('"',"", $encode);
		echo $replace;
	}

	public function check_user()
	{
		$nim = $this->input->post('nim');
		$this->load->model('M_data');
		$data = $this->M_data->cari_dpt($nim);
		if($data){

			foreach ($data as $data) {}

				$validator['success'] = true;
			$validator['status'] = 'success';
			$validator['messages'] = $data['nama'];

		}else{

			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Maaf, anda belum terdaftar sebagai Daftar Pemilih Tetap pada pelaksanaan Pemira tahun ini, segera perbaharui status keikutsertaan anda melalui livechat kami";

		}
		echo json_encode($validator);


	}


	public function pendaftar()
	{
		$this->load->model('M_data');
		
		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm(),
			'pendaftar_presma' => $this->M_data->pendaftar_presma(), );
		$this->load->view('pendaftar_sementara', $data);
	}

	public function cek_dpt()
	{
		$this->load->model('M_data');
		
		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm(),
			'pendaftar_presma' => $this->M_data->pendaftar_presma(), );
		#$this->load->view('cek_dpt', $data);
		$this->load->view('cek_dpt_2', $data);
	}

	public function unduh_undangan()
	{
		$this->load->model('M_data');
		
		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm(),
			'pendaftar_presma' => $this->M_data->pendaftar_presma(), );
		#$this->load->view('cek_dpt', $data);
		$this->load->view('cek_dpt', $data);
	}

	public function cari_dpt()
	{
		$nim =  $this->input->post('nim');
		$this->load->model('M_data');
		$data = $this->M_data->cari_dpt($nim);
		if($data){

			$validator['success'] = true;
			$validator['status'] = 'success';
			$validator['messages'] = "Anda telah terdaftar sebagai Daftar Pemilih Tetap pada Pelaksanaan Pemira tahun ini";

		}else{

			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Maaf, anda belum terdaftar sebagai Daftar Pemilih Tetap pada pelaksanaan Pemira tahun ini, segera perbaharui status keikutsertaan anda melalui livechat kami";

		}
		echo json_encode($validator);
	}

	public function surat_undangan()
	{
		$this->load->library('pdf');
		$this->load->model('M_data');

		$nim = $this->input->get('nim');

		$data['nim'] = $nim;
		$data['nama'] = $this->M_data->cari_dpt($nim)[0]['nama'];

		$output = $this->load->view('template_undangan', $data, true);

		$this->pdf->generate($output, "Surat_Undangan_".str_replace(' ', '-', $data['nama']), true, "A4", "landscape");
	}

	public function nomor_urut()
	{

		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm_random(),
			'limit' => 2, );
		$this->load->view('pemilihan_nomor', $data);
	}

	public function data_dpt()
	{
		$this->load->model('M_data');
		
		$data = array(
			'pendaftar_dpm' => $this->M_data->pendaftar_dpm(),
			'pendaftar_presma' => $this->M_data->pendaftar_presma(), );
		$this->load->view('cek_dpt_2', $data);
	}

	public function get_datadpt_json()
	{
		$requestData  = $_REQUEST;
		$fetch          = $this->M_data->get_datadpt_json($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData      = $fetch['totalData'];
		$totalFiltered  = $fetch['totalFiltered'];
		$query          = $fetch['query'];

		$data   = array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]   = $row['nomor'];
			$nestedData[]   = $row['nama'];
			$nestedData[]   = $row['nim'];
			$nestedData[]   = '20'.substr($row['nim'],5,2);

			$data[] = $nestedData;
		}

		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ),
			"data"            => $data
		);

		echo json_encode($json_data);
	}

	public function daftar_kpr()
	{
		$password = rand();

		if ($this->uri->segment(3) == 1) {

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
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
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
			$data = $this->M_data->save_dokumen_dpm($simpan);
			
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

			$mesg = $this->load->view('mail_done', $register,true);

			$this->email->from($this->config->item('email_username'), "KPR STT-NF", $this->config->item('email_username'));
			$this->email->to($this->session->userdata('email'));
			$this->email->subject('Pendaftaran Pemira');
			$this->email->message($mesg);



			if($this->email->send()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengupload dokumen, jika dokumen dirasa belum lengkap silahkan hubungi panitia</div>');
				redirect('registrasi/done');
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengupload dokumen, jika dokumen dirasa belum lengkap silahkan hubungi panitia</div>');
				redirect('registrasi/done');
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
			$statususer = $lvl['status'];
		}

		if($data){

			$user_data = array(
				'id' => $data,
				'login_status' => 'success',
				'level' => $leveluser,
				'status' => $statususer,
			);

			if ($statususer == 1) {
				$this->session->set_userdata($user_data);    

				$validator['success'] = true;
				$validator['status'] = 'success';
				$validator['messages'] = "Selamat Datang";
			}else{
				$validator['success'] = false;
				$validator['status'] = 'error';
				$validator['messages'] = "Kamu sudah melakukan voting";
			}

		}else{

			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Username / Password anda salah";

		}

		echo json_encode($validator);

	}

	public function konfirmasi_voting()
	{
		$this->load->model('M_data');
		$id_pemilih = $this->session->userdata('id');
		$id_kandidat = $this->uri->segment(3);
		$password = SHA1($this->uri->segment(4));
		$tanggal = date('Y-m-d');
		$waktu = date('H:i:s');
		$data 	= $this->M_data->checkleveluser_vote($id_pemilih, $password);

		$userdata = $this->M_data->find_user($data);

		foreach ($userdata as $usr){
			$statususer = $usr['status'];
		}

		$data_voting = array(
			'nim_pemilih' => $id_pemilih,
			'nim_peserta' => $id_kandidat,
			'tanggal' => $tanggal,
			'waktu' => $waktu,
			'ip' => $_SERVER['REMOTE_ADDR'],
			'device' => $_SERVER["HTTP_USER_AGENT"], );

		if ($data) {
			
			if ($statususer == 1) {
				$simpan_vote = $this->M_data->simpan_vote($data_voting);
				$ubahlevel = $this->M_data->leveluserdone($id_pemilih);
				$session = array('status' => 2);
				$this->session->set_userdata($session);

				$validator['success'] = true;
				$validator['status'] = 'success';
				$validator['messages'] = "Voting Berhasil";
				$validator['pesan'] = "Terimakasih telah berpastisipasi dalam PEMIRA STTNF tahun ini";
			}else{
				$validator['success'] = false;
				$validator['status'] = 'error';
				$validator['messages'] = "Anda sudah melakukan voting";
			}


		}else{
			http_response_code(404);
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
