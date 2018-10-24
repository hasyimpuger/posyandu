<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

	public function showBayi()
	{
		return $this->db->get('tb_bayi')->result_object();
	}

	public function insertBayi($data)
	{
		return $this->db->insert("tb_bayi", $data);
	}	

	public function getBayi($id)
	{
		return $this->db->get_where('tb_bayi', array('id_bayi' => $id))->row();
	}

	public function updateBayi($data)
	{
		return $this->db->update('tb_bayi', $data);
	}

	public function deleteBayi($id)
	{
		return $this->db->delete('tb_bayi', array('id_bayi' => $id));
	}


	// Penimbangan
	public function showPenimbangan($id) {
		return $this->db->get_where('tb_penimbangan', array('id_bayi' => $id));
	}

	public function insertPenimbangan($data) {
		return $this->db->insert('tb_penimbangan', $data);
	}

	public function updatePenimbangan($data) {
		return $this->db->update('tb_penimbangan', $data);
	}
}

/* End of file m_model.php */
/* Location: ./application/models/m_model.php */