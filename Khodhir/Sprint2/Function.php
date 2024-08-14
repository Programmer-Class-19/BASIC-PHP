<!-- 
Function (fungsi) dalam PHP adalah sebuah blok kode yang bisa dijalankan kapan saja dengan memanggil nama fungsi tersebut. Fungsinya adalah untuk mengelompokkan kode yang sering digunakan agar dapat digunakan kembali tanpa harus menulis ulang kode tersebut.

Bayangkan kamu memiliki sebuah mesin pembuat kopi. Setiap kali kamu ingin membuat kopi, kamu hanya perlu menekan tombol tertentu, dan mesin itu akan membuat kopi untukmu. Kamu tidak perlu melakukan setiap langkah pembuatan kopi secara manual.

Fungsi dalam PHP mirip dengan mesin tersebut. Kamu membuat "mesin" (fungsi) sekali, dan setiap kali kamu butuh, kamu hanya perlu "menekan tombol" (memanggil fungsi) untuk menjalankannya.
-->
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

// Cara menentukan bbrp hari kedepan hari apa.

echo date("l", time()); // dengan melihat hitungan detik dari hari ini ke hari yang ditentukan.



?>