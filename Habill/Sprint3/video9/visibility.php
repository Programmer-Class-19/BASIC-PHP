<?php
/*
visibilty (modifier)

definisi visibilty
- sebuah konsep yang digunakan unutk menagtur akses dari propeerty
dan method pada sebuah class (objek)
- ada  3 keyword visibility : public, protected, dan private

public : dapat digunakan di mana saja, bahkan diluar kelas

protected : hanya dapat digunakan didalam sebuah kelas beserta turunannya

private : hanya dapat digunakan didalam sebuah kelas tertentu saja

kenapa visibility??
- hanya memperlihatkan aspek dari class yang dibutuhkan oleh client saja
- menentukan kebutuhan yang jelas untuk object
- memberikan kendali pada kode untuk menghindari 'bug'
*/


class produk {
    public 
    $judul,
    $penulis,
    $penerbit;

    protected $diskon = 0;

    private $harga;  

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } // $this =instansiasi yang bersangkutan
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class komik extends produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
    
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class game extends produk {
    public $waktuMain;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    

    public function getInfoProduk() {
        $str = "game :  " . parent::getInfoProduk() . " - {$this->waktuMain} jam.";
        return $str;
    }
}


class cetakInfoProduk {
    public function cetak( produk  $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("me and you", "kobil bryant", "katiara mutiq", 30000, 100);
$produk2 = new game("you and he", "yyy yyy", "uuu uuu", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// $produk2->diskon = 90; // contoh salah
$produk2->setDIskon(50);
echo $produk2->getHarga();






?>