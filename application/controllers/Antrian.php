<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Antrian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Antrian_model');
        $this->load->model('Pasien_model');
	}
	function index()
	{
		$data['judul'] = "Pasien Page";
		$data['pasien'] = $this->Pasien_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("pasien/vw_pasien", $data);
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Pasien";
		$data['pasien'] = $this->Coffee_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->Pasien_model->get();
		$this->form_validation->set_rules('pasien', 'Nama Pasien', 'required', [
			'required' => 'Nama Pasien Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_dokter', 'Dokter', 'required', [
			'required' => 'Dokter Wajib di isi'
		]);
		$this->form_validation->set_rules('jadwal', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("pasien/vw_ubah_pasien", $data);
		} else {
			$data = [
				'nama_pasien' => $this->input->post('nama_pasien'),
				'ttl' => $this->input->post('ttl'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_bpjs' => $this->input->post('no_bpjs'),

			];
			$id = $this->input->post('id');
			$this->Coffee_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pasien Berhasil Diubah!</div>');
			redirect('Pasien');
		}
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Pasien";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', [
			'required' => 'Nama Pasien Wajib di isi'
		]);
		$this->form_validation->set_rules('ttl', 'TTL', 'required', [
			'required' => 'Tempat Tanggal Lahir Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("pasien/vw_tambah_pasien", $data);
		} else {

			$data = [
				'nama_pasien' => $this->input->post('nama_pasien'),
				'ttl' => $this->input->post('ttl'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_bpjs' => $this->input->post('no_bpjs'),

			];
			$this->Coffee_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pasien Berhasil Ditambah!</div>');
			redirect('Pasien');
		}
	}


	public function hapus($id)
	{
		$this->Pasien_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pasien tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pasien Berhasil Dihapus!</div>');
		}
		redirect('Pasien');
	}
}