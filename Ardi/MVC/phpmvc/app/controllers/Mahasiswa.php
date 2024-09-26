<?php

class Mahasiswa extends Controller{
    public function indext()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/indext', $data);
        $this->views('templates/fotter');
    }
}
