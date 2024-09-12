<!-- Constructor -->
<?php
    class Produk {
        public $judul, //ini adalah cara mendevinisikan nilai property default (diisi di class nya langsung)
               $penulis,
               $penerbit,
               $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga= 0) {
        // 1. kita timpa dulu nilai propertinya :
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
    /* Alur pengugnaan Construct
        1. Variable yang ada di function construc itu berbeda dengan variable yang ada di property class.
        2. Nilai yang kita tulis di object akan dikirimkan ke variable function construc, dan nanti akan digunakan untuk mengisi properti class nya. 

    */
    }

//pakai __ karena ini bagian dari magic method yg dimiliki oleh php

    public function getLabel(){
        return "$this->penulis, $this->judul"; // dalam function bila ada variable maka itu variable baru dan tidak akan terhubung ke mana mana, akhirnya hanya akan membuat property baru di dalam class. cara memanggil variable yang ada dalam 

    }

    } 

    $produk1 = new Produk("Mujahadah", "Ahmad", "Anonim Team", 30000);
    $produk2 = new Produk("Life is life", "Man Ana", "Anonim Team", 50000);
    $produk3 = new Produk("Syauqi Island");

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";
    var_dump($produk3);
?>                      