<?php 
// aray
// variabel yang dapat menampung banya nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nyaa adalah index, yang dimulai dari 0


// membuat array
// cara lama
//$hari = array("senin", "selasa", "rabu");
// cara baru
// $bulan = ["januari", "februari", "maret"];
// $arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";print_r($bulan);

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambah elemen baru pada array
 var_dump($hari);
 $hari[] = "kamis";
 $hari[] = "jumat";
 echo "<br>";
 var_dump($hari);

?>