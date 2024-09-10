<?php 
        // require_once 'App/produk/infoProduk.php';
        // require_once 'App/produk/produk.php';
        // require_once 'App/produk/Komik.php';
        // require_once 'App/produk/Game.php';
        // require_once 'App/produk/CetakInfoProduk.php';
        // require_once 'App/produk/User.php';

        // require_once 'service/User.php';



    spl_autoload_register (function( $class ) {
        $class = explode('\\', $class); 
        $class = end($class);
        require_once 'produk/' . $class . '.php'; 
    } );

    spl_autoload_register (function( $class ) {
        $class = explode('\\', $class); 
        $class = end($class);
        require_once  'service/' . $class . '.php'; 
    } )

?>