<?php

$nama = "deandra putra"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>halo, selamat datang <?php echo $nama; ?></h1> 
</body>
</html>

<?php
$x = 10;
 $y = 20;
 echo $x * $y;
//  variabel yang sama
?>

<br>

<?php
 $nama_depan = "deandra";
 $nama_belakang = "putra";
echo $nama_depan ." ". $nama_belakang;
?>

<br>

<?php
$x = 5;
$x += 5;
echo $x;
?>
<br>
<?php
 $nama = "dndr";
 $nama .= " ";
 $nama .= "putra";
 echo $nama;
?>

<br>

<?php
var_dump(1 < "5")
?>
<br>
<?php
var_dump(1 === "1")
?>
<br>
<?php
$x = 30;
var_dump($x < 50 && $x % 2 == 0);
?>

