<?php 
for ( $i=0; $i < 5; $i++ ) {
    echo "syauqie <br>";
}

echo "<br>";
echo "<br>";

$i = 0;
while ($i < 5) {
    echo "zidan <br>";
    $i++;
}

echo "<br>";
echo "<br>";

$i=0;
do {
    echo "radhit  <br>";
    $i++;
} while ($i < 5);  
?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .warna {
            background-color:yellow;
        }

        .warna2 {
            background-color:green;

        }
        
    </style>
</head>
<body>
    <table border = 1; cellspacing = 0; cellpadding = 10;>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna">
                    <?php else : ?>
                        <tr>
                <?php endif; ?>
                        <?php for ($j = 1; $j <= 5; $j++) { ?>
                            <?php if ($i % 2 != 0) : ?>
                                <td class="warna2"><?php echo $i,$j; ?>
                                <?php else : ?>
                            <td>
                                <?php echo $i, $j; ?>
                            </td>
                            <?php endif; ?>
                    <?php } ?>
                        </tr>
            <?php } ?>
    </table>
    <hr>
    <table border=1 cellspacing=0 cellpadding=10>
            <?php for ($i = 1; $i <= 7; $i++) {
                echo "<tr>";
                    for ($j = 1; $j <= 8; $j++) {
                        echo "<td>$i,$j </td>";
                    }
                echo "<tr>";
            }             
            ?>
    </table>
    <hr>
            
    <table border="1" cellspacing="0" cellpadding="10">
<?php for ($i = 1; $i <= 7; $i++) {
    // Cek apakah nomor baris ganjil
    if ($i % 2 != 0) {
        echo "<tr style='background-color: green;'>"; // Ganti #f2f2f2 dengan warna yang diinginkan
    } else {
        echo "<tr>";
    }

    for ($j = 1; $j <= 8; $j++) {
        echo "<td>$i,$j</td>";
    }
    
    echo "</tr>";
} ?>
</table>

</body>
</html> 
<?php 

echo "<p style = 'color:green;'>syauqie</p>";


?>

<?php 
function selamat ($waktu, $nama) {
return "selamat, $waktu $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo selamat ("pagi", "syauqie"); ?></h1>
</body>
</html>


<?php 
$nama = [
    ["syauqie", 19, "pondok it"],
    ["radhit", 12, "an - nuqhtoh"]
]  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($nama as $n) { ?>
        <ul>

            <li>nama :<?php echo $n [0]; ?></li>
            <li>umur :<?php echo $n [1]; ?></li>
            <li>sekolah :<?php echo $n [2]; ?></li>
            
        </ul>
    <?php } ?>
</body>
</html>
<?php 
$nama = [
    ["nama" => "syauqie",
    "kelas" => "10 SMA",
    "umur" => 19],

    ["nama" => "zidan",
    "kelas" => "12 SMA",
    "umur" => 20]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lambe {
            border-radius:10px;
            background-color:blue;
            float:left;
            margin:4px;
            width:90px;
            height:90px;
        }
    </style>
</head>
<body>
    <?php foreach ($nama as $person ) { ?>
    <ul class="lambe">

    <li>Nama: <?php echo  $person['nama'] ; ?> </li>
    <li>Kelas: <?php echo  $person['kelas'] ; ?> </li>
    <li>Umur: <?php echo  $person['umur'] ; ?> </li>

    </ul>
<?php } ?>

    
</body>
</html>