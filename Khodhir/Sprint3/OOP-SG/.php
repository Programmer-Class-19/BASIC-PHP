<!-- Object Type

Saya ingin membuat fundionalitas untuk mencetak informasi lengkap yang saya miliki.
-->
<?php
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga= 0) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->judul";

    }

    } 

class CetakInfoProduk {
// class ini tugasnya hanya satu : mencetak seluruh informasi produk; gak peduli buku atau game. Kelas ini hanya punya 1 method. yaitu cetak

    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Mujahadah", "Ahmad", "Anonim Team", 30000);
$produk2 = new Produk("Life is life", "Man Ana", "Anonim Team", 50000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

$infoProduk1 = new cetakInfoProduk();
echo "<br>";

echo $infoProduk1->cetak($produk1);