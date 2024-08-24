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
        $waktuMain,
        $tipe;

    public function __construct(
        $judul = "judul",
        $pembuat = "pembuat",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,
        $tipe
    ) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->judul, $this->pembuat";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Novel") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Games") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

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

$produk1 = new Produk("Minecraft Pocket Edition", "Markus Perrson", "Mojang Studios", 395000, null, 100, "Game");
$produk2 = new Produk("Aku Kalah Aku Merindukanmu", "Coretan Lena", "Gradien Mediatama", 79000, 164, null, "Novel");
$produk3 = new Produk("Grand Theft Auto San Andreas", "Rockstar Games", "Rockstar Game", 150000, null, 100, "Game");
$produk4 = new Produk("Teknik Cepat Menguasai CSS", "KOMANG WISWAKARMA", "Lokomedia", 15000, 132, null, "Pelajaran");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();