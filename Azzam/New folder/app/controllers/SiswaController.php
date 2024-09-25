<?php
class SiswaController {
    public function index() {
        // Tampilkan daftar siswa
        $siswa_model = new SiswaModel();
        $siswa = $siswa_model->getAllSiswa();
        require_once 'views/siswa/index.php';
    }

    public function create() {
        // Tampilkan form untuk menambahkan siswa baru
        require_once 'views/siswa/create.php';
    }

    public function store() {
        // Proses menambahkan siswa baru
        $siswa_model = new SiswaModel();
        $siswa_model->getAllSiswa($_POST);
        header('Location: ' . BASEURL . 'siswa');
    }

    public function edit($id) {
        // Tampilkan form untuk mengedit siswa
        $siswa_model = new SiswaModel();
        $siswa = $siswa_model->getAllSiswa($id);
        require_once 'views/siswa/edit.php';
    }

    public function update($id) {
        // Proses mengedit siswa
        $siswa_model = new SiswaModel();
        $siswa_model->updateSiswa($id, $_POST);
        header('Location: ' . BASEURL . 'siswa');
    }

    public function delete($id) {
        // Proses menghapus siswa
        $siswa_model = new SiswaModel();
        $siswa_model->deleteSiswa($id);
        header('Location: ' . BASEURL . 'siswa');
    }
}