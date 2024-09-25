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
               $harga,
               $jmlHalaman,
               $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    public function getInfoProduk(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
    }
}
class Komik extends Produk{
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})- {$this->jmlHalaman} Halaman";
        return $str;
    }
}
Class Game extends Produk{
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()}, (Rp.{$this->harga})- {$this->waktuMain} jam";
        return $str;
    }
}
class CetakInfoProduk {
// class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak

    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    }
}
$produk1 = new Komik("Mujahadah", "Ahmad", "Anonim Team", 30000,100,0);
$produk2 = new Game("Life is life", "Man Ana", "Anonim Team", 50000,0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

