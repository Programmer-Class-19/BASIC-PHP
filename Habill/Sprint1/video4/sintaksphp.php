<?php

// php pemula video 4

// pertemuan 2 - php dasar
// sintaks php 


// cara penulisan komentar ada 2:
// komentar
/* komentar buat banyak baris*/


// standar output (sebuah perintah di php yang digunakan
// untuk sesuatu ke layar/mencetak sesuatu ke layar)

// sintaks output ada banyak:
// echo, print (mencetak tulisan n isi variable)
echo "jie qibill <br>";
echo 123; // tidak butuh string
echo true; //bollean tidak butuh string (akan menghasilkan angka 1)
echo false; //bollean tidak butuh string (akan menghasilkan kosong)
print "<br> mutss tiqq <br>";
// print_r (khusus mencetak isi array)
print_r ("mutss tiqq <br>");
// var_dump (melihat isi dari variable)
var_dump ("mutss tiqq");

// penulisan sintaks php
// 1. php didalam html
// 2. html didalam php

// variable dan tipe data
// variable($)
// tidak boleh diawali dengan angka, tapi boleh mengandung
// angka (gabole ada spaci), gabole ada spaci
// $1nama = tidak boleh
// $nama1 = boleh                             INTERPOLASI


// operator
// aritmatika + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// operatornya titik (.)
// $nama_depan = "jie";
// $nama_belakang = "qibiel";
// echo $nama_depan . " " . $nama_belakang;

// assigment (penugasan)
// =, +=, -=, *=, /=, %=, .=,
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "jie";
// $nama .= " ";
// $nama .= "qibiel";
// echo $nama;

// perbandingan 
// <, >, <=, >=, ==, !=,
// var_dump(1 > 5);
// var_dump(1 > "1"); // tidak meliaht tipe data tapi
// langsung ke nilai (true)

// identitas
// ===, !==,
// var_dump(1 === 5); melihat tipe data (false)
/*
logika
pengkondisian
&&, ||, !
$x = 10;
$x = 30;
var_dump($x < 20 && $x % 2 == 0); true
var_dump($x < 20 && $x % 2 == 0); salah satu nilainya salah false
var_dump($x < 20 || $x % 2 == 0); salah satu nilainya bene true
*/

?>
<!-- contoh php dalam htnml: disarankan -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks php</title>
</head>
<body>
    <h1><br>hallo sayangku <?= "biell"; ?><br></h1>
    <p> <?= "selamat siang kameng <br>"; ?></p>
</body>
</html>

<!-- contoh html disalam php : tidak disarankan -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks php</title>
</head>
<body>
    <?php 
    echo "<h1> selamat pagi ayang</h1>"
    ?>
</body>
</html>