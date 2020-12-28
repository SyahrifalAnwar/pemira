<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_kegiatan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('agenda_kegiatan');
	}
}
