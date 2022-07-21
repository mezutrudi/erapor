<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Petugas";
		$judul['menuatas']="Petugas";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/petugas');
		$this->load->view('template/footer');		
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */