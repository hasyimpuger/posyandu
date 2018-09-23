<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data['bayi'] = $this->m_model->showBayi();
		$data['content'] = 'content/bayi/bayi';
		$data['title'] = "Data Balita/Bayi - Posyandu";
		$this->load->view('home', $data);
	}

	public function tambah_data_bayi()
	{
		if($this->input->post('simpan')) 
		{
			$this->form_validation->set_message('required', 'Tidak Boleh Kosong');
			$this->form_validation->set_rules('nama', 'Nama Bayi', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('ayah', 'Nama Ayah', 'trim|required');
			$this->form_validation->set_rules('ibu', 'Nama ibu', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
				$data['content'] = 'content/bayi/tambah_bayi';
				$data['title'] = "Tambah Data Balita/Bayi - Posyandu";
				$this->load->view('home', $data);			}
				else
				{
					$nama = $this->input->post('nama');
					$tl = $this->input->post('tanggal');
					$ayah = $this->input->post('ayah');
					$ibu = $this->input->post('ibu');
					$status = "Aktif";
					$obj = array(
						'nama_bayi' => $nama,
						'tanggal_lahir' => $tl,
						'nama_ayah' => $ayah,
						'nama_ibu' => $ibu,
						'status' => $status
					);
					$this->m_model->insertBayi($obj);
					redirect('bayi','refresh');
				}
			}
			else 
			{
				$data['content'] = 'content/bayi/tambah_bayi';
				$data['title'] = "Tambah Data Balita/Bayi - Posyandu";
				$this->load->view('home', $data);
			}
		}

		public function edit_data_bayi($id)
		{
			$data['content'] = 'content/bayi/edit_bayi';
			$data['title'] = "Edit Data Bayi - Posyandu";
			$data['bayi'] = $this->m_model->getBayi($id); 
			$this->load->view('home', $data);
		}

		
	}
	/* End of file bayi.php */
/* Location: ./application/controllers/bayi.php */