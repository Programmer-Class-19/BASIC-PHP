<!DOCTYPE html>
<html>
<head>
    <title>Array x Pengulangan</title>
    <style>
        .Kotak {
            width: 30px; 
            height: 30px;
            background-color: Forestgreen;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        
        .Kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%
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
    <?php foreach( $angka as $l) : ?>
        <?php foreach( $l as $k) : ?>
        <div class="Kotak"><?= $k; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>