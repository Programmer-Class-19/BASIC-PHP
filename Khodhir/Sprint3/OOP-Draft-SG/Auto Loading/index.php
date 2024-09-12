<?php
require_once 'App/Produk/infoProduk.php';
require_once 'App/Produk/Produk.php';
require_once'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';

$produk1 = new Komik("Mujahadah", "Ahmad", "Anonim Team", 30000,100);
$produk2 = new Game("Life is life", "Man Ana", "Anonim Team", 250000,50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();