<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: green;
            margin: 3px;
            text-align: center;
            float: left;
            transition: 1s;
            line-height: 30px;
            color: white;
        }
        .kotak:hover {
            transform: matrix3d();
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
        [7,8,9]];
?>
    <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a) : ?>
            <div class="kotak"><?php echo "$a"; ?></div>
        <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>

    <?php 
        $mahasiswa = [
            "nama" => "syauqie",
            "kelas" => "12",
            "umur" => "19",
            ]
    ?>

    <?php echo $mahasiswa ["nama"]; ?>
</body>
</html>