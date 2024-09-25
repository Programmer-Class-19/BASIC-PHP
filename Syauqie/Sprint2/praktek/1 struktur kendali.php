<?php
//pengulangan
// 1. for
for( $i = 0; $i < 5; $i ++ ) {
//1. $i = 0; adalah inisialisai (menentukan variable awal untuk pengulangannya) 
//2. $i < 5; adalah terminasi (digunakan untuk memberhentikan pengulangannya)
//3. $i++ adalah inkremen (digunakan supaya pegulangannya maju atau mundur)
echo "hello world <br>";
}



// 2. while
// $i = 0;
// while ( $i < 7 ) {
//     echo "hello world <br>";
// $i++;   
// }

// 3. do while (dikerjakan minimal sekali kalau false, sedangkan while kalau false ga akan muncul hello worldnya)

// $i =10;
// do {
//     echo "hello world <br>";
//     $i++;
// } while ( $i < 5 )
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding ="10">
        <?php

    //     for ( $i = 1; $i <= 3; $i++ ) {
    //         echo "<tr>";
    //             for ( $j = 1; $j <=5; $j++ ) {
    //                 echo "<td>$i,$j</td>";
    //     }
    //     echo "</tr>";
    
    // }
        ?>
    </table>
</body>
</html> -->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ( $i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ( $j = 1; $j <= 5; $j++ ) { ?>
                    <td>
                        <?php echo "$i, $j" ?>
                    </td>
                    <?php } ?>
            </tr>
            <?php }  ?>

    </table>
</body>
</html>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: yellow;
        }

        .warna {
            background-color:green;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ( $i = 1; $i <= 5; $i++) : ?>
            <?php if ( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
                <?php else :?>
                <tr>
                <?php endif;?>
                <?php for ( $j = 1; $j <= 5; $j++ ) { ?>
                    <?php if ($j % 2 == 1) : ?>
                    <td class="warna">
                        <?php else : ?>
                            <td>
                        <?php endif; ?>
                        <?php echo "$i, $j" ?>
                    </td>
                    <?php }; ?>
            </tr>
            <?php endfor;  ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    .warna {
        background-color: yellow;
    }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ( $i = 1; $i <= 3; $i++ ) { ?>
            <?php if ( $i % 2 ==1 ) : ?>
                <tr class="warna">
                    <?php else : ?>
            <tr>
                <?php endif; ?>
                <?php for ( $j = 1; $j <= 5; $j++ ) { ?>
                    <td>
                        <?php echo "$i,$j"; ?>
                    </td>
                    <?php } ?>
            </tr>
            <?php } ?>
    </table>
</body>
</html>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-bebas {
            background-color: yellowgreen;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding ="10">
        <?php for ( $i = 1; $i <= 3; $i++ ) {
            echo "<tr>";
            for ( $j = 1; $j <= 5; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        
        ?>
            
    </table>
        <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ( $i= 1; $i <= 7; $i++ ) { ?>
            <?php if ( $i % 2 == 0 ) : ?>
                <tr class="warna-bebas">
                    <?php else : ?>
                        <tr>
                            <?php endif; ?>
                            <?php for ( $j = 1; $j <= 5; $j++ ) { ?>
                                <td>
                                    <?php echo "$i, $j"; ?>
                                </td>
                                <?php } ?>
                        </tr>
            <?php } ?>
    </table>
</body>
</html>

<?php 
//pengkondisian
//1. if else
//2. if else if else
//3. ternary
//4. switch

$x= 20;
if( $x < 20 ) {
    echo "benar";
}
else if($x == 20 ) {
    echo "bingo!!";
}
else {
    echo "salah";
}

?>
<br>
<br>
<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i=10;
            if ( $i < 15 ) {
                echo "benar";
            }

            else if ( $i == 10 ) {
                echo "bingo!!";
            }

            else  {
                echo "salah";
            }
    ?>    
</body>
</html>
