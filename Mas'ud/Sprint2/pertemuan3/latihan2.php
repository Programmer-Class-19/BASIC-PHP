<!-- pembelajaran conrtol flow pengkondisian  -->

<?php 
/*
pengkondisian /percabangan 
sintak pembelajarannya :
1. if  else
2. if  else if  else 
3. ternary  
4. switch digunakan untuk meringkas atau sebagai penngganti if else apabila telah terlalu banyak 

*/

 
$m = 20;
if( $m < 20 ) { 
    echo "betul";
}  elseif ( $m == 20 ) {
    echo "binggo!";
}


else {
    echo "salah";
}



?>



<?php echo "<br><br><br><br><br><hr>"; ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
        <style>
            .warna-baris {
                background-color: silver;
            }
        </style>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="10" >
        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
           <?php if ( $i % 2 == 0 ) : ?>           
                <tr class="warna-baris">
               <?php else : ?>
                <tr>
               <?php endif ?> 
                <?php for ( $j = 1; $j <= 5; $j++ ) : ?>
                <td> <?= "$i, $j"; ?> </td> 
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </table>
    </body>
</html>

