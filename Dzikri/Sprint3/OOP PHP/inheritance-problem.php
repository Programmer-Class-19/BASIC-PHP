<?php

// jualan produk
// komik
// game

class produk{
    public $judul, 
           $penulis,  
           $penerbit ,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct( ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Naruto | Masashi Kishimoto, Shounen Jump Rp.150.000 -100 halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})" ;

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlhalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " - {$this->waktumain} Jam.";
        } 

        return $str;
    }
}


class cetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga}";
        return $str;
    }
}






$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 150000, 100, 0, "Komik");

$produk2 = new produk("CODM: Mobile", "Moonton", "Moonton", 100.000, 0, 50, "Game");

// Komik : Masashi Kishimoto, Shounen Jump
// Game : Moonton, Moonton
// Naruto | Masashi Kishimoto, Shounen Jump Rp.150.000

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();