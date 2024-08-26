<?php

// Jualan Produk
// Komik 
// Game



class produk {
    // Property 
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain; 
           $tipe;

    
    // Metod Constructor :
    public function __construct( $judul= "judul", $penulis = "penulis", $penerbit = "penerbit",
                                 $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
        $this->jmlhalaman= $jlmhalaman;
        $this->waktumain = $waktumain;
        $this->tipe =$tipe;

    }



    // Method
    public function getLebel() {
       return "$this->penulis , $this->penerbit, ";    //  $this fungsinya ntuk mengambil isi dari proprty dalam class.


    }    

    public function $getInfoLengkap() {
      $strr = "{$This->$tipe} : {$this->judul} | {$this->getLebel}";  
    }
           

}


class CetakInfoProduk {
    public function cetak( produk $produk )  {
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga})";
        return $str;
    }




}




$produk1 = new produk("Naruto", "Kitino", "JepanTV", 30000, 100, 0, "Komik" );
$produk2 = new produk("Uncharted", "Neil Druckmann",  "Sony Computer", 1500000, 0, 50, "Game" );



// Komik : Naruto | Kitino, JapanTV, (Rp. 30000) - 100 Halaman 
// Geme : Uncharted | Neil Druckmann , Sony Computer, (Rp. 1500000) - 50 Jam 























