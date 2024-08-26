<?php

// jualan produk
// komik
// game

// method function yang ada didalam class


class produk {
    public 
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;    

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// cara memanggil sat"
// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "upin&ipin";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

// cara memamnggil semua
$produk3 = new produk();
$produk3->judul = "me and you";
$produk3->penulis = "jieqbill";
$produk3->penerbit = "fuckfuck";
$produk3->harga = "100000";

// var_dump($produk3);

// echo "komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new produk();
$produk4->judul = "you and he";
$produk4->penulis = "unknown";
$produk4->penerbit = "fuckfuck";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Novel : " . $produk4->getLabel();

?>