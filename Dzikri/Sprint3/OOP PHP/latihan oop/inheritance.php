<?php
// $judul, 
// $penulis,
// $penerbit ,
// $harga,
// $jmlhalaman,
// $waktumain,
// $tipe;

class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga  = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;

    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Naruto | Masashi Kishimoto, Shounen Jump Rp.150.000 -100 halaman
        $str = "{$this->tipe} : {$this->getLabel()} | (Rp.{$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= "- {$this->jmlhalaman} halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "- {$this->waktumain} Jam."; 
        }
        

    return $str;

    }

}

class cetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->produk} | {$produk->getLabel()} {$produk->harga}";
        return $str;
    }
}

// Naruto | Masashi Kishimoto, Shounen Jump Rp.150.000 -100 halaman
// "CODM: Mobile", "Moonton", "Moonton", 100.000, 0, 50, "Game"

$produk1 = new produk("Naruto", " Masashi kishimoto", "Shounen Jump", 150000, 100, 0, "Komik");
$produk2 = new produk("Mobile legend", "Moonton", "Moonton", 300000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();