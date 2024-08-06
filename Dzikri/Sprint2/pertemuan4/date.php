<?php 
// date untuk menampilkan tanggal dengan format tertentu
//    echo date("l, d-m-y");

// time
// unix timestamp /epoch time 
// detik yang sudah berlalu dari 1 januari 1970
//   echo time();
// echo date ( "d M Y", time ()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0.0.0.0.0.0.
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,5,27,2003));

// strtotime
echo date("l",strtotime("27 mei 2003"));

// string 
// -strlen() : untuk menghitung panjang dari sring  

// strcmp : untuk menggabungkan 2 buah string
// explode : untuk mempecah sebuah string agar menjadi array
// htmlspecialchars : untuk  enjaga kita dari orang yang iseng masuk ke website kita

// UTILITY
// -var_dump()
// -ISSET : untuk mengecaek sebuah variabel 
// empty : untuk mengecek variabel yang masih kosong
// die : untuk menghentikan program kit
// sleep : untuk berhentikan sementara 

// User-defined function
?>