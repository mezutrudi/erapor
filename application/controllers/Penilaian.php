<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Penilaian";
		$judul['menuatas']="Penilaian";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/siswa');
		$this->load->view('template/footer');		
	}

}

/* End of file Penilaian.php */
/* Location: ./application/controllers/Penilaian.php */