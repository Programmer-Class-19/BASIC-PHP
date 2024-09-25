<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
    }

    public function coba() {
        return "$this->judul $this->penulis $this->penerbit $this->harga";
    }
}

class CetakInfoProduk {
    public function cetak($produk) {
        $int = "{$produk->coba()}";
        return $int;
        
    }
}

$produk1 = new Produk("doraemon ", "asepp ", " gremed ", "Rp. 30000");
$produk2 = new Produk("upin & ipin "," saya sendiri ", " las copa ", "Rp. 1000");
$produk3 = new Produk("ninja", "syauqie", "sssiinnn", "Rp. 20000");\\

echo $produk1->coba();
echo "<hr>";
echo $produk2->coba();
echo "<hr>";
echo $produk3->coba();
echo "<hr>";
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
echo "<hr>";

?>