<?php 

// Assiciative Array

// meng review pelajaran array video sebelumnya

$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$arr = [100, "teks", true];


// menampilkan array

// versi debugging / versi seorang developer / versi programmer
// ketika mau liat isi array bukan untuk user

// bisa gunakan :

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// print_r lebih ringkas penulisannya dari pada var_dump 
// print_r tidak ada tipe data, jumlah karakter didalam elementnya

// menampilkan 1 element pada array
// echo cuma bisa mencetak isi array (1)

echo $arr[0];



?>