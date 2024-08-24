<?php
// Array
// Variabel yang dapat Memiliki nilai

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat",);
// cara baru
$bulan = ["January", "Febuary", "Maret", "April", "Mei", "Juni",];
$arrl = [123, "Tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 element pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

// menambah elemnet baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>