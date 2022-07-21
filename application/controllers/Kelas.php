<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$judul['atas']="Halaman Kelas";
		$judul['menuatas']="Kelas";
		$data['kelas']=$this->admin_model->tampildata('kelas', 'id_kelas');
		$this->load->view('template/header', $judul);	
		$this->load->view('admin/kelas', $data);
		$this->load->view('template/footer');
	}
	public function tambah_kelas()
	{
		$judul['atas']="Halaman Tambah Kelas";
		$judul['menuatas']="Kelas";
		$this->load->view('template/header', $judul);	
		$this->load->view('admin/tambah_kelas');
		$this->load->view('template/footer');		
	}
	public function simpan_kelas(){
		$this->form_validation->set_rules('nama', 'Nama Kelas', 'required');
		if ($this->form_validation->run() == FALSE) {
			$judul['atas']="Halaman Tambah Kelas";
			$judul['menuatas']="Kelas";
			$this->load->view('template/header', $judul);
			$this->load->view('admin/tambah_kelas');
			$this->load->view('template/footer');	
		} else {
			$data = array(
				'namakls'=>$this->input->post('nama'),
				'walikelas'=>$this->input->post('wali'),
				'tahun'=>$this->input->post('tahun')
			);
			$query = $this->admin_model->simpandata('kelas', $data);
				if ($query) {
					$this->session->set_flashdata('info', 'Ditambahkan');
					redirect('kelas');
				} else {
					$this->session->set_flashdata('info', 'gagal');
					redirect('kelas');
				}
				
		}
	}
	public function hapus_kelas($id){
		$this->admin_model->hapusdata('kelas', $id, 'id_kelas');
		if ($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Dihapus');
			redirect('kelas','refresh');
		} else {			
			$this->session->set_flashdata('info', 'gagal');
			redirect('kelas','refresh');
		}
		
	}
	public function formubah_kelas($id){
		$judul['atas']="Halaman Ubah Kelas";
		$judul['menuatas']="Kelas";
		$data['kelas']=$this->admin_model->formedit('kelas', 'id_kelas', $id);
		$this->load->view('template/header', $judul);	
		$this->load->view('admin/ubah_kelas', $data);
		$this->load->view('template/footer');
	}
	public function ubah_kelas(){
		$id = $this->input->post('id_kelas');
		$data = array(
			'namakls'=>$this->input->post('nama'),
			'id_guru'=>$this->input->post('wali'),
			'id_ta'=>$this->input->post('tahun')
		);
		$query = $this->admin_model->editdata('kelas', 'id_kelas', $id, $data);
			if ($query) {
				$this->session->set_flashdata('info', 'Diubah');
				redirect('kelas');
			} else {
				$this->session->set_flashdata('info', 'gagal');
				redirect('kelas');
			}
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */