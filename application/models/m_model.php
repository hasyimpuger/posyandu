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
}

/* End of file m_model.php */
/* Location: ./application/models/m_model.php */