<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Sekolah";
		$judul['menuatas']="Sekolah";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/sekolah');
		$this->load->view('template/footer');		
	}

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */