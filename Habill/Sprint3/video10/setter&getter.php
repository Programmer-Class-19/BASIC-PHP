<?php

class produk {
    private 
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
        // if (!is_string($judul) ) {
        //     throw new exception("error blok");
        // }
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
echo "<hr>";

$produk1->setPenulis("fuckyouu");
echo $produk1->GetPenulis();

// $produk1->setJudul("friendzone");
// echo $produk1->getJudul();

// $produk3 = new produk("barang baru");
// echo $produk1->judul; // bakalan error



// overloading :
// __set() & __get()

?>