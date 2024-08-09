<?php 

//  ARRAY definisi
// variable yang bisa menampung lebih dari satu nilai
// variable yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key and value
// key nya adalah index, yang dimulai dari 0


// cCARA MEMBUAT ARRAY ADA 2, CARA LAMA DAN CARA BARU:
//     cara lama:
$hari = array("senin", "selasa", "rabu", "...");
//     cara baru:
$bulan = ['januari', 'ferbruari', 'maret', '...'];
//  contoh tipe data yang berbeda:
$arr = [123, "jieqibill", true];


// CARA MENAMPILKAN ARRAY ADA 2:
// var_dump();
// print_r();
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo "<br>";

//  MENAMPILKAN SATU ELEMENT  PADA ARRAY:
// echo $arr[0];
// echo "<br>";
// echo $bulan[2];


//  MENAMBAHKAN 1 ELEMENT PADA ARRAY
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo"<br>";
var_dump($hari);

?>