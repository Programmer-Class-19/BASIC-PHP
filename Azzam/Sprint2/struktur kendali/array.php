<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis",];
$bulan = ["Januari", "Februari", "Maret",];
$arr1 = [123, "tulisan", true];

var_dump($hari);
print_r($bulan);
echo "<br>";
echo $arr1[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $hari[3];
echo "<br>";
var_dump($hari);
$hari[] = "Jumat";
$hari[] = "Sabtu";
$hari[] = "Ahad";
echo "<br>";
var_dump($hari);
echo "<br>";
echo $hari[6];
?>