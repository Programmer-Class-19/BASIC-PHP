<?php
// array
// membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$arr = [100, "teks", true];

// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilakan 1 elemen pada array
echo $arr[0];

?>

<br><br><br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: blue;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>


<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>    
</body>
</html>