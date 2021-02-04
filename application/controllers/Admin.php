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
			'count_peserta_regis' => $this->M_data->count_peserta_regis(),
			'count_peserta' => $this->M_data->count_peserta(),
			'kandidat_bem' => $this->M_data->kandidat_bem(),
			'kandidat_dpm' => $this->M_data->kandidat_dpm()
		);
		if ($this->session->userdata('level') == 1) {
			$this->load->view('admin', $data);
		}else if ($this->session->userdata('level') == 2) {
			redirect('admin/base_kandidat');
		}else if ($this->session->userdata('level') == 3) {
			redirect('vote');
		}else if ($this->session->userdata('level') == 4) {
			redirect('admin/base_kandidat');
		}}else if ($this->session->userdata('level') == 5) {
			redirect('admin/test');
		}else{
			$this->load->view('login');
		}
		
	}

	public function test($value='')
	{
		# code...
	}

	public function base_kandidat($value='')
	{
		$id   = $this->session->userdata('id');
		$data = array(
			'datauser' => $this->M_data->find_user($id),
			'count_peserta' => $this->M_data->count_peserta(),
			'kandidat_bem' => $this->M_data->kandidat_bem(),
			'kandidat_dpm' => $this->M_data->kandidat_dpm(),
			'kandidat_dpm_detail' => $this->M_data->kandidat_dpm_detail($id)
		);
		$this->load->view('admin_kandidat', $data);
	}

	public function kandidat($url='')
	{
		if ($this->session->userdata('level') != 1) {
			redirect($_SERVER['HTTP_REFERER']);
		}

		$id   = $this->session->userdata('id');

		if ($url == 'bem') {
			$data = array(
				'kandidat_bem' => $this->M_data->pendaftar_presma(),
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('admin/kandidat_bem', $data);
		}else if ($url == 'dpm'){
			$data = array(
				'kandidat_dpm' => $this->M_data->pendaftar_dpm(),
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('admin/kandidat_dpm', $data);
		}else if ($url == 'senada'){
			$data = array(
				'datauser' => $this->M_data->find_user($id),
				'get_organisasi' => $this->M_data->get_organisasi()
			);
			$this->load->view('admin/kandidat_senada', $data);
		}
		
		
	}

	public function upload_sk_dpm()
	{
		$nim = $this->input->post('nim');
		$sk = $_FILES["sk"]["tmp_name"];
		$filename_sk = basename($_FILES["sk"]["name"]);
		move_uploaded_file($sk , 'upload/'.$nim.'/'.$filename_sk);
		$save = $this->M_data->upload_sk_dpm($nim, $filename_sk);
		if ($save) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Sukses!</strong> SK Berhasil di Upload</div>');
			redirect('admin/kandidat/dpm');
		}
	}

	public function profile_kandidat($nim='')
	{
		$data = array(
			'detail_dpm' => $this->M_data->detail_dpm($nim) );
		$this->load->view('detail_dpm', $data);
	}

	public function upload_sk($nim='')
	{
		$data = array('nim' => $nim );
		$this->load->view('admin/upload_sk', $data);
	}

	public function get_datadpt_json($value='')
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
            $nestedData[]   = $row['email'];
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

	public function pemilih()
	{
		if ($this->session->userdata('level') != 1) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		$id   = $this->session->userdata('id');
		$data = array(
			'datauser' => $this->M_data->find_user($id)
		);
		$this->load->view('admin/data_pemilih', $data);
	}
}
