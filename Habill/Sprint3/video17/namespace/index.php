<?php

require_once 'App/init.php';

$produk1 = new komik("me and you", "kobil bryant", "katiara mutiq", 30000, 100);
$produk2 = new game("you and he", "yyy yyy", "uuu uuu", 250000, 50);


$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();

echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


new ServiceUser();
echo "<hr>";
new ProdukUser();


