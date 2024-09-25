<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peserta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'admin_login') {
			redirect(base_url('auth'));
		}
		$this->load->model('m_peserta');
		
	}

	public function index()
	{
		if (isset($_GET['idkls']) and isset($_GET['idsiswa'])) {
			$idkls = $this->input->get('idkls');
			$idsiswa = $this->input->get('idsiswa');
			$data['peserta'] = $this->m_peserta->get_peserta($idkls, $idsiswa)->result();
			$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
			$data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
		} else if (isset($_GET['idkls'])) {
			$idkls = $this->input->get('idkls');
			$data['peserta'] = $this->m_peserta->get_peserta2($idkls)->result();
			$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
			$data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
		} else if (isset($_GET['idsiswa'])) {
			$idsiswa = $this->input->get('idsiswa');
			$data['peserta'] = $this->m_peserta->get_peserta3($idsiswa)->result();
			$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
			$data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
		} else {
			$data['peserta'] = $this->m_peserta->get_peserta4()->result();
			$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
			$data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
		}
		$this->load->view('admin/v_peserta', $data);
	}

	public function hapus($id)
	{
		$where = array(
			'id_peserta' => $id
		);
		$this->m_data->delete_data($where, 'tb_peserta');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Data Peserta Ujian berhasil di hapus !</h4></div>');
		redirect(base_url('peserta'));
	}


	public function edit($id)
	{
		$data['peserta'] = $this->m_peserta->get_joinpeserta($id);
		$data['mapel'] = $this->m_data->get_data('tb_matapelajaran')->result();
		$data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
		$data['jenis_ujian'] = $this->m_data->get_data('tb_jenis_ujian')->result();
		$this->load->view('admin/v_peserta_edit', $data);
	}

	public function update()
	{
		$peserta 		= $this->input->post('peserta');
		$mapel 			= $this->input->post('mapel');
		$tanggal		= $this->input->post('tanggal');
		$jam			= $this->input->post('jam');
		$durasi_ujian		= $this->input->post('durasi_ujian');
		$jenis			= $this->input->post('jenis');
		$timer_ujian 		= $durasi_ujian*60;
		$where  = array('id_peserta' => $this->input->post('id'));

		if ($peserta == '' || $mapel == '' || $tanggal == '' || $jam == '' || $durasi_ujian == '' || $jenis == '') {
			
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> semua field harus diisi semua !</h4></div>');
			redirect(base_url('peserta'));
		} else {
			$data = array(
				'id_siswa'		=> $peserta,
				'id_matapelajaran'		=> $mapel,
				'id_jenis_ujian'	=> $jenis,
				'tanggal_ujian'		=> $tanggal,
				'jam_ujian'			=> $jam,
				'durasi_ujian'			=> $durasi_ujian,
				'timer_ujian'			=> $timer_ujian,
				'status_ujian'			=> 1
				
			);

			$this->m_data->update_data($where, $data, 'tb_peserta');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Data berhasil di Update.</h4></div>');
			redirect(base_url('peserta'));
		}
	}

	
	
}
