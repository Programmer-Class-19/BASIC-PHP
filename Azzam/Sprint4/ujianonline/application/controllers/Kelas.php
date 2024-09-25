<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != 'admin_login') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{		
		$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
		$this->load->view('admin/v_kelas', $data);
	}

	public function kelas_aksi()
	{
		$nama 		= $this->input->post('nama_kelas');

		$data = array('nama_kelas' => $nama);

		$this->m_data->insert_data($data, 'tb_kelas');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat !<br></b> Data Kelas berhasil ditambahkan</div>');
		redirect(base_url('kelas'));
	}

	public function hapus($id)
	{
		$where = array(
			'id_kelas' => $id
		);
		
		$this->m_data->delete_data($where, 'tb_kelas');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Sukses !<br></b> Data Kelas berhasil dihapus</div>');
		redirect(base_url('kelas'));
	}

	public function edit($id)
	{
		$where	= array('id_kelas' => $id);
		$data['kelas'] = $this->m_data->edit_data($where, 'tb_kelas')->result();
		$this->load->view('admin/v_kelas_edit', $data);
	}
	
	public function update()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');

		$where = array('id_kelas' => $id);

		$data = array('nama_kelas' => $nama);
		$this->m_data->update_data($where, $data, 'tb_kelas');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Sukses !<br></b> Data Kelas berhasil diupdate</div>');
		redirect(base_url('kelas'));
	}
}
