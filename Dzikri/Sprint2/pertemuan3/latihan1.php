<!--
// pengulangan
// for
// while
// do.. while
// foreach :pengulangan khusus array

// for( $i = 0; $i < 5; $i++) {
//     echo "hello world <br>";
// }
dalam for ada inisialisasi , kondisi terminasi , increment atau decrement
// $i = 0;
// while( $i <5 ){
//     echo "Hello World <br>";
// $i++;
// }

// $i = 0;
// do {
//     echo "hello world <br>";
// $i++;
// } while( $i < 10 );
-->
<?php
    // for( $i = 0; $i < 7; $i++ ) {
    //     echo "Hello, Dzikri <br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
                background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for( $i =1; $i <= 5; $i++) {
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++) {
                    echo "<td>$i,$j</td>";   
                } 

                echo "</tr>";
            }
        
        ?>
    </table>

    <table border="1" cellpadding="10" cellspacing="0">
            <?php for($i = 1; $i <= 5; $i++) : ?>
                <?php if( $i %2 == 0 ) : ?>  
                <tr  class="warna-baris">
                <?php else : ?>
                <tr> 
                 <?php endif ;?>      
                    <?php for( $j = 1; $j <= 7; $j++) {?>
                        <td> <?php echo "$i,$j"; ?></td>
                    <?php }?>    
                </tr>
            <?php endfor;?>
    </table>
</body>
</html>
