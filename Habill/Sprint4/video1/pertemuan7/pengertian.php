<?php
// variable scope / lingkup variable

// $x = 10; //variable local untuk hal ini

// function tampillX() {
// $x = 20; // varibale local untuk function aja
//     global $x;
//     echo $x;
// }

// tampillX();
// echo "<br>";
// echo $x;

/*
SUPERGLOBALS :
variable global milik php
merupakan array associative
- $_GET ✅
- $_POST ✅
- $_REQUEST
- $_SESSION ✅
- $_COOKIE ✅
- $_SERVER
- $_ENV  (inverenment)
*/
// var_dump($_SERVER);
// echo $_SERVER['REQUEST_METHOD']

// $_GET["nama"] = "kobil bryant";
// $_GET["nrp"] = "129836476578";
// cara menambahkan pakek get dengan mengisi manual di url nya 
// var_dump($_GET);


// metode request GET adalah metode pengiriman data melalui url dan data tersebut bisa di ambil dan tangkap oleh variable superglobal $_GET


?>
