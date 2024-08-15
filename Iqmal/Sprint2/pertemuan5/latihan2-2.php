<?ph

$angka = [4,5,15,20,17,11,10];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan1-2</title>
    <style>
         .ktak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            .clear { clear: both;}
         }
    </style>
</head>
<body>
 <?php for( $i = 0; $i < 7; $i++ ) { ?>   
      <div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>

 <div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <di class="kotak"<?php echo $a; ?></div>
<?php } ?>    




















</body>
</html>