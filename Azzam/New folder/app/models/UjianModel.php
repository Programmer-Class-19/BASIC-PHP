<?php
class UjianModel {
    public function getAllUjian() {
        // Query untuk mendapatkan semua ujian
        $query = "SELECT * FROM ujian";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function getUjianById($id) {
        // Query untuk mendapatkan ujian berdasarkan id
        $query = "SELECT * FROM ujian WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function insertUjian($data) {
        // Query untuk menambahkan ujian baru
        $query = "INSERT INTO ujian (nama_ujian, tanggal) VALUES ('$data[nama_ujian]', '$data[tanggal]')";
        mysqli_query($this->koneksi, $query);
    }

    public function updateUjian($id, $data) {
        // Query untuk mengedit ujian
        $query = "UPDATE ujian SET nama_ujian = '$data[nama_ujian]', tanggal = '$data[tanggal]' WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteUjian($id) {
        // Query untuk menghapus ujian
        $query = "DELETE FROM ujian WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }
}