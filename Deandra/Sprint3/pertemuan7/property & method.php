<?php

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
           
           
    public function sayhello() {
        return "hello world";
    }
    
    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk1->judul = "one piace";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "charlote";
// var_dump($produk2->judul);

$produk3 = new produk();
$produk3->judul = "upin & ipin";
$produk3->penulis = "kak ros";
$produk3->penerbit = "opett";
$produk3->harga = 1000000;


$produk4 = new produk();
$produk4->judul = "mobile legend";
$produk4->penulis = "mas'ud";
$produk4->penerbit = "moonton";
$produk4->harga = 200000;

// echo "komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayhello();
// echo "<br>";
// echo $produk3->getlabel();


// echo "<hr>"

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();



