<!--  MEmbuat Fungsi kita s -->
<?php
/* HAL yang harus diketahui seblum buat function.
    - function Harus didevinisikan dulu.
    - Setelah didevinisikan baru dipanggil
*/
function salam($waktu, $nama){  //salam() : tanda kurung berikut sebagai tanda bahwa dia adalah function ; //Disini gak urut penempatannya gak papa ;
    return "Selamat $waktu, $nama!";
}

function salam2($waktu = "Datang", $nama ="Admin") {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?php echo salam("Pagi", "Ahmad"); ?></h1>
    <hr>
    <!-- Kasus!! Disini, paramaternya hanya satu, yaitu "Malam" -->
    <h1><?php echo salam2("Datang", "Ahmad") ?></h1>
<!-- 
"ahmad" akan dikirim ke variable nama - salam($nama) - dan akan dijalankan di function - return "Selamat Datang, $nama!";
-->
</body>
</html>

