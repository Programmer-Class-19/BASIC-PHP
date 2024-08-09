<?php

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

// mktime = membuat sendiri waktu\
// mktime(0,0,0,0,0,0)
// 0 tersebut = jam, menit, detik, bulan, tanggal, tahun.
// echo date ("l", mktime(0,0,0,10,6,2004));

echo date ("l", strtotime("06 october 2004"));


// string
// strlen() = untuk menghitung panjang sebuah string
// strcmp() = string comper = untuk membandingkan 2 buah string
// explode() = untuk memecah sebuah string menjadi array
// htmlspecialchars() = untuk menjaga kita dari orang yang iseng mau masuk ke website kita (hecker)

// utility = fungsi bantuan
// - var_dump() = untuk mencetak fungsi dari sebuah variable
// - isset() = untuk mengecek apakah variable sudah di pakek apa belom
// - empty() = untuk mengecek apakah variable ada isinya apa enggak
// - die() = untuk memberhentikan program kita
// - sleep() = untuk memberhentikan sementara











?>