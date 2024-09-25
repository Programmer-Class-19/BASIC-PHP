<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matapelajaran extends CI_Controller {


	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url('auth'));
		}
		
	}

	public function index()
	{
		$data['mapel'] = $this->m_data->get_data('tb_matapelajaran')->result();
		$this->load->view('admin/v_mapel', $data);
	}

	public function mapel_aksi()
	{
		$kode 		= $this->input->post('kode');
		$nama		= $this->input->post('nama');

		$data = array(
			'kode_matapelajaran'=>$kode,
			'nama_matapelajaran'=>$nama
		);
		$this->m_data->insert_data($data, 'tb_matapelajaran');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat !<br></b> Anda telah berhasil menambahkan data Mata Pelajaran</div>');
		redirect(base_url('matapelajaran'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_matapelajaran'=>$id
				);
		$this->m_data->delete_data($where,'tb_matapelajaran');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Selamat !<br></b> Anda telah berhasil menghapus data Mata Pelajaran</div>');
		redirect(base_url('matapelajaran'));
	}

	public function edit($id) 
	{
		$where	= array('id_matapelajaran'=>$id);
		$data['mapel']=$this->m_data->edit_data($where,'tb_matapelajaran')->result();
		$this->load->view('admin/v_mapel_edit',$data);
	}

	public function update()
	{
		$id 		= $this->input->post('id');
		$kode 		= $this->input->post('kode');
		$nama		= $this->input->post('nama');

		$where = array('id_matapelajaran'=>$id);
		$data = array(
					'kode_matapelajaran'=>$kode,
					'nama_matapelajaran'=>$nama
					);
		$this->m_data->update_data($where,$data,'tb_matapelajaran');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat !<br></b> Anda telah berhasil mengupdate data Mata Pelajaran</div>');
		redirect(base_url('matapelajaran'));
	}
}