<?php 

//  PENGULANGAN PADA ARRAY:
//     for / foreach
$angka = [3,2,15,20,11,77,89,90];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php  for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
<?php } ?>

<!-- ada juga cara ke 2 yang lebih gampamg menggunakan foreach -->
<!-- sebelum itu kita clear dulu biar ada turun kebawahnya, untuk membersihkan floatnya -->

<div class="clear"></div>

<!-- foreach(untuk setiap element yang ada didalam array,  lakukan sesuatu) //foreach lebih enak makek isi bahasa inggris, karena variable pertama jamak dan as nya enggak -->
<!-- foreach artinya kan untuk setiap (untuk setiap element yg ada didalam array lakukan sesuatu) -->
<!-- didalam foreach kalian tulis bagian array mana yang mau di lopping -->
<!-- untuk setiap element dalam array angka ketword selanjutnya adalah as -->
<!-- angka itu adalah array nya dan kita akan melakukan lopping untuk tiap" element didalamnya -->
<!-- yang akan kita lakukan dalam loppingnya adalah yang a ini -->
<?php foreach($angka as $a) { ?> 
    <div class="kotak"><?= $a; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- yg ke 3 kita bisa memperbaiki penulisan foreach dengan gaya penulisan yg disebut templating -->

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

<!-- nah jadi ini tiga cara menampilkan isi array menggunakan lopping -->



</body>
</html>