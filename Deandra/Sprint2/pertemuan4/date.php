<?php
// date
// untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-m-y");
    
// time
// UNIX timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("d m y", time()+60*60*24*5);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,4,2005))

// strtotime
echo date("l", strtotime("04 aug 2005"));
?>