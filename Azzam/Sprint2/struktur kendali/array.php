<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis",];
$bulan = ["Januari", "Februari", "Maret",];
$arr1 = [123, "tulisan", true];

var_dump($hari);
echo "<br>";
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
<br>
<?php
$angka = ["satu", "dua", "tiga", "empat",];
$waktu = ["Pagi", "Siang", "Sore", "Senja", "Malam",];
$jam = [01.00, 02.00, 03.00, 04.00, 05.00, 06.00,];

var_dump($angka);
echo "<br>";
echo $angka[2];
echo "<br>";
print_r($waktu);
echo "<br>";
echo $waktu[1];
echo "<br>";
var_dump($jam);
echo "<br>";
echo $jam[3];
echo "<br>";
print_r($angka);
$angka[] = "lima";
$angka[] = "enam";
$angka[] = "tujuh";
$jam[] = 07.00;
$jam[] = 08.00;
$jam[] = 09.00;
$waktu[] = "Shubuh";
$waktu[] = "Petang";
echo "<br>";
var_dump($angka);
echo "<br>";
var_dump($waktu);
echo "<br>";
var_dump($jam);
echo "<br>";
echo $angka[5];
echo "<br>";
echo $waktu[6];
echo "<br>";
echo $jam[7];
?>