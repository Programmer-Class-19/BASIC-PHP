<?php
class JawabanController {
    public function index() {
        // Tampilkan daftar jawaban
        $jawaban_model = new JawabanModel();
        $jawaban = $jawaban_model->getAllJawaban();
        require_once 'views/jawaban/index.php';
    }

    public function create() {
        // Tampilkan form untuk menambahkan jawaban baru
        require_once 'views/jawaban/create.php';
    }

    public function store() {
        // Proses menambahkan jawaban baru
        $jawaban_model = new JawabanModel();
        $jawaban_model->insertJawaban($_POST);
        header('Location: ' . BASEURL . 'jawaban');
    }

    public function edit($id) {
        // Tampilkan form untuk mengedit jawaban
        $jawaban_model = new JawabanModel();
        $jawaban = $jawaban_model->getJawabanById($id);
        require_once 'views/jawaban/edit.php';
    }

    public function update($id) {
        // Proses mengedit jawaban
        $jawaban_model = new JawabanModel();
        $jawaban_model->updateJawaban($id, $_POST);
        header('Location: ' . BASEURL . 'jawaban');
    }

    public function delete($id) {
        // Proses menghapus jawaban
        $jawaban_model = new JawabanModel();
        $jawaban_model->deleteJawaban($id);
        header('Location: ' . BASEURL . 'jawaban');
    }
}