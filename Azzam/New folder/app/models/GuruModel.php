<?php
class GuruModel {
    public function getAllGuru() {
        // Query untuk mendapatkan semua guru
        $query = "SELECT * FROM guru";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function getGuruById($id) {
        // Query untuk mendapatkan guru berdasarkan id
        $query = "SELECT * FROM guru WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function insertGuru($data) {
        // Query untuk menambahkan guru baru
        $query = "INSERT INTO guru (nama, nip) VALUES ('$data[nama]', '$data[nip]')";
        mysqli_query($this->koneksi, $query);
    }

    public function updateGuru($id, $data) {
        // Query untuk mengedit guru
        $query = "UPDATE guru SET nama = '$data[nama]', nip = '$data[nip]' WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteGuru($id) {
        // Query untuk menghapus guru
        $query = "DELETE FROM guru WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }
}