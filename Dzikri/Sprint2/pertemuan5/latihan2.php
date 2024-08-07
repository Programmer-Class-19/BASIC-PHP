<?php
// pengulangan pada array
// for / foreach 
$angka = [3,2,15,20,11,77,89,99,27,05,27]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
       .kotak {

        width: 50px;
        height: 50px;
        background-color : red;
        text-align: center;
        line-height: 50px;
        margin : 3px;
        float : left;
        color: withe;
       }

       .clear { clear: both;}

    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a) { ?>
    <div class="kotak"><?php echo $a;?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach ; ?>
</body>
</html>