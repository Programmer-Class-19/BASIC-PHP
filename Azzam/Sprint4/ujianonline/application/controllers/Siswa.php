<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
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
		$data['siswa'] = $this->db->query('SELECT * FROM tb_siswa join tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas')->result();
		$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
		$this->load->view('admin/v_siswa', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Nama harus di isi!']);
		$this->form_validation->set_rules('nis', 'nis', 'required|trim|is_unique[tb_siswa.nis]', ['required' => 'nis harus di isi!']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', ['required' => 'Kelas harus di pilih!']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_siswa.username]', ['required' => 'Username harus di isi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus di isi!']);

		$nama 		= htmlspecialchars($this->input->post('nama', TRUE));
		$nis		= htmlspecialchars($this->input->post('nis', TRUE));
		$kelas 		= htmlspecialchars($this->input->post('kelas', TRUE));
		$username	= htmlspecialchars($this->input->post('username', TRUE));
		$password	= htmlspecialchars($this->input->post('password', TRUE));

		if ($this->form_validation->run() != false) {
			$data = array(
				'nama_siswa' => $nama,
				'nis' => $nis,
				'id_kelas' => $kelas,
				'username' => $username,
				'password' => $password,
			);

			$this->m_data->insert_data($data, 'tb_siswa');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil menambahkan data siswa</div>');
			redirect(base_url('siswa'));
		} else {
			$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
			$this->load->view('admin/v_siswa_tambah', $data);
		}
	}

	public function edit($id)
	{
		$data['siswa'] = $this->m_data->get_joinsiswa($id)->result();
		$data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
		$this->load->view('admin/v_siswa_edit', $data);
	}
	
	public function update()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$nis		= $this->input->post('nis');
		$kelas		= $this->input->post('kelas');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$where = array('id_siswa' => $id);

		if ($password == "") {
			$data = array(
				'nama_siswa' => $nama,
				'nis' => $nis,
				'id_kelas' => $kelas,
				'username' => $username
			);
			$this->m_data->update_data($where, $data, 'tb_siswa');
		} else { 
			$data = array(
				'nama_siswa' => $nama,
				'nis'		 => $nis,
				'id_kelas' 	 => $kelas,
				'username' 	 => $username,
				'password' 	 => $password,
			);
			$this->m_data->update_data($where, $data, 'tb_siswa');
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil mengupdate data siswa</div>');
		redirect(base_url('siswa'));
	}

	public function hapus($id)
	{
		$where = array(
			'id_siswa' => $id
		);
		$this->m_data->delete_data($where, 'tb_siswa');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil menghapus data siswa</div>');
		redirect(base_url('siswa'));
	}

	
}
