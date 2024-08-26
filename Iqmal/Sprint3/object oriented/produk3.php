<?php

// jualan produk
// komik
// game
class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;



     public function __construck( $judul, $penulis, $penerbit, $harga) {
       $this->judul = $judul;
       $this->penulis = $judul;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
     }      

 public function getlabel() {
    return "$this->penulis, $this->penerbit";


}



} 


class cetakinfoproduk {
    public function cetak( produk $produk ){
        $str = "naruto | masashimoto, shonen jump (Rp. 30000)";
        
    }
}



$produk1 = new produk("naruto", "masashi kishimoto", "shonen jump", 30000 );
$produk2 = new produk("uncharted", "neil druckmann", "sony computer", 250000 );
$produk3 = new produk("dragon ball" );


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);


?>