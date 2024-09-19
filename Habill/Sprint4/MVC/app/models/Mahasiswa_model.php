<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() 
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM  ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) 
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

    
    // private $mhs = [
    //     [
    //         "nama" => "kobil bryant",
    //         "nrp" => "061020041723",
    //         "email" => "kobilbryant@gmail.com",
    //         "jurusan" => "teknik informatika"
    //     ],
    //     [
    //         "nama" => "katiara mutiq",
    //         "nrp" => "240920011723",
    //         "email" => "katiaramutiq@gmail.com",
    //         "jurusan" => "management"
    //     ],
    //     [
    //         "nama" => "putri ikrami",
    //         "nrp" => "230897142097",
    //         "email" => "putri ikrami@gmail.com",
    //         "jurusan" => "teknik industri"
    //     ]
        
    // ];