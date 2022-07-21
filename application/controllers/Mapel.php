<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Mata Pelajaran";
		$judul['menuatas']="Mapel";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/mapel');
		$this->load->view('template/footer');
	}

}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */