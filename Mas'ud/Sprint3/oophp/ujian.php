<?php 

// Soal Nomor 1 
class Manusia {
    // properti
    public $nama,
           $usia;

    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $usia) {
        $this->nama = $nama;
        $this->usia = $usia;
    }

    // Metode untuk perkenalan
    public function perkenalan() {
        echo "Halo, nama saya " . $this->nama . " dan saya berusia " . $this->usia . " tahun.<br>";
    }
}

// Membuat tiga objek dari kelas Manusia
$manusia1 = new Manusia("Ahmad", 999);
$manusia2 = new Manusia("Umar", 99);
$manusia3 = new Manusia("Mas'ud", 19);

// Memanggil metode perkenalan untuk masing-masing objek
$manusia1->perkenalan();
$manusia2->perkenalan();
$manusia3->perkenalan();
echo "<br><br><hr>";














