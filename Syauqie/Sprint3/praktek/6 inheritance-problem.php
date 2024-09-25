<?php 
class Produk{

    public  $judul,  //property dengan nilai default
            $penulis, //property dengan nilai default
            $penerbit, //property dengan nilai default
            $harga, //property dengan nilai default
            $halaman,
            $waktu,
            $tipe; 

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0, $waktu = 0, $tipe) { //__construct ini merupakan magic method yang dimiliki php
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->tipe = $tipe;
    } 
    public function salam() { //salam adalah method
        return "$this->penulis, $this->penerbit";
    }


    public function getinfolengkap() {
        $str = "{$this->tipe} : {$this->judul} {$this->salam()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= " ~ {$this->waktu} Jam.";
        }
        return $str;
    }


    
}


$produk1 = new Produk("naruto", "asashih", "shonen jump", 100000, 100, 0, "Komik");
$produk2 = new Produk("uncharted", "syauqie", "sony computer", 1000000, 0, 50, "Game");

// komik : naruto | asashih gramedia 1000k - 100 hal
// game : uncharted | syauqie gramedia 100000 

echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();    
?>


