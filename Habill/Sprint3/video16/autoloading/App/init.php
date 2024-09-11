<?php


// require_once 'App/Produk/infoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/komik.php';
// require_once 'App/Produk/game.php';
// require_once 'App/Produk/cetakInfoProduk.php';


spl_autoload_register(function( $class ) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

// spl : standar php library