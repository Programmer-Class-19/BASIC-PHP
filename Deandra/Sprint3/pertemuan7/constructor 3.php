<?php
class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __construct( $judul, $penulis, $penerbit, $harga ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }      
           
    
    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new produk("upin & ipin", "kak ros", "lescopaque", "10000000");

$produk4 = new produk("mobile legend", "mas'ud", "moonton", "2000000");

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();
