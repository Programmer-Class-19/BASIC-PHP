<!-- 
Function (fungsi) dalam PHP adalah sebuah blok kode yang bisa dijalankan kapan saja dengan memanggil nama fungsi tersebut. Fungsinya adalah untuk mengelompokkan kode yang sering digunakan agar dapat digunakan kembali tanpa harus menulis ulang kode tersebut.

Bayangkan kamu memiliki sebuah mesin pembuat kopi. Setiap kali kamu ingin membuat kopi, kamu hanya perlu menekan tombol tertentu, dan mesin itu akan membuat kopi untukmu. Kamu tidak perlu melakukan setiap langkah pembuatan kopi secara manual.

Fungsi dalam PHP mirip dengan mesin tersebut. Kamu membuat "mesin" (fungsi) sekali, dan setiap kali kamu butuh, kamu hanya perlu "menekan tombol" (memanggil fungsi) untuk menjalankannya.
-->
<!-- Mengimplementasikan Function PHP -->
<?php
// Di dalam php ada dua jenis function.
/* 
1. Built-in function
2. User-defined function (fungsinya kita bikin sndiri)
*/

// 1. Built-in Function bisa cek di http://www.php.net/manual/en/funcref.php

echo date("l"); //untuk menampilkan hari.
echo " : ini contoh nampilin hari<hr>";

echo date ("l, d-M-Y")." : untuk mengetahui hari tanggal tahun<hr>"; // untuk mengetahui hari tanggal tahun.

/* Function yang berhubungan dengan TIME  */
// Ada istilah UNIX timestamp / EPOCH time = Detik yang sudah berlalu dari 1 Januari 1970 sampai detik ini. Karena para Ahli menentukan waktu yang disepakati untuk komputer.
//ex. implementasi function time :

// beri tenggang waktu untuk diskon, contoh dikonnya 5 hari kedepan. 1. cek waktu saat ini, dibandingkan waktu 5 hari dari sekarang. nnti tinggal dicari selisihnya saja.


echo date ("l", time()+60*60*24*5) ." : Mengetahui berakhirnya discount<hr>";

//Menentukan 100 hari kedepan harin apa.

echo date("l, d-M-Y", time()+60*60*24*100) . " : Mengetahui 100 hari kedepan hari apa.<hr>";

/* Membuat sendiri detik
menggunakan : mktime
punya 7 paramater : mktime(0,0,0,0,0,0)
Urutannya: Jam, Menit, Detik, Bulan, Tanggal, Tahun.
*/
echo mktime(0,0,0,01,20,2001) . " : Ini adalah detik yang berlalu dari 1 Januari 1970 - 20 januari 2001<hr>";

//biar tau hari apa, tinggal dikombinasi aja!
echo date("l", mktime(0,0,0,01,20,2001)) . " : Ini adalah mengetahui hari pada 20 januari 2001<hr>";

//strtotime = memasukkan format tanggal muncul detiknya.

echo strtotime("20 Jan 2001") . " : ini adalah contoh function strtotime"; //yang dimasukkan  dalam function ini adalah string.
echo "<hr>";

/* yang berkaitan dengan String */
// strlen() - Menghitung panjang dari sebuah string
//strcmp() - untuk menggabungkan string
//explode() - untuk memecah sebuah string menjadi array.
//htmlspecialchars() - menjaga dari orang iseng atau heackers.

/* Utility - fungsi bantuan*/
//var_dump()
//isset() - check apakah variable udh disisi apa blm
//empty() - check variabelnya kosong atau tidak
//die() - memberhentikan program kita.
//sleep() - untuk mnghentikan sementara.








?>