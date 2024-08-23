<?php
// 1. contoh menggunakan funcition DATE :
// DATE untuk menampilkan tanggal dengan format tertentu. 
/*

d - Hari dalam bulan (dua digit, 01 sampai 31)
m - Bulan (dua digit, 01 sampai 12)
Y - Tahun (empat digit)
H - Jam dalam format 24-jam (dua digit, 00 sampai 23)
i - Menit (dua digit, 00 sampai 59)
s - Detik (dua digit, 00 sampai 59)
l - menampilkan hari ini  

*/
echo date ( "l, H-i-s" );

print "<br><br><br>";



// 2. contoh menggunakan funcion TIME
// TIME 
// UNIX Timestamp / EPHOCH time = asal mula waktu dunia IT / Komputer
// detik yang sudah berlalu sejak 1 JANUARI 1970
echo time ();      // detik yang sudah berlalu sejak 1 JANUARI 1970

print "<br>";


echo date ("l", time()+60*60*24*153);   // menghitung hari ke mas depan (+) dengan menggabuangkan dua function   
print "<br>";
echo date ("l", time()-60*60*24*153);  // menghitung hari ke mas lampau (-) dengan menggabuangkan dua functio

print "<br><br><br>";




// 3. contoh menggunakan mktime 
// mktime untuk membuat sendiri detik dari 1 januari 1970 sampai detik yang kita inginkan.
// mktime(0,0,0,0,0,0)
// dalam mktime terdapat 6 parameter : Jam , Menit , Detik , Bulan , Hari , Tahun 
echo date("l",mktime(0,0,0,10,19,2004));  // hari lahir nya mas'ud 

print "<br><br><br>";





// strtotime 
// strtotime digunakan menggunakan string

echo date("l",strtotime("19 oct 2004"));












?>