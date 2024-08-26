<?php

class produk {
    public $judul,
           $penulis,
           $penerbit;
          
     protected $harga;
           
           
      protected function harga(){
        return $this->harga ;
      }  

    public function __construct($judul, $penulis, $penerbit, $harga = 0) {
        $this->judul = $judul;
        $this->penulis =$penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()}  (Rp.{$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlhalaman;

   public function accessProtected() {
     echo $this->harga;
     $this->harga();
   }

    public function __constract( $judul, $penulis, $penerbit, $harga, $jmlhalaman = 0 ) {
        parent::__constract($judul, $penulis, $penerbit, $harga = 0);

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . "- {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktumain;

    public function accessProtected() {
        echo $this->harga;
        $this->harga();
    }

    public function __constract($judul, $penulis, $penerbit, $harga = 0 ) {
        parent::__constract($judul, $penulis, $penerbit, $harga, $waktumain = 0) ;

        $this->waktumain = $waktumain;
    }
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktumain} Jam.";

        return $str;
    }
}

class cetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->produk} | {$produk->getLabel()} (Rp.{$this->harga})";

        return $str;
    }
}

$produk1 = new Komik("Naruto", " Masashi kishimoto", "Shounen Jump", 150000, 100, "Komik");
$produk2= new Game("Mobile legend", "Moonton", "Moonton", 300000, 50, "Game");

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
echo "<hr>";
echo $produk1->accessProtected();
echo "<hr>";
echo $produk2->accessProtected();
