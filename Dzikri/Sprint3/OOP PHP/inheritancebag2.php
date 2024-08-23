<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain) {
        $this->judul = $judul;
        $this->penulis =$penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
       
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()}  (Rp.{$this->harga})";

        // if ($this->tipe = "Komik") {
        //     $str .= "- {$this->jmlhalaman} Halaman.";
        // }elseif ($this->tipe = "Game") {
        //     $str .= "- {$this->waktumain} Game.";
        // }

        return $str;
    }
}

class komik extends produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlhalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~ {$this->waktumain} Jam.";
    
        return $str;
    }
}

class cetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->produk} | {$produk->getLabel()} (Rp.{$this->harga})";

        return $str;
    }
}

$produk1 = new Komik("Naruto", " Masashi kishimoto", "Shounen Jump", 150000, 100, 0, "Komik");
$produk2= new Game("Mobile legend", "Moonton", "Moonton", 300000, 0, 50, "Game");

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();