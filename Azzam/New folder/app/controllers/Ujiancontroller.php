<?php
class UjianController {
    public function index() {
        // Tampilkan daftar ujian
        $ujian_model = new UjianModel();
        $ujian = $ujian_model->getAllUjian();
        require_once 'views/ujian/index.php';
    }

    public function create() {
        // Tampilkan form untuk menambahkan ujian baru
        require_once 'views/ujian/create.php';
    }

    public function store() {
        // Proses menambahkan ujian baru
        $ujian_model = new UjianModel();
        $ujian_model->insertUjian($_POST);
        header('Location: ' . BASEURL . 'ujian');
    }
