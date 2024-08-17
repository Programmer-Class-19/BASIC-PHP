<?php
    //Pengulanagan pada array
// - For/foreach 
    $angka = [1, 2, 3, 4, 5, 6, 7];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php2</title>

    <style>
        div {
            width: 50px;
            height: 50px;
            margin: 3px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left; 
            /* float untuk mengatur tulisan dari kiri ke kanan */
        }

    </style>

</head>
<body>
    <?php for( $i = 0; $i < 7; $i++ ) { ?>
<!-- Note untuk pengulangan for
 kenapa nilai variable adalah 0, karena index elemnt dimulai dr nol. dan mau brp kali di ulang, ingat pakai rumus : $i < 7; #i__ // berarti kita minta diulangi 7x.
        
-->
    <div>
        <?php echo $angka [$i] ; ?>
    </div>

    <?php } ?>
</body>
</html>