<?php

// kita bisa membuat object sebagai tipe data sendiri

class produk {
    public 
    $judul,
    $penulis,
    $penerbit,
    $harga;    

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}


class cetakInfoProduk {
    public function cetak( produk  $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("me and ex", "kobil bryant", "katiara mutiq", 100000);
$produk2 = new produk("you and he", "yyy yyy", "uuu uuu", 2500);
$produk3 = new produk("lonte");

echo "mywf : " . $produk1->getLabel();
echo "<br>";
echo "nyenyenye : " . $produk2->getLabel();
echo "<br>";
// var_dump($produk1);
// var_dump($produk2);
// var_dump($produk3);
echo "<br>";
$infoProduk = new cetakInfoProduk();
echo $infoProduk->cetak($produk1);

?>