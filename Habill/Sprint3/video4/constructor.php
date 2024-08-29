<?php

// - constructor merupakan method yang special / method yang khusu di sebuah class
// - constructor adalah method yang otomatis dijalankan ketika 
// sebuah class kita instansiasi / kita buat objectnya

// - jadi ketika kita membuat keyword new otomatis ada sebuah
// method yang dijalankan (yang disebut constructor)

// contruct termasuk bagian dari magic method

class produk {
    public 
    $judul,
    $penulis,
    $penerbit,
    $harga;    

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new produk("me and ex", "jieqibill", "fuckfuck", "100000");
$produk2 = new produk("you and he", "unknown", "fuckfuck", 2500);
$produk3 = new produk("lonte");

echo "LC : " . $produk1->getLabel();
echo "<br>";
echo "NT : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);


?>