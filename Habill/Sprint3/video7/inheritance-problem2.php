<?php 

// inheritance (pewarisan)
// merupakan konsep yang ada di dalam OOP

// definisi inheritance 
// konsep yang menciptakan hierarki kelas (parent & child)

// - child class, mewarisi semua properti dan method dari/yang
// dimiliki parent-nya (syaratnya yang visible)
// - child class, memperluas (extends) fungsionalitas dari
// parent-nya

// why inheritance?


class produk {
    public 
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;   

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk() {
// contoh pembuatan : komik : me and you | kobil bryant, katiara mutiq (Rp. 1000000) - halaman.
// .= operator concet
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class komik extends produk {
    public function getInfoProduk() {
        $str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class game extends produk {
    public function getInfoProduk() {
        $str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";
        return $str;
    }
}


class cetakInfoProduk {
    public function cetak( produk  $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("me and you", "kobil bryant", "katiara mutiq", 10000, 100, 0);
$produk2 = new game("you and he", "yyy yyy", "uuu uuu", 2500, 0 ,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// komik : me and you | kobil bryant, katiara mutiq (Rp. 1000000) - halaman.
// game : you and he | yyy yyy, uuu uuu (Rp. 2500) - 50 jam.






?>