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
    $jmlhalaman,
    $waktuMain,
    $tipe;    

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $jmlhalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap() {
// contoh pembuatan : komik : me and you | kobil bryant, katiara mutiq (Rp. 1000000) - halaman.
// .= operator concet
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        if( $this->tipe == "komik") {
            $str .=  " - {$this->jmlhalaman} halaman.";
        }
        else if( $this->tipe == "game") {
            $str .= " - {$this->waktuMain} jam.";
        }

        return $str;
    }

}


class cetakInfoProduk {
    public function cetak( produk  $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("me and you", "kobil bryant", "katiara mutiq", 10000, 100, 0, "komik");
$produk2 = new produk("you and he", "yyy yyy", "uuu uuu", 2500, 0 ,50, "game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// komik : me and you | kobil bryant, katiara mutiq (Rp. 1000000) - halaman.
// game : you and he | yyy yyy, uuu uuu (Rp. 2500) - 50 jam.












?>