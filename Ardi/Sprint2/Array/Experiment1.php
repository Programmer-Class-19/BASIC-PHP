<?php
// pengulangan pada array
// for / foreach
$angka = [4,8,12,16,20,24,28,32,36,40,];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kubus {
            width: 50px;
            height: 50px;
            background-color: Forestgreen;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kubus"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kubus"><?php echo $a; ?></div>
<?php } ?>

<?php foreach( $angka as $a ) : ?>
    <div class="kubus"><?php echo $a; ?></div>
<?php endforeach; ?>