<?php 
        // require_once 'produk/infoProduk.php';
        // require_once 'produk/produk.php';
        // require_once 'produk/Komik.php';
        // require_once 'produk/Game.php';
        // require_once 'produk/CetakInfoProduk.php';
        // require_once 'produk/User.php';
        // require_once 'produk/User.php';

    // function autoload ( $class ) {

    // }

    // spl_autoload_register (autoload()); //cara pertama

    spl_autoload_register (function( $class ) {
        // sebelum terjadinya explode = ['app', 'produk', 'User'] ketika ada \\ maka jadi simple
        $class = explode ('\\', $class); //harus dua back slish
        $class = end($class); //untuk mengambil arrray sesuai dengan indexnya 
        require_once  __DIR__ . '/produk/' . $class . '.php'; 
    });


    spl_autoload_register (function( $class ) {
        $class = explode ('\\', $class); 
        $class = end($class);
        require_once  __DIR__ . '/service/' . $class . '.php'; 
    });
?>