<?php

class Produk {
   public $judul = "judul",
          $pembuat = "pembuat",
          $pengembang = "pengembang",
          $mode = "mode",
          $penerbit = "penerbit",
          $harga = 0;

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0 ) {
          $this->judul = $judul;
          $this->pembuat = $pembuat;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
    }

    public function getLabel () {
            return "$this->judul, $this->pembuat";
          }

        }

    $produk1 = new Produk("Minecraft Pocket Edition", "Markus Perrson", "Mojang Studios", 395000);        
    $produk2 = new Produk("Aku Kalah Aku Merindukanmu","Coretan Lena", "Gradien Mediatama",79000);
    $produk3 = new Produk("Grand Theft Auto San Andreas","Rockstar Games", "Rockstar Game", 15000);
    $produk4 = new Produk("Teknik Cepat Menguasai CSS","KOMANG WISWAKARMA", "Lokomedia", 15000);
    

         echo "Games : ". $produk1->getLabel();
         echo "<br>";
         echo "Buku : ".  $produk2->getLabel();
         echo "<br>";
         echo "Games : ".  $produk3->getLabel();
         echo "<br>";
         echo "Buku : ". $produk4->getLabel();

?>