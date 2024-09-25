<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    // private $mhs = [
    //     [
    //         "nama" => "Ahmad Khodhir",
    //         "nrp" => "202110001",
    //         "email" => "khodhir@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Rizky Fadilah",
    //         "nrp" => "202110002",
    //         "email" => "rizky.fadilah@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Siti Nurhaliza",
    //         "nrp" => "202110003",
    //         "email" => "siti.nurhaliza@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Budi Santoso",
    //         "nrp" => "202110004",
    //         "email" => "budi.santoso@gmail.com",
    //         "jurusan" => "Manajemen Bisnis"
    //     ],
    //     [
    //         "nama" => "Dewi Anggraeni",
    //         "nrp" => "202110005",
    //         "email" => "dewi.anggraeni@gmail.com",
    //         "jurusan" => "Akuntansi"
    //     ],
    //     [
    //         "nama" => "Fajar Pratama",
    //         "nrp" => "202110006",
    //         "email" => "fajar.pratama@gmail.com",
    //         "jurusan" => "Teknik Sipil"
    //     ],

    // ];

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa 
                        VALUES
                        ('', :nama, :nrp, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
