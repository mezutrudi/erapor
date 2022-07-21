<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function tampildata($table, $urut_id){
		return $this->db->from($table)
					->order_by($urut_id, 'DESC')
					->get('');
	}
	public function simpandata($table, $data){
		return $this->db->insert($table, $data);
	}
	public function hapusdata($table, $id, $primary){
		return $this->db->delete($table, array($primary=>$id));
	}
	public function formedit($table, $primary, $id){
		return $this->db->get_where($table, array($primary=>$id))->row();
	}
	public function editdata($table, $primary, $id, $data){
		return $this->db->where($primary, $id)
						->update($table, $data);
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */