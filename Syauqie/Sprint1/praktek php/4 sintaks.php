<?php 
//php di dalam html
//html di dalam php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ini contoh php di dalam <?= "html";?></h3>
    
    <?php //echo "<h3>ini adalah contoh html didalam php</h3>" ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h3>sintaks echo dan print</h3>
    <p>contooh dari sintaks echo <?php  echo "syauqie billah" ?> </p>

    <h3>sintaks print_r</h3>
    <p>contooh dari sintaks print_r <?php print_r("(ini)") ?></p>

    <h3>sintaks var_dump</h3>
    <p>ini contoh dari sintaks var_dump <?php var_dump("sokiii") ?></p>

    <h3>sintaks variable</h3>
    <?php $hewan = "unta"?>
    <?php $makan = "kambing"?>
    <?php echo "$makan $hewan" ?>

    <h3>operator aritmatika</h3>
    <?php 
    "+ - % /";
    echo 1 * 5;
    echo "<br>";
    echo 20 % 5; 
    ?>
    
    <h3>penggabung string atau concat ." ".</h3>
    <?php 
    $nama_depan = "syauqie";
    $nama_belakang = "billah";
    echo $nama_depan ." ". $nama_belakang;
    ?>

    <h3>operator assignment (.= /= %= *= -=)</h3>
    <?php $x = 1 ?> 
    <?php $x += 2 ?>
    <?php echo $x ?>
    <br>
    <?php $nama = "syauqie" ?>
    <?php $nama .= " " ?>
    <?php $nama .= "billah" ?>
    <?php echo "$nama" ?> ini yang pake titik


    <h3>operator perbandingan (<, >, <=, =>, ==, != )</h3>
    <?php var_dump(1 < 5) ?>
    <?php var_dump(1 < 6 || 3 > 1) ?>
    <?php var_dump(1 == "1") ?> <!-- ini berguna untuk menunjukan bahwa satu itu sama (tidak mengecek tipe datanya)  -->

    <h3>sintaks identitas (===, !==)</h3>
    <?php var_dump(1 === "1") ?> <!-- ini unuk identasi walaupun sama tetapi ada tanda kutip 2 nya makanya false -->
    <?php var_dump(1 !== "1") ?>
    <?php  ?>
    <?php  ?>

    <h3>sintaks logika (&&, ||, !   )</h3>
    <?php $x = 20 ?>
    <?php var_dump($x > 10 && $x % 2 == 0) ?> <br> <!-- kalau menggunakan && kedua variable harus benar semua -->
    <?php var_dump($x > 5 || $x % 3 == 0) ?> <!-- kalau pake || untuk salah satunya saja -->
</body>
</html>
