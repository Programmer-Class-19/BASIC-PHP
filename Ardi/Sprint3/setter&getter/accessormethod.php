<?php

class Produk
{
    private 
        $judul,
        $pembuat,
        $pengembang,
        $mode,
        $penerbit,
        $harga,
        $diskon = 0; 
        

    public function __construct(
        $judul = "judul",
        $pembuat = "pembuat",
        $penerbit = "penerbit",
        $harga = 0

    ) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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

    public function setHarga( $harga ){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon /100 );
    }

    public function setJudul( $judul ){
        $this->judul = $judul;        
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPembuat( $pembuat ){
        $this->pembuat = $pembuat;
    }

    public function getPembuat(){
        return $this->pembuat;
    }

    public function setPengembang( $pengembang ){
        $this->pengembang = $pengembang;
    }

    public function getPengembang(){
        return $this->pengembang;
    }

    public function setMode( $mode ){
        $this->mode = $mode;
    }

    public function getMode(){
        return $this->mode;
    }

    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon( $diskon ) {
        return $this->diskon;
    }
}


class Game extends Produk {
    public $waktuMain;

    public function __construct(
    $judul = "judul",
    $pembuat = "pembuat",
    $penerbit = "penerbit",
    $harga = 0,
    $waktuMain = 0
) {
    parent::__construct(
    $judul,
    $pembuat,
    $penerbit,
    $harga);

    $this->waktuMain = $waktuMain;

    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }


}

class Novel extends Produk {
    public $jmlHalaman;

    public function __construct(
    $judul = "judul",
    $pembuat = "pembuat",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0
) {
    parent::__construct(
    $judul, 
    $pembuat, 
    $penerbit, 
    $harga);
    
    $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk()
    {
        $str = "Novel : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }


}

class Pelajaran extends Produk {
    public $jmlHalaman;

    public function __construct(
    $judul = "judul",
    $pembuat = "pembuat",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0
) {
    parent::__construct(
    $judul,
    $pembuat,
    $penerbit,
    $harga);

    $this->jmlHalaman = $jmlHalaman;    
    }
    public function getInfoProduk()
    {
        $str = "Pelajaran " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
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

$produk1 = new Game("Minecraft Pocket Edition", "Markus Perrson", "Mojang Studios", 395000, 100);
$produk2 = new Novel("Aku Kalah Aku Merindukanmu", "Coretan Lena", "Gradien Mediatama", 79000, 164);
$produk3 = new Game("Grand Theft Auto San Andreas", "Rockstar Games", "Rockstar Game", 150000, 10);
$produk4 = new Pelajaran("Teknik Cepat Menguasai CSS", "KOMANG WISWAKARMA", "Lokomedia", 15000, 132, null,);

$produk3->setDiskon(25) ;
$produk1->setDiskon(50) ;

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();

echo "<hr>";
echo $produk1->getHarga();
echo "<br>";
echo $produk3->getHarga();
echo "<hr>";

$produk1->setMode("Survival");
echo $produk1->getMode();