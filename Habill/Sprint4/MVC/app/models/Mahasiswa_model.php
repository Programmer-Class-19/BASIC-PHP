<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "kobil bryant",
            "nrp" => "061020041723",
            "email" => "kobilbryant@gmail.com",
            "jurusan" => "teknik informatika"
        ],
        [
            "nama" => "katiara mutiq",
            "nrp" => "240920011723",
            "email" => "katiaramutiq@gmail.com",
            "jurusan" => "management"
        ],
        [
            "nama" => "putri ikrami",
            "nrp" => "230897142097",
            "email" => "putri ikrami@gmail.com",
            "jurusan" => "teknik industri"
        ]
        
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}