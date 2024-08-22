<?php

// jualan produk
// komik
// game

// class produk{
//     public $judul = "judul", 
//            $penulis = "penulis",
//            $penerbit = "penerbit",
//            $harga = "harga";

//     public function __construct($judul, $penulis, $penerbit, $harga){
//         $this->judul = $judul;
//         $this->penulis = $penulis;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//     }


//     public function getLabel(){
//         return "$this->penulis, $this->penerbit";
//     }
// }

// $produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", "Rp.150.000");

// $produk2 = new produk("CODM: Mobile", "Moonton", "Moonton", "Rp.100.000");

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();


class Product {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }      

   public function getLabel() {
      return "$this->judul, $this->penerbit";
   } 
}


$produk1 = new Product("Naruto", "Masashikishimoto", "Shounen Jump", "Rp.30.000");
$produk2 = new Product("COD: Mobile", "Garena", "Grena", "Rp.529.000");

echo "komik : " . $produk1->getLabel();
echo"<br>";
echo "Game : " . $produk2->getLabel();