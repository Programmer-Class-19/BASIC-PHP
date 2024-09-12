<?php


// require_once 'App/Produk/infoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/komik.php';
// require_once 'App/Produk/game.php';
// require_once 'App/Produk/cetakInfoProduk.php';
// require_once 'App/Produk/User.php';

// require_once 'App/Service/User.php';

// explode : untuk memecah sebuah string berdasarkan pemisah tertentu

spl_autoload_register(function( $class ) {
    // App\Produk\user = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});


