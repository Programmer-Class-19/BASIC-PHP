<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lathpengulangan</title>
</head>
<body>
    <table border = 2 cellpadding = 10 cellspacing = 0>
        <?php
        for( $i = 1; $i <= 8; $i++ ) {
            echo "<tr>";
            for( $j = 1; $j <= 8; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>