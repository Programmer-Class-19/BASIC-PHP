<?php

// function
// "potongan program/baris" kode yang kita buat untuk mempermudah 
// kita saat program (kode program tadi bisa kita kasih nama 
// bisa kita panggil berulang ulang)

/*
di php function ada 2 jenis :
1.built-in function (fyngsi yang udah disiapkan oleh php)
2.user-defined function (fungsi yang nanti kita bikin sendiri)


kita akan belajar fungsi dari Date/Time :
-date() untuk menampilkan tangga dengan format tertentu
-time() UNIX Timestamp / EPOCH time (detik yang sudah berlalu sejak 1 januari 1970)
-mktime()
-strtotime()

*/

// L/l = hari
// d = tanggal
// M/m = bulan
// Y/ = tahun

echo date("l, d-M-Y "); // kita butuh 1 parameter untuk menampilkan ke layar


echo time();


///////////////////////////////////////////////////////////


// BUILT-IN FUNCTION

// date/time (tanggal/waktu)
// -date()
// -time()
// -mktime()
// -strtotime()

// echo date("w");
// function date = untuk menampilkan tanggal dengan format tertentu
// l = tampilkan harinya saja
// d = tampilkan tanggal
// m = tampilkan bulan dalam bentuk angka
// M = tampilkan bulkan dalam bentuk huruf
// y = tampilkan tahun\
// H/h = tampilkan jam
// i = menit
// s = detik
// a = am/pm

// echo time();
// UNIX Timestamp / EPOCH Time
// time = detik yang sudah berlalu sejak 1 januari 1970
// echo date("d M Y", time()+60*60*24*100);
// cara menghitungnya 60(detik)*60(menit)*24(sehari)*hari yang ingin kalian kali

// mktime = membuat sendiri waktu/detik
// echo mktime(0,0,0,10,6,2004);
// 0 tersebut = jam, menit, detik, bulan, tanggal, tahun.
// echo date ("l", mktime(0,0,0,10,6,2004));

// strtotime :
echo date ("l", strtotime("06 october 2004"));

// nanti ada lagi yang akan kita pelajari :

// ada beberapa jenis string :
// strlen() = untuk menghitung panjang sebuah string
// strcmp() = string comper = untuk membandingkan 2 buah string
// explode() = untuk memecah sebuah string menjadi array
// htmlspecialchars() = function khusus untuk menjaga kita dari orang yang iseng mau masuk ke website kita (hecker)

// utility = fungsi bantuan
// - var_dump() = untuk mencetak fungsi ununtuk mencetak isi dari sebuah variable
// - isset() = untuk mengecek apakah variable sudah di bikin apa belom
// - empty() = untuk mengecek apakah variable ada isinya apa enggak
// - die() = untuk memberhentikan program kita
// - sleep() = untuk memberhentikan sementara (berhenti 2 detik terus lanjut dijalankan)


// USER-DEFINED FUNCTION




function salam($waktu = "sore", $nama = "qibiell") {
    return "selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("pagi", "biell"); ?></h1>
</body>
</html>