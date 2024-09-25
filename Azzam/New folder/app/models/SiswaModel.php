<?php
class SiswaModel {
    public function getAllSiswa() {
        // Query untuk mendapatkan semua siswa
        $query = "SELECT * FROM siswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function getSiswaById($id) {
        // Query untuk mendapatkan siswa berdasarkan id
        $query = "SELECT * FROM siswa WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function insertSiswa($data) {
        // Query untuk menambahkan siswa baru
        $query = "INSERT INTO siswa (nama, nis) VALUES ('$data[nama]', '$data[nis]')";
        mysqli_query($this->koneksi, $query);
    }

    public function updateSiswa($id, $data) {
        // Query untuk mengedit siswa
        $query = "UPDATE siswa SET nama = '$data[nama]', nis = '$data[nis]' WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteSiswa($id) {
        // Query untuk menghapus siswa
        $query = "DELETE FROM siswa WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }
}