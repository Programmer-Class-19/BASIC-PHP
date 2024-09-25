<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
	public function index() 
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center">Anda sudah logout</div>');
		redirect(base_url('auth'));		
	}
}