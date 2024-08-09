<?php 

//  PENGULANGAN PADA ARRAY:
//     for / froeach
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


<div class="clear"></div>

<!-- foreach(untuk setiap element yang ada didalam array,  lakukan sesuatu) //foreach lebih enak makek isi bahasa inggris, karena variable pertama jamak dan as nya enggak -->
<?php foreach($angka as $a) { ?> 
    <div class="kotak"><?= $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>



</body>
</html>