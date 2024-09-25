 <!-- INHERITANCE

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
               $waktuMain,
               $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
                $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    public function getInfoLengkap(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    if($this->tipe == "komik"){
        $str .= " - {$this->jmlHalaman} Halaman";
    } else if($this->tipe == "game"){
        $str .= " ~ {$this->waktuMain} jam";
    }
    return $str;
    }
}
class CetakInfoProduk {
// class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak

    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    }
}
$produk1 = new Produk("Mujahadah", "Ahmad", "Anonim Team", 30000,100,0, "komik");
$produk2 = new Produk("Life is life", "Man Ana", "Anonim Team", 50000,0,50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

