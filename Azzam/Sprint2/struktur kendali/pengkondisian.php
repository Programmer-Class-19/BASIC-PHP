<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengkondisian</title>
</head>
<body>
    <?php
    $x = 20;
    if( $x < 20 ) {
        echo "benar";
    }  else if( $x == 20 ) {
        echo "bingo";
    }
    else {
        echo "salah";
    }
    ?>
    <br>
    <?php 
    $x = 10;
    if( $x < 20 ) {
        echo "benar";
    }   else if( $x == 20) {
        echo "bingo";
    }
    else {
        echo "salah";
    }
    ?>
<br>
    <?php
    $x = 30;
    if( $x > 20 ) {
            echo "correct";
    }   else if($x == 35) {
            echo "yes";
    }   else {
            echo "wrong";
    }
    ?>

</body>
</html>