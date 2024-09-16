<!-- variabel super global = variabel yg sudah di miliki oleh php yg bisa kita akses dmn pun
contoh superglobal = (semuanya adalah tipe array asiosiative)
    $_GET
    $_POST
    $_REQUEST
    $_SERVER
    $_SESSION
    $_COOKIE
    $_ENV -->

<?php
// variable scope / lingkup variabel
$x = 10; //variabel lokal untuk halaman 
$y = 20;
$j = 40;

function tampilX() {
    $z = 30; //variabel lokal untuk function 
    echo $z;
    echo "<br>";
    global $x;
    echo $x;
    echo "<br>";
    global $y;
    echo $y;
    echo "<br>";
    global $j;
    echo $j;
}

tampilX();

?>