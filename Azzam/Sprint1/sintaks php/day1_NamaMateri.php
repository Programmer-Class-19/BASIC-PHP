<?php
/*
komentar
*/
// komentar
// ini juga
// satu lagi

echo "elhaqq";
$nama1 = "Elhaqq";
$nama2 = "djenggot";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>hello, welcome to our destination <?php echo $nama1 ?></h1>
    <p>hello, welcome back <?php echo $nama2 ?></p>
    
</body>
</html>
<?php
echo 1 + 1;
?>
<br>
<?php
$x = 50;
$y = 50;
echo $x * $y;
?>
<br>
<?php
$nama_depan = "azzam";
$nama_belakang = "haqqi";
echo $nama_depan . " " . $nama_belakang;
?>
<br>
<?php
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
var_dump(5 =="5");
var_dump(2 =="2");
?><br>
<?php
var_dump(5 === "5");
var_dump(5 !=="4");
?><br>
<?php
$x = 20;
var_dump($x > 10);
?>
<?php
$x = 30;
var_dump($x < 50 && $x % 2 == 0);
?>
<?php
$x = 20;
var_dump($x < 10 || $x % 2 == 0);
?>