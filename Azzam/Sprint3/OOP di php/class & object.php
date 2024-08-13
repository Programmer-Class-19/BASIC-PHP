<?php
class Barang {
    public $nama,
           $merk,
           $warna,
           $maxtopspeed,
           $harga;

    public function label() {
        return "$this->nama, $this->merk, $this->harga";
    }
}

$Motor1 = new Barang();

$Motor1->nama = "Supra";
$Motor1->merk = "Honda";
$Motor1->warna = "Merah";
$Motor1->maxtopspeed = "125";
$Motor1->harga = "10.000.000";

$Motor2 = new Barang();

$Motor2->nama = "GTR 35";
$Motor2->merk = "Nissan";
$Motor2->warna = "Hitam";
$Motor2->maxtopspeed = "315";
$Motor2->harga = "3.000.000.000";

$Motor3 = new Barang();

$Motor3->nama = "JetBus";
$Motor3->merk = "Scania";
$Motor3->warna = "Hitam";
$Motor3->maxtopspeed = "200";
$Motor3->harga = "2.000.000.000";

echo "Motor : " . $Motor1->label();
echo "<br>";
echo "Mobil : " . $Motor2->label();
echo "<br>";
echo "Bus : " . $Motor3->label();
?>