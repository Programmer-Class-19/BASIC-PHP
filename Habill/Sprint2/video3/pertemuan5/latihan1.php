<?php 


// array akakn kita banyak gunakan ketika nanti masuk ke 
// database
//  ARRAY definisi
// variable yang bisa menampung lebih dari satu nilai
// variable yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key and value
// key nya adalah index, yang dimulai dari 0


// CARA MEMBUAT ARRAY ADA 2, CARA LAMA DAN CARA BARU:
//     cara lama:
$hari = array("senin", "selasa", "rabu", "...");
//     cara baru:         /// nilai didalam array kita sebut element
$bulan = ['januari', 'ferbruari', 'maret', '...'];
//  contoh tipe data yang berbeda:
$arr = [123, "jieqibill", true];


// tiap" didalam array pasti mempunyai index
// CARA MENAMPILKAN ARRAY ADA 2:
// var_dump(); mengecek isi dari sebuah variable
// print_r(); menampilkan array lebih ringkas tanpa tipe datanya
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo "<br>";

//  MENAMPILKAN SATU ELEMENT  PADA ARRAY:
// echo $arr[0];
// echo "<br>";
// echo $bulan[2];


//  MENAMBAHKAN ELEMENT BARU PADA ARRAY
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo"<br>";
var_dump($hari);

?>