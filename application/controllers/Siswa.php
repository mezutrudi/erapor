<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Siswa";
		$judul['menuatas']="Siswa";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/siswa');
		$this->load->view('template/footer');
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */