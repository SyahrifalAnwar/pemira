<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	
	public function checkleveluser($nim, $password){

		if($nim && $password) {
			$sql = "SELECT * FROM pemilih WHERE nim = '$nim' AND sandi = '$password' AND status = 0";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return ($query->num_rows() === 1 ? $result['id'] : false);
		}
		else {
			return false;
		}

	}

	public function get_datadpt_json($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$id_wt = $this->session->userdata('id_wt');
		$sql = "
		SELECT (@row:=@row+1) AS nomor, nama, nim
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
			2   => 'nim',
			3   => 'nim',

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

	public function find_user($id)
	{
		$sql = "SELECT * FROM `pemilih` WHERE `id` = '$id'
		
		";
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
}
