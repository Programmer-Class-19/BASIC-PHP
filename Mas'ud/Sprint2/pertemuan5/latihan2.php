<?php

//pengulanagan pada array untuk menampilkan pada wibsite user
// menggunakan for /foreach
// count () digunakan untuk php menghitung berapa elemen yng ada pada array.
// foreach artinya untuk setiap 


$angka = [1,3,5,7,9,11,13,15,17,19,21,23,25];


?>


<!DOCTYPE html>
<html>
    <head>
        <title>latihan 2</title>
        <style>
            .kotak {
                width:  50px;
                height: 50px;
                background-color: salmon;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
                .clear {clear: both;}
            }
        </style>
    </head>
    <body>
        <!-- cara pertma  -->
    
    <?php for( $x = 0; $x < count($angka); $x++){

    ?>
    <div class="kotak"><?= $angka[$x]; ?></div>
   <?php } ?> 


<br><br><br><br><br>


<!-- cara kedua  -->
<div class="clear"></div>
<?php foreach($angka as $g) : ?>
<div class="kotak"><?= $g; ?></div>
<?php endforeach ?>





    </body>
</html>                 
