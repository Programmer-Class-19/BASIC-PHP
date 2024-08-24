<!DOCTYPE html>
<html>
<head>
    <title>Kussogaki</title>
    <style>
        .warna-baris {
            background-color: Forestgreen;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
   <?php
    // for( $i = 1; $i <= 3; $i++) {
    //     echo "<tr>";
    //     for( $l = 1; $l <= 5; $l++ ) {
    //         echo "<td>$i,$l</td>";
    //     }
    //     echo "</tr>";
    // }

    for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>