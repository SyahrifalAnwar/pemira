<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quick_count extends CI_Controller {

	
	public function index()
	{
		$this->load->view('quickcount');
	}

}
