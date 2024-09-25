<?php
class JawabanModel {
    public function getAllJawaban() {
        // Query untuk mendapatkan semua jawaban
        $query = "SELECT * FROM jawaban";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function getJawabanById($id) {
        // Query untuk mendapatkan jawaban berdasarkan id
        $query = "SELECT * FROM jawaban WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function insertJawaban($data) {
        // Query untuk menambahkan jawaban baru
        $query = "INSERT INTO jawaban (isi) VALUES ('$data[isi]')";
        mysqli_query($this->koneksi, $query);
    }

    public function updateJawaban($id, $data) {
        // Query untuk mengedit jawaban
        $query = "UPDATE jawaban SET isi = '$data[isi]' WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteJawaban($id) {
        // Query untuk menghapus jawaban
        $query = "DELETE FROM jawaban WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }
}