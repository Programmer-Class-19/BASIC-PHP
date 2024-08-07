<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan asociative array</title>
    <style>
        .kotak {
            height: 30px;
            width: 30px;
            background-color: green;
            float: left;
            line-height: 30px;
            text-align: center;
            margin: 3px;
            transition: 1s;
        }
        .kotak:hover {
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
    $angka = [1,2,3,4,5,6,7,8,9];
    ?>

    <?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

    <br><br><hr>

    <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    ?>
    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
    <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
    <div class=clear></div>
    <?php endforeach; ?>
    

</body>
</html>