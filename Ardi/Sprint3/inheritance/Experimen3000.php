<?php

class Produk
{
    public $judul,
        $pembuat,
        $pengembang,
        $mode,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct(
        $judul = "judul",
        $pembuat = "pembuat",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,

    ) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->judul, $this->pembuat";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        

        return $str;
    }
}


class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class Novel extends Produk {
    public function getInfoProduk()
    {
        $str = "Novel {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Pelajaran extends Produk {
    public function getInfoProduk()
    {
        $str = "Pelajaran {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class CetakInfoProduct
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//  echo "Games : ". $produk1->getLabel();
//  echo "<br>";
//  echo "Buku : ".  $produk2->getLabel();
//  echo "<br>";
//  echo "Games : ". $produk3->getLabel();
//  echo "<br>";
//  echo "Buku : ". $produk4->getLabel();
//  echo "<br>";

//  $infoProduk4 = new CetakInfoProduct();
//  echo $infoProduk4->cetak($produk4);

$produk1 = new Game("Minecraft Pocket Edition", "Markus Perrson", "Mojang Studios", 395000, null, 100,);
$produk2 = new Novel("Aku Kalah Aku Merindukanmu", "Coretan Lena", "Gradien Mediatama", 79000, 164, null,);
$produk3 = new Game("Grand Theft Auto San Andreas", "Rockstar Games", "Rockstar Game", 150000, null, 100,);
$produk4 = new Pelajaran("Teknik Cepat Menguasai CSS", "KOMANG WISWAKARMA", "Lokomedia", 15000, 132, null,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();