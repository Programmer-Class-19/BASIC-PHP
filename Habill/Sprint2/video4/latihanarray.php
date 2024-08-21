<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .asin {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-heigt: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        /* degri untuk satu putaran penuh */
        .asin:hover {
            transfrorm: rotate(360deg); 
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>

<?php foreach( $angka as $a ) : ?>
    <div class="asin"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>