<?php
    // require_once 'app/produk/infoProduk.php';
    // require_once 'app/produk/produk.php';
    // require_once 'app/produk/komik.php';
    // require_once 'app/produk/game.php';
    // require_once 'app/produk/CetakInfoProduk.php';
require_once 'app/init.php';

        $produk1 = new komik("doraemon ", " reizuka ", " slaps ",  300000 , " - 100 halaman ");  
        $produk2 = new game("free fire ", " rexy ", " garena ",  200000 , " ~ 50 jam ");
    
        $cetakproduk = new CetakinfoProduk();
        $cetakproduk->tambahproduk($produk1);
        $cetakproduk->tambahproduk($produk2);
        echo $cetakproduk->cetak();