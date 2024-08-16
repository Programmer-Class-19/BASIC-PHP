<?php


// struktur kendali itu adalah bagaimana alur dari program 
// kita ketika dibaca oleh interpreter php
/*
normalnya program kita dibaca php dari atas kebawah dari kiri
kekanan, tapi dengan menggunakan control flow alu bacan prgoramnya
bisa kita atur sendiri.
*/


// dari control flow kita akan belajar 2 hal:
// pengulangan dan pengkondisian

// pengulangan (ketika kita ingin mengerjakan sebuah blok
// program tanpa harus menulis ulang scriptnya)
// 1.for,
// 2.while, apa yang dilakukan for bisa dilakukan oleh while
// 3.do...while,
// 4.foreach (pengulangan spesisik untuk array /khusus array)

/*
didalam for ada 3 bagian:
    1.inisialisasi (kita menentukan variable awal untuk pengulangannya)
    2.kondisi terminasi (digunakan untuk memberhentikan pengulangannya)
    3.ingkremen n dikremen (supaya pengulangannya bisa maju atau mundur)
*/ 

// php indexnya dimulai dari 0
// for($i = 0; $i < 5; $i++) {
//     echo "hello world! <br>";
// }


// sama dengan for cuma beda posisi peletakan sintaksnya
// $i = 0;
// while ($i < 5) {
//     echo "hello wolrd! <br>";
// $i++;
// } // ketika kondisinya false maka tidak akan dijalankan

// $i = 0;
// do {
//     echo "hello wolrd! <br>";
//     $i++;
// }while ($i < 5);
// ketika flase maka akan dijalankan 1x



// pengkondisian/percabangan
// 1.if...else
// 2.if...else if...else
// 3.ternary (operator untuk menggantikan sintaks if.. else yang
// sederhana)
// 4.switch   !!ternary dan switch bisa di liat di playlist javascript

// $x= 10;
// if ( $x < 20 ){
//     echo "benar";
// }else {
//     echo "salah";
// }

$x= 20;
if ( $x < 20 ){
    echo "benar";
} else if ($x == 20){
    echo "bingo!";
} else {
    echo "salah";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
    <style>
        .warna-baris {
        background-color: red;
        }
        .warna-ganjil {
        background-color: blue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <!-- <?php
    // for( $i= 1; $i <= 3; $i++) {
    //     echo "<tr>";
    //     for( $j= 1; $j <= 5; $j++){
    //         echo "<td>$i,$j</td>";
    //     }
    //     echo "</tr>";
    // }
    ?> -->

    <?php for($i= 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 0) : ?>
        <tr class="warna-baris"> 
        <?php else : ?>
            <tr class="warna-ganjil">
        <?php endif; ?>
            <?php for($j= 1; $j <= 10; $j++) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>