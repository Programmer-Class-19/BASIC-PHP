<?php
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';  
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ){
    require_once 'Produk/' . $class . '.php';
});
