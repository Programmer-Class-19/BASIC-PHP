<?php

// Jualan Produk
// Komik 
// Game



class produk {
    // Property 
    public $judul, 
           $penulis,
           $penerbit,
           $harga; 

    
    // Metod Constructor :
    public function __construct( $judul= "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit; 
        $this->harga = $harga;

    }



    // Method
    public function getLebel() {
       return "$this->judul, $this->penulis , $this->penerbit, $this->harga";    //  $this fungsinya ntuk mengambil isi dari proprty dalam class.


    }    
           

}


$produk1 = new produk("Naruto", "Kitino", "JepanTV", 30000);
$produk2 = new produk("Uncharted", "Neil Druckmann",  "Sony Computer", 1500000);
$produk3= new produk("Daragon City"); 


echo "Komik : " . $produk1->getLebel();
echo "<br>";
echo "Game :" . $produk2->getLebel();
echo "<br>";
var_dump($produk3);




