<?php
class Barang {
    public $nama,
           $merk,
           $warna,
           $topspeed,
           $harga;

    public function label() {
        return "$this->nama, $this->merk, $this->harga, $this->warna";
    }
}

$Motor1 = new Barang();

$Motor1->nama = "Supra";
$Motor1->merk = "Honda";
$Motor1->warna = "Merah";
$Motor1->topspeed = "125";
$Motor1->harga = "Rp.10.000.000";

$Motor2 = new Barang();

$Motor2->nama = "GTR 35";
$Motor2->merk = "Nissan";
$Motor2->warna = "Hitam";
$Motor2->topspeed = "315";
$Motor2->harga = "Rp.3.000.000.000";

$Motor3 = new Barang();

$Motor3->nama = "JetBus";
$Motor3->merk = "Scania";
$Motor3->warna = "Hitam";
$Motor3->topspeed = "200";
$Motor3->harga = "Rp.2.000.000.000";

$Motor4 = new Barang();

$Motor4->nama = "Rx-7";
$Motor4->merk = "Mazda";
$Motor4->warna = "Merah";
$Motor4->topspeed = "254";
$Motor4->harga = "Rp.460.000.000";

$Motor5 = new Barang();

$Motor5->nama = "Supra";
$Motor5->merk = "Toyota";
$Motor5->warna = "Putih";
$Motor5->topspeed = "250";
$Motor5->harga = "Rp.1.400.000.000";


echo "Motor : " . $Motor1->label();
echo "<br>";
echo "Mobil : " . $Motor2->label();
echo "<br>";
echo "Bus : " . $Motor3->label();
echo "<br>";
echo "Mobil : " . $Motor4->label();
echo "<br>";
echo "Mobil : " . $Motor5->label();
echo "<br>";
?>