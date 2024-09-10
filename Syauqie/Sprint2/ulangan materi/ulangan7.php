<?php 

    echo date("l d-M-Y", time()+60*60*24*200);
    echo "<br>";
    echo date ("l, d-M-Y");
    echo "<br>";
    echo date ("l", mktime(0,0,0,6,13,2006));
    echo "<br>";
    echo date ("l", strtotime("13 june 2006"));

    
?>

<?php 

$mahasiswa = [
    ["syauqie", 124567, "teknik informatika"],
    ["zidan", 124567, "teknik hukum"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $m) { ?>
                <li><?php echo $m; ?></li>
            <?php } ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>



<?php 

$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            background-color:green;
            float: left;
            width: 30px;
            height:30px;
            line-height:30px;
            padding:10px;
            margin:5px;
            text-align:center;
            border-radius:20px; 
        }

        .clear {
            clear:both;
        }
    </style>
</head>
<body>
    <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a) : ?>
            <div class="kotak"><?php echo $a; ?></div>
        <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>

<?php 

$nama = ["nama" => "syauqie", 
        "rumah" => "mauk", 
        "umur" => "19 tahun"];

foreach ($nama as $n => $value) {
    echo "$n $value. <br>";
    
}

?>
<br>
<?php 
$umur = array("Andi" => 25, "Budi" => 30, "Citra" => 28);

foreach ($umur as $nama => $nilai) {
    echo "$nama berumur $nilai tahun.<br>";
}
?>