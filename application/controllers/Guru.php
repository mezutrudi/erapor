<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Guru";
		$judul['menuatas']="Guru";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/guru');
		$this->load->view('template/footer');	
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */