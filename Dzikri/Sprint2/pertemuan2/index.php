<?php
//  Pertemuan 2 - PHP Dasar
// sintaks PHP
// echo,:Fungsi echo adalah salah satu cara paling sederhana dan cepat untuk menghasilkan output di PHP.
//  print
// standar Output
// print_r:adalah fungsi di PHP yang digunakan untuk mencetak atau menampilkan informasi tentang sebuah variabel dengan cara yang mudah dibaca. Fungsi ini sangat berguna untuk debugging, terutama ketika bekerja dengan array atau objek, karena print_r menampilkan struktur lengkap dari variabel tersebut.
// var_dump :adalah fungsi yang digunakan untuk menampilkan informasi tentang variabel, termasuk tipe datanya dan nilainya. Ini sangat berguna untuk debugging karena memberikan detail lengkap tentang isi dari suatu variabel.

// "lebih sakti dari pada '
// penulasan sintaks PHP
// 1.PHP di dalam HTML
// 2.Html di dalam php

// variabel dan tipe data 
// variabel
// tidak n=boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "dzikri";
// 

// $nama = "adzri rabbani";
// echo "halo nama saya $nama";

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation /concat
// .
// $nama_depan = "dzikri";
// $nama_belakang = "rabbani";
// echo $nama_depan ." ". $nama_belakang;

// assignment (operator penugasan)
// =,+=,-=,*=,/=,%=,.=

// $x = 1;
// $x %= 5;
// echo $x;

// $nama = "Adzri";
// $nama .= " ";
// $nama .= "rabbani";
// echo $nama ;

// perbandingan 
// <,>,<=,>=,==,!=
// var_dump(5 == "5")

// identitas
// ===, !==
// var_dump(5 === "5")

// logika
// &&, ||, !

$x = 10;
var_dump($x < 20 || $x % 2 == 0); 
//

// $nama = "adzri";
// echo "nama saya $nama";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Dzikri";?> </h1>
    <p><?php echo "ini adalah paragraph";?></p>

    <?php
        echo "<h1> Halo,Selamat Datang Dzikri</h1>";
    ?>
</body>
</html>