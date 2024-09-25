<?php

// Array
// Sebuah tipe data yang dapat menampung lebih dari satu nilai dalam variabel.

// variabel dalam array nilainya dapat kita gabungkan  dengan elemen berbeda atau nilai berbeda 
//     misalnya pada satu variabel terdapat nilai dengan tipe data yang berbeda : misalnya ada string, interger, boolean
//     CONTOH :             $makan = ["sayur", 123, false/true];

// pasangan antara key dan value 
// key-nya adalah index, yang dimulai dari 0
// 














// Array cara lama 
$seminggu = array("senin","selasa","rabu","kamis","jum'at","sabtu","minggu");


// Array cara baru 
$setahun = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];


// Array contoh array macam nilai dalam variabel 
$arry1 = [19102004, "tanggallahir", true];






//cara  Menampilkan Array 
// dengan 2 cara : 1.var_dump()  2. print_r()
var_dump($seminggu);

echo "<br><br>";

print_r($setahun);


echo "<br><br>";

// menampilkan 1 elemen pada array 
echo $arry1[0];

echo "<br><br>";

print $setahun[9];

echo "<br><br>";

echo$seminggu[1];


echo "<br><br>";



// menambah elemen baru dalam array 
var_dump($seminggu);
$seminggu[] = "ahad";
$seminggu[] = "sunday";

echo "<br><br>";

var_dump($seminggu);


?>