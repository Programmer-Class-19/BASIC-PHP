<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username harus di isi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus di isi!']);

		$username = htmlspecialchars($this->input->post('username', TRUE));
		$password = htmlspecialchars($this->input->post('password', TRUE));

		if ($this->form_validation->run() != false) {

			$where 		= array('username' => $username);
			$admin 		= $this->db->get_where('tb_admin', ['username' => $username])->row_array();
			$guru 		= $this->db->get_where('tb_guru', ['username' => $username])->row_array();
			$siswa 		= $this->db->get_where('tb_siswa', ['username' => $username])->row_array();

			if ($password == $admin['password']) {
				$data = $this->m_data->edit_data($where, 'tb_admin')->row();
				$data_session = array(
					'id'		=> $data->id,
					'nama'		=> $data->nama_user,
					'username'	=> $data->username,
					'status'	=> 'admin_login'
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center"><b>Login Berhasil !,<br></b> Halaman ini akan dialihkan ke Halaman Home</div>');
				redirect(base_url('home'));
			} else if ($password == $guru['password']) {
				$data = $this->m_data->edit_data($where, 'tb_guru')->row();
				$data_session = array(
					'id'		=> $data->id,
					'nama'		=> $data->nama_guru,
					'username'	=> $data->username,
					'status'	=> 'guru_login'
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center"><b>Login Berhasil !,<br></b> Halaman ini akan dialihkan ke Halaman Home</div>');
				redirect(base_url('home'));
			} else if ($password == $siswa['password']) {
				$data = $this->m_data->edit_data($where, 'tb_siswa')->row();

				$data_session = array(
					'id'		=> $data->id_siswa,
					'nis'		=> $data->nis,
					'nama'		=> $data->nama_siswa,
					'username'	=> $data->username,
					'status'	=> 'siswa_login'
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center"><b>Login Berhasil !,<br></b> Halaman ini akan dialihkan ke Halaman Home</div>');
				redirect(base_url('home_siswa'));
			
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message text-center"><b>Login Gagal !,<br></b> Maaf, Username dan Password tidak ditemukan</div>');
				redirect(base_url('auth'));
			}
		} else {
			$this->load->view('v_login');
		}
	}
}
