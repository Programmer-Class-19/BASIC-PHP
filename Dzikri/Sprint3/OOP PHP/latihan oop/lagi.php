<?php

class Manusia {
    public $nama = "nama";
    public $jeniskel = "jeniskel";
    public $umur = 0;

    public function getData($nama, $jeniskel, $umur) {
        return "{$this->nama}, {$this->jeniskel}, {$this->umur}";
    }
}

$orang1 = new Manusia ("satria", "Pria", 20);

$orang2 = new Manusia ("bahrul", "Pria", 30);

echo "perkenalan : " . $orang1->getData();