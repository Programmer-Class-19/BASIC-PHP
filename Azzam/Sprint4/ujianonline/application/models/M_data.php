<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_data extends CI_Model
{


	//fungsi untuk mengambil data dari database
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	//fungsi untuk insert data ke database
	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	//fungsi untuk mengambil data untuk di edit
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//fungsi untuk mengupdate data di database
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//fungsi untuk menghapus data
	public function delete_data($where, $table)
	{
		$this->db->delete($table, $where);
	}

	// Fungsi untuk melakukan proses upload file import
	public function insertimport($data)
	{
		$this->db->insert_batch('tb_siswa', $data);
	}

	public function insertbatch($data)
	{
		$this->db->insert_batch($table, $data);
	}

	// Fungsi untuk insert lebih dari 1 data
	public function insert_multiple()
	{
		$durasi_ujian		= $this->input->post('durasi_ujian');
				
		$timer_ujian 		= $durasi_ujian*60;

		$entri = array();
		$count = $this->input->post('id');
		foreach ($count as $i => $value) {
			$entri[] = array(
				'id_siswa' 	=> $this->input->post('id')[$i],
				'id_matapelajaran' => $this->input->post('mapel'),
				'id_jenis_ujian'=> $this->input->post('jenis_ujian'),
				'tanggal_ujian' => $this->input->post('tanggal'),
				'jam_ujian' 	=> $this->input->post('jam'),
				'durasi_ujian' 	=> $durasi_ujian,
				'timer_ujian' 	=> $timer_ujian,
				'status_ujian' 	=> 1

			);
		}
		//return $entri;
		// echo "<pre>"; print_r($timer_ujian);die;
		$this->db->insert_batch('tb_peserta', $entri);
		return true;
	}

	public function get_joinsiswa($id)
	{
		$query = 'SELECT * FROM tb_siswa join tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas WHERE tb_siswa.id_siswa="' . $id . '"';
		return $this->db->query($query);
	}

	public function soal($where, $table)
	{

		$this->db->order_by("RAND ()");
		return $this->db->get_where($table, $where);
	}

	public function insert_jawaban()
	{

		$this->db->insert_batch('tb_jawaban', $entri);
		return true;
	}

	public function UpdateNilai($id_jawaban, $data)
	{
		$this->db->where('id_jawaban', $id_jawaban);
		$this->db->update('tb_jawaban', $data);
	}

	public function UpdateNilai2($id_peserta, $data)
	{
		$this->db->where('id_peserta', $id_peserta);
		$this->db->update('tb_peserta', $data);
	}

	public function get_peserta($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tb_peserta');
		$this->db->join('tb_matapelajaran', 'tb_peserta.id_matapelajaran=tb_matapelajaran.id_matapelajaran');
		$this->db->join('tb_siswa', 'tb_peserta.id_siswa=tb_siswa.id_siswa');
		$this->db->where('tb_siswa.id_siswa', $id_siswa);
		$query = $this->db->get();
		return $query->result();
	}

	public function importguru($data = array())
	{
		$jumlah = count($data);

		if ($jumlah > 0) {
			$this->db->insert_batch('tb_guru', $data);
		}
	}
}
