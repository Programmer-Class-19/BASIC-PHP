<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_siswa extends CI_Controller {


	public function __construct() {
		parent::__construct();

		//cek session yang login, jika session status tidak sama dengan session admin_login,maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status') !='siswa_login') {
			redirect(base_url().'auth?alert=belum_login');
		}
		
	}

	public function index()
	{
		$this->load->view('siswa/v_home');
	}


}

