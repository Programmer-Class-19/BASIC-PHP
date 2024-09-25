<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'admin_login') {
			if ($this->session->userdata('status') != 'guru_login') {
				redirect('auth');
			}
		}
	}

	public function index()
	{
		$data['soal'] = $this->m_data->get_data('tb_matapelajaran')->result();
		$this->load->view('admin/v_soal', $data);
	}

	public function insert()
	{
		$nama_matapelajaran 	= $this->input->post('nama_matapelajaran');
		$soal				= $this->input->post('soal');
		$a 					= $this->input->post('a');
		$b					= $this->input->post('b');
		$c					= $this->input->post('c');
		$d					= $this->input->post('d');
		$e					= $this->input->post('e');
		$kunci				= $this->input->post('kunci');
		$data = array(
			'id_matapelajaran' => $nama_matapelajaran,
			'pertanyaan' => $soal,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'e' => $e,
			'kunci_jawaban' => $kunci
		);
		if ($nama_matapelajaran == '' || $soal == '') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-ban"></i> Maaf, Input Soal Gagal!</h4> Mata Kuliah dan Pertanyaan Soal tidak boleh dikosongkan.</div>');
			redirect(base_url('soal'));
		} else {
			$this->m_data->insert_data($data, 'tb_soal_ujian');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Selamat, Soal berhasil dibuat!</h4>untuk melihat soal tersebut bisa anda lihat di menu <b>Daftar Soal ujian</b>.</div>');
			redirect(base_url('soal'));
		}	
	}
}
