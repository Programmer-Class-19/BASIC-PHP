<?php
    //Pengulanagan pada array
// - For/
// - foreach = untuk setiap

    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 11, 20, 28];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php2</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            margin: 3px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left; 
            /* float untuk mengatur tulisan dari kiri ke kanan */
        }
        .clear {clear: both; }
        /* untuk memebrsihkan float */

    </style>

</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>

    <div class="kotak">
        <?php echo $angka [$i] ; ?>
    </div>
    <?php } ?>
<!-- Note untuk pengulangan for
 kenapa nilai variable adalah 0, karena index elemnt dimulai dr nol. dan mau brp kali di ulang, ingat pakai rumus : $i < 7; #i__ // berarti kita minta diulangi 7x.

 Kasus:
 bagaiman kalau arrainya ditambahkan satu elemen, angka 8 .
    -> Kita bisa memanfaatkan sebuah fungsi "count" biar phpnya hitung sendiri jumlah elemen dalam array. brpapun elemnt array yang kita tambahkan bakal auto dimunculin sndiri sama phpnya
-->
<div class="clear"></div>
 <!--biar turun ke bawah-->

<?php foreach($angka as $a) { ?>
    <div class="kotak"><?php echo $a;?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
<?php  endforeach; ?>


</body>
</html>