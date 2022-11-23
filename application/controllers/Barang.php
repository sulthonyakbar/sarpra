<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['barang'] = $this->Barang_model->getAllBarang();
		$this->load->view('barang', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

		if ($this->form_validation->run() == FALSE) { 
		$this->load->view('barang/tambah');
		} else {
			$this->Barang_model->tambahDataBarang();
			redirect('barang');
		}
	}

	public function hapus($id)
	{
		$this->Barang_model->hapusDataBarang($id);
		redirect('barang');
	}	

	public function ubah($id)
	{
		$data['data_barang'] = $this->Barang_model->getBarangById($id);

		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

		if ($this->form_validation->run() == FALSE) { 
			$this->load->view('barang/ubah', $data);
		} else {
			$this->Barang_model->ubahDataBarang();
			redirect('barang');
		}
	}

	public function getBarangById($id)
	{
		return $this->db->get_where('data_barang', ['id_barang' => $id])->row_array();
	}

}

