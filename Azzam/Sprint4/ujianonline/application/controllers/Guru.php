<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guru extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data['guru'] = $this->m_data->get_data('tb_guru')->result();
		$this->load->view('admin/v_guru', $data);
	}

	public function guru_aksi()
	{
		$nik		= $this->input->post('nik');
		$nama 		= $this->input->post('nama');		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$data = array(
			'id_guru'=>$nik,
			'nama_guru'=>$nama,
			'username'=>$username,
			'password'=>$password,
		);

		$this->m_data->insert_data($data, 'tb_guru');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil menambahkan data guru</div>');
		redirect(base_url('guru'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_guru'=>$id
				);

		$this->m_data->delete_data($where,'tb_guru');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil menghapus data guru</div>');
		redirect(base_url('guru'));
	}

	public function edit($id) 
	{
		$where	= array('id_guru'=>$id);
		$data['guru']=$this->m_data->edit_data($where,'tb_guru')->result();
		$this->load->view('admin/v_guru_edit',$data);
	}
	
	public function update()
	{
		$id 		= $this->input->post('nik');
		$nama 		= $this->input->post('nama');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$where = array('id_guru'=>$id);		
		$data = array(
						'nama_guru'=>$nama,
						'username'=> $username,
						'password'=>$password,
					);
		$this->m_data->update_data($where,$data,'tb_guru');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil mengupdate data guru</div>');
		redirect(base_url('guru'));
	}
}
