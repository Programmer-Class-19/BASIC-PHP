<?php
// pengulangan pada array
// for / foreach
$angka = [2,4,5,6,10,60,20];
$angka2 = [3,6,7,2,8,9];
$angka3 = [7,8,9,5,4];
$angka4 = [6,4,7,4,9,0]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            justify-self: unset;
                
        }
 

        .clear { clear: both; }
        
    </style>
</head>
<body>

<?php for( $i = 0; $i < 7; $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php for( $i = 0; $i < count($angka2); $i++ ) { ?>
    <div class="kotak"><?php echo $angka2[$i]; ?></div>
    <?php } ?>

<div class="clear"></div>

<?php foreach( $angka3 as $a ) { ?>
    <div class="kotak"><?php echo $a?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka4 as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach?>    

</body>
</html>