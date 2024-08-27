<?php 

class manusia {
    // property
    public $nama;
    public $usia;

    // constructor
    public function __construct($nama, $usia) {
        $this->nama = $nama;
        $this->usia = $usia;
    }

    // method untuk perkenalan 
    public function perkenalan() {
        echo "halo, nama saya $this->nama dan saya berusia $this->usia tahun.\n";
    }
}

// membuat tiga object dari class manusia
$manusia1 = new manusia('badrul', 19);
$manusia2 = new manusia('rauwr', 20);
$manusia3 = new manusia('muslimin', 23);

// memamnggil method perkenalan 
$manusia1->perkenalan();
$manusia2->perkenalan();
$manusia3->perkenalan();


?>