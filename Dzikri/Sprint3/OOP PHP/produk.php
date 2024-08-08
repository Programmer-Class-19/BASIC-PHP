<?php

// jualan produk
// komik
// game
class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new produk();
$produk1 ->penulis = "adzri";
var_dump($produk1);
$produk2 = new produk();
$produk2 ->harga = "1.000.000.000";
$produk2 ->judul = "boku no hero";
$produk2 ->penulis ="ryuzaki arata";
$produk2 ->penerbit = "kazuha team";

$produk3 = new produk();
$produk3 ->harga = "295.000";
$produk3 ->judul = "call of duty";
$produk3 ->penulis ="cod";
$produk3 ->penerbit = "cooporation";
// var_dump($produk2);
// echo "komik : $produk2->penulis, $produk2->penerbit";
// echo "<br>";
echo "komik :" . $produk2->getlabel();
echo "<br>";
echo "game :". $produk3->getlabel();

