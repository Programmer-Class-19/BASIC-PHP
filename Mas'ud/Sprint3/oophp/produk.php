<?php

// Jualan Produk
// Komik 
// Game



class produk {
    // Property 
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;



    // Method
    public function getLebel() {
       return "$this->penulis, $this->penerbit";    //  $this fungsinya ntuk mengambil isi dari proprty dalam class.


    }    
           

}

// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);



// $produk2 = new produk(); 
// $produk2->judul = "Uncharted";
// $produk2->Pengarang = "Mas'ud";
// var_dump($produk2);



$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Kinoto";
$produk3->penerbit = "JepanTV";
$produk3->harga = "30000";
// var_dump($produk3);
echo "Komik : $produk3->penulis, $produk3->penerbit";       // menampilkan property    

echo "<br><br><br>";


echo $produk3->getLebel();


echo "<br><br><br><hr>";



$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "1500000";



echo "Komik : " . $produk3->getLebel();
echo "<br>";
echo "Game :" . $produk4->getLebel();





