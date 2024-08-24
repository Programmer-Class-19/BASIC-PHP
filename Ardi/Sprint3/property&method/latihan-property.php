<?php

class Produk {
   public $judul = "judul",
          $pembuat = "pembuat",
          $pengembang = "pengembang",
          $mode = "mode",
          $penerbit = "penerbit",
          $harga = 0;

        public function getLabel () {
            return "$this->judul, $this->pembuat";
          }

        }

          $produk = new Produk();
          $produk->judul = "Minecraft Pocket Edition";
          $produk->pembuat = "Markus Perrson";
          $produk->pengembang = "Mojang Studios";
          $produk->mode = "Singel Player dan Multi Player";
          $produk->penerbit = "Mojang Studios";
          $produk->harga = 395000;

        //   echo "Games : $produk->pengembang, $produk->mode";
        //   echo "<br>";
          
          $produk1 = new Produk();
          $produk1->judul = "Aku Kalah Aku Merindukanmu";
          $produk1->pembuat = "Coretan Lena";
          $produk1->penerbit = "Gradien Mediatama";
          $produk1->harga= 79000;

         echo "Games : ". $produk->getLabel();
         echo "<br>";
         echo "Buku : ". $produk1->getLabel();