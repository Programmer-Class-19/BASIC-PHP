<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		//cek session yang login, jika session status tidak sama dengan session admin_login,maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status') != 'admin_login') {
			if ($this->session->userdata('status') != 'guru_login') {
				
				redirect('auth');
				
			}
		}
	}

	public function index()
	{
		if ($this->session->userdata('status') == 'admin_login') {
			$this->load->view('admin/v_home');
		}  else {
			$this->load->view('admin/v_home_guru');
		}
	}
}
