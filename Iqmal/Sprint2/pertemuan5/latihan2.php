<?php 
// pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89,8]; 

?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan 2</title>
    <style>
        div {

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

<?php for( $i = 0; $i < count($angka); $i++) { ?>
<div><?php echo $angkaS[$i]?></div>
<?php }?>
<div class="clear"></div>
    
</body>
</html>