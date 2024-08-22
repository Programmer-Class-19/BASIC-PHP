<?php

// jualan produk
// komik
// game

class produk{
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new produk();
$produk1 -> judul = "naruto";
$produk1 -> penulis = "masashi kishimoto";
$produk1 -> penerbit = "shonen jump";
$produk1 -> harga = "Rp.150.000";

$produk2 = new produk();
$produk2 -> judul = "mobile legend bang bang";
$produk2 -> penulis = "moonton";
$produk2 -> penerbit = "Moonton";
$produk2 -> harga = "Free";

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
