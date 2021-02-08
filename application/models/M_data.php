<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	
	public function checkleveluser($nim, $password){

		if($nim && $password) {
			$sql = "SELECT * FROM pemilih WHERE nim = '$nim' AND sandi = '$password'";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return ($query->num_rows() === 1 ? $result['nim'] : false);
		}
		else {
			return false;
		}

	}

	public function checkleveluser_vote($nim, $password){

		if($nim && $password) {
			$sql = "SELECT * FROM pemilih WHERE nim = '$nim' AND sandi = '$password'";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return ($query->num_rows() === 1 ? $result['nim'] : false);
		}
		else {
			return false;
		}

	}

	public function leveluserdone($id)
	{
		$sql = "UPDATE `pemilih` SET `status` = '2' WHERE nim = '$id'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function simpan_vote($data_voting)
	{
		$query = $this->db->insert('vote', $data_voting);
		return $query;
	}

	public function save_regisulang($nim, $pw, $email)
	{
		$sql = "UPDATE `pemilih` SET `status` = '1', `sandi` = '$pw',  `email` = '$email' WHERE nim = '$nim'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function upload_sk_dpm($nim, $filename_sk)
	{
		$sql = "UPDATE `dokumen_dpm` SET `sk` = '$filename_sk' WHERE nim = '$nim'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function regisulang_check($nim='')
	{
		$sql = "SELECT * FROM pemilih WHERE nim = '$nim'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function regisulang_check_mail($email)
	{
		if($email) {
			$sql = "SELECT * FROM pemilih WHERE email = '$email'";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return $result;
		}
		else {
			return false;
		}
	}

	public function count_peserta()
	{
		$sql = "SELECT count(nim) as count_peserta FROM `pemilih` WHERE id_level = 3";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function count_peserta_regis($value='')
	{
		$sql = "SELECT count(nim) as count_peserta_regis FROM `pemilih` WHERE id_level = 3 AND status = 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function kandidat()
	{
		$sql = "SELECT * FROM `kandidat`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function kandidat_dpm()
	{
		$sql = "SELECT count(nim) as kandidat_dpm FROM `dokumen_dpm`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function kandidat_dpm_detail($nim='')
	{
		$sql = "SELECT * FROM `dokumen_dpm` where nim = '$nim'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function kandidat_bem()
	{
		$sql = "SELECT count(ketua_nim) as kandidat_bem FROM `dokumen_presma`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_datadpt_json($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$id_wt = $this->session->userdata('id_wt');
		$sql = "
		SELECT (@row:=@row+1) AS nomor, nama, nim, email
		FROM
		`pemilih` AS a
		, (SELECT @row := 0) r 
		WHERE 1=1 AND id_level = 3

		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nim` LIKE '%".$this->db->escape_like_str($like_value)."%'
			OR a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'nama',
			2   => 'email',
			3   => 'nim',

		);
			$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";

			$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;

	}

	public function get_datadpt_json_admin($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$id_wt = $this->session->userdata('id_wt');
		$sql = "
		SELECT (@row:=@row+1) AS nomor, nama, nim, email, status
		FROM
		`pemilih` AS a
		, (SELECT @row := 0) r 
		WHERE 1=1 AND id_level = 3

		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nim` LIKE '%".$this->db->escape_like_str($like_value)."%'
			OR a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'nama',
			2   => 'email',
			3   => 'nim',
			4   => 'nim',
			5   => 'status',

		);
			$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";

			$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;

	}

	public function cari_dpt($nim)
	{		
		$sql = "SELECT `nama` FROM `pemilih` WHERE `nim` = '$nim'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function cari_email($email)
	{
		$sql = "SELECT `email` FROM `pemilih` WHERE `email` = '$email'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	

	public function detail_dpm($id_kandidat='')
	{
		$sql = "SELECT * FROM `dokumen_dpm` WHERE `nim` = '$id_kandidat'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function detail_kandidat($id_kandidat='')
	{
		$sql = "SELECT * FROM `kandidat` WHERE `nim` = '$id_kandidat'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function find_user($id)
	{
		$sql = "SELECT * FROM `pemilih` WHERE `nim` = '$id'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function pendaftar_presma()
	{
		$sql = "SELECT * FROM `dokumen_presma`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function pendaftar_dpm()
	{
		$sql = "SELECT * FROM `dokumen_dpm`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


	public function pendaftar_dpm_random($value='')
	{
		$sql = "SELECT * FROM `dokumen_dpm` ORDER BY RAND()";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_organisasi()
	{
		$sql = "SELECT * FROM `organisasi`
		
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function save_dokumen($simpan)
	{
		$this->db->insert('dokumen_presma', $simpan);
	}

	public function save_dokumen_dpm($simpan)
	{
		$this->db->insert('dokumen_dpm', $simpan);
	}

	public function register($register)
	{
		$this->db->insert('pemilih', $register);
	}

	public function cekdokumen($nim)
	{
		$sql = $this->db->query("SELECT `nim` FROM `dokumen_dpm` WHERE `nim`= $nim");
		return $sql->result();
	}

	public function cekdokumen_presma($nim)
	{
		$sql = $this->db->query("SELECT `ketua_nim` FROM `dokumen_presma` WHERE `ketua_nim`= $nim");
		return $sql->result();
	}
	
	public function live_data()
	{
		$sql = $this->db->query("SELECT b.nama, COUNT(a.id_vote) pemilih FROM vote a INNER JOIN kandidat b ON a.nim_peserta=b.nim GROUP BY b.nama");
		$result = array();
		foreach ($sql->result() as $data) {
			$result[] = array(
				'name'  => $data->nama,
				'y' => (float)$data->pemilih
			);
		}
		return $result;
	}
}
