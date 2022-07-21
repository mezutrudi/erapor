<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$judul['atas']="Halaman Utama Administrator";
		$judul['menuatas']="Beranda";
		$data['k']=$this->db->get('kelas')->num_rows();
		// $data['s']=$this->db->get('siswa')->num_rows();
		// $data['g']=$this->db->get('guru')->num_rows();
		$this->load->view('template/header', $judul);	
		$this->load->view('admin/beranda', $data);
		$this->load->view('template/footer');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */