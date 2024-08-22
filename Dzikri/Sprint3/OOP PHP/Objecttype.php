<?php

// jualan produk
// komik
// game

class produk{
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga}";
        return $str;
    }
}


// class CetakInfoProduk{
//     public function cetak( ) {
//         $str = "Naruto | Masashi Kishimoto, Shounen Jump (Rp.30000)";
//     }
// }

// class cetakInfoProduk{
//     public function cetak( produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()}, ({$produk->harga})";
//         return $str;
//     }
// }


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", "Rp.150.000");

$produk2 = new produk("CODM: Mobile", "Moonton", "Moonton", "Rp.100.000");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// $infoproduk1 = new cetakInfoProduk();
// echo $infoproduk1->cetak($produk1);
$infoproduk1 = new cetakInfoProduk();
echo $infoproduk1->cetak($produk1);