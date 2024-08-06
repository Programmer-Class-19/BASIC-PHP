<?php
/*
Pembahasan control flow  pengulangan:
sintak pembelajaran ny :
1. for 
dalam for ada 3 bagian utama :
    1. inisialisasi 
     menentukan variabel awal untuk penglangan nya 

    2. kondisi terminasi
     memberhentikan pengulangannya 
    
    3. inkrement / decrement 
     untuk pengulangannya bisa maju atau mundur 

     biasanya variabel untuk for itu menggunakan huruf i = sebagai index  ( $i )
     dan dibatasi dengan { kurung kurawal } sebagai sintak  echo untuk menampilkan pada halaman 

2. while 
dalam while ada tiga bagian:
    1. inisialisasi 
     menentukan variabel awal untuk penglangan nya 

    2. kondisi terminasi
     memberhentikan pengulangannya 
    
    3. inkrement / decrement 
     untuk pengulangannya bisa maju atau mundur 


3. do.. while 
4. foreach => pengulangan khusus array 

*/

/* cara menggunakan sintak for
for ( $i = 0; $i <5; $i++ ) {
echo "Hello World! <br> ";
}
*/


/*
cara menggunakan sintak while 
$i=0;
while($i < 5 ) {
    echo "hello world! <br><hr>";
$i++;
}
*/


/*
cara menggunakan sintak do.. while 
$i = 0;
do {
    echo "welcom to world! <br><hr>";
$i++;
} while ( $i <5 )
*/

?>
<!-- pembehref="stylelajaran control flow pengulangan  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTS-8">
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0" >
                <?php
                    for ( $i = 1; $i <= 3; $i++ ) {
                    echo "<tr>";

                    for ( $j = 1; $j <= 5; $j++ ) {
                        echo "<td>$i , $j</td>";
                    }
                    echo "</tr>";
                
                
                }
                
                ?>
        </table>
    </body>

</html>


<?php 
   echo "<br><br><br>"; 
    ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTS-8">
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
                <?php
                    for ( $i = 1; $i <= 5; $i++ ) {
                    echo "<tr>";

                    for ( $j = 1; $j <= 10; $j++ ) {
                        echo "<td>$i , $j</td>";
                    }
                    echo "</tr>";
                
                
                }
                
                ?>
        </table>
    </body>


<?php e  cho "<br><br><br><hr>"; ?> 

<!-- kurawal buka { bisa diganti dengan : titik2 , kurung kurawal tutup } bisa digandi dengan endlalu nama boll nya seperti endfor; -->
 <!-- apa bila saat didalam sintak php echo kita menuliskan suatu variabel maka < ?php echo bisa diganti dengan  < ?=   -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="10" >
        <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
            <tr>
                <?php for ( $j = 1; $j <= 5; $j++ ) : ?>
                <td> <?= "$i, $j"; ?> </td> 
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </table>
    </body>
</html>
