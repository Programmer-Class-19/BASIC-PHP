<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != 'admin_login') {
			if ($this->session->userdata('status') != 'guru_login') {
				if ($this->session->userdata('status') != 'siswa_login') {
					redirect(base_url('auth'));
				}
			}
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[6]|matches[password2]', [
			'required' 		=> 'Silahkan Masukan Password Baru Anda !',
			'matches' 		=> 'Password tidak sama !',
			'min_length' 	=> 'Password Harus Lebih dari 6 Karakter'
		]);
		$this->form_validation->set_rules('password2', 'Password Ulang', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			if ($this->session->userdata('status') == 'admin_login') {
				$this->load->view('admin/v_password');
			} else if ($this->session->userdata('status') == 'guru_login') {
				$this->load->view('admin/v_password_guru');
			} else if ($this->session->userdata('status') == 'siswa_login') {
				$this->load->view('siswa/v_password');
			} else 

			if ($this->session->userdata('status') == 'admin_login') {
				$id = $this->session->userdata('id');
				$where 	= array('id' => $id);
				$data 	= array('password' => password_hash($baru, PASSWORD_BCRYPT));;

				$this->m_data->update_data($where, $data, 'tb_admin');
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Sukses !<br></b> Password anda berhasil diganti</div>');
				redirect(base_url('password'));
			} else if ($this->session->userdata('status') == 'guru_login') {
				$id = $this->session->userdata('id');
				$where 	= array('id_guru' => $id);
				$data 	= array('password' => password_hash($baru, PASSWORD_BCRYPT));

				$this->m_data->update_data($where, $data, 'tb_guru');
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Sukses !<br></b> Password anda berhasil diganti</div>');
				redirect(base_url('password'));
			
			} else {
				$id = $this->session->userdata('id');
				$where 	= array('id_siswa' => $id);
				$data 	= array('password' => password_hash($baru, PASSWORD_BCRYPT));

				$this->m_data->update_data($where, $data, 'tb_siswa');
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Sukses !<br></b> Password anda berhasil diganti</div>');
				redirect(base_url('password'));
			}
		}
	}
}
