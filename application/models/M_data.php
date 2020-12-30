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

	public function find_user($id)
	{
		$sql = "SELECT * FROM `pemilih` WHERE `id` = '$id'
		
		";
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
