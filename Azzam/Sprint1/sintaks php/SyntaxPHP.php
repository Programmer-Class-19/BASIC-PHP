<?php
/*
komentar satu
komentar dua
*/
// komentar
// ini juga
// satu lagi

$nama = "Haqqi";
echo "Hello my name is $nama";
echo "<br>";

echo "elhaqq";

$nama1 = "Elhaqq";
$nama2 = "Haqqi";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>Hello, welcome to our destination <?= $nama1 ?></h1>
    <p>Hello, welcome back <?= $nama2 ?></p>
    
</body>
</html>

<?php
// aritmatika
echo 1 + 1;
echo "<br>";
print 1 + 3;
?>
<br>
<?php
echo 10 %3;
?>
<br>
<?php
echo 10 /5;
?>
<br>
<?php
$x = 50;
$y = 50;
echo $x * $y;
?>
<br>
<?php
// penggabung
$nama_depan = "azzam";
$nama_belakang = "haqqi";
echo $nama_depan . " " . $nama_belakang;
?>
<br>
<?php
// assignment
$x = 2;
$x +=5;
echo $x;
?>
<br>
<?php
$nama = "azzam";
$nama .= " ";
$nama .= "haqqi";
echo $nama;
?>
<br>
<?php
// perbandingan
var_dump(5 == 5);
echo "<br>";
var_dump(2 =="2");
?><br>
<?php
// identitas
var_dump(5 === "5");
echo "<br>";
var_dump(5 !=="4");
?><br>
<?php
$x = 20;
var_dump($x > 10);
?>
<?php
// logika
$x = 30;
var_dump($x < 50 && $x % 2 == 0);
?>
<?php
$x = 20;
var_dump($x < 10 || $x % 2 == 0);
?>