<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Tahun Ajaran";
		$judul['menuatas']="Tahun";
		$this->load->view('template/header', $judul);		
		$this->load->view('admin/tahun');
		$this->load->view('template/footer');
	}

}

/* End of file Tahun.php */
/* Location: ./application/controllers/Tahun.php */