<?php

/* 
INTERFACE
- kelas abstrak yang sama sekali tidak memiliki implementasi
- kelas yang murni merupakan template untuk kelas turunannya
sama sekali tidak ada implementasinya 
- tidak boleh memiliki property, hanya deklarasi metho saja
- semua method harus dideklarasikan dengan visibility public
- boleh mendeklarasikan __construct() didalam interface dan 
mewajibkan kelas turunannya mempunyai method __consturct()
- satu kelas boleh mengimplementasikan banyak interface
- dengan menggunakan type-hinting dapat mealakukan 'dependency
injection'
- pada akhirnya kita akan mencapai polymorphism
*/


interface infoProduk {
    public function getInfoProduk();
}

abstract class produk {
    protected 
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0; 

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function GetJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function GetPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDikson() {
        return $this->diskon;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

}

class komik extends produk implements infoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
    
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class game extends produk implements infoProduk {
    public $waktuMain;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "game :  " . $this->getInfo() . " - {$this->waktuMain} jam.";
        return $str;
    }
}


class cetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( produk $produk) {
        $this->daftarProduk[] = $produk;
    }



    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new komik("me and you", "kobil bryant", "katiara mutiq", 30000, 100);
$produk2 = new game("you and he", "yyy yyy", "uuu uuu", 250000, 50);


$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();




?>




<?php
/*
DEFINISI AUTOLOADING :
proses pemanggilan class (yg disimpan dalam file) tanpa harus
menggunakan require

- jika kita membuat apk menggunakan konsep OO itu biasanya 1 class
ditulis dalam 1 file
*/
?>