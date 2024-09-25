 <!-- INHERITANCE2

- menciptakan hirarki antar kelas (Parent & Child)
- child class mewarisi semua property dan method dari parentnya (yang visible)
child class memperluas/mengembangkan (extended) fungsionalitas dari kelas parentnya.

KENAPA KITA BUTUH INHERITENS??
-->
<?php
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
    }
}
class Komik extends Produk{
       public $jmlHalaman;

       public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
       }
       public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} jam";
        return $str;     
    }
}
Class Game extends Produk{
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
        return $str;
    }
}
class CetakInfoProduk { 
// class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak

    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    }
}
$produk1 = new Komik("Mujahadah", "Ahmad", "Anonim Team", 30000,100);
$produk2 = new Game("Life is life", "Man Ana", "Anonim Team", 50000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


