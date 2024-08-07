<!--  Rabu, 07/08/24  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    
<!-- Membuat tabel dengan php -->
 <!-- Dan ini adalah contoh mau tampilin tampilin tag HTML tp dalam tag PHP (harusnya dikeluarin aja!) -->

<table border="1" cellpadding="10" cellspacing="0">
    <?php 
        for( $i = 1; $i <= 3; $i++) { // "3" disini artinya tabelnya mau dibikin 3 baris
            echo "<tr>"; //ini adalah contoh tag HTML yang ada di PHP
            for( $j = 1; $j <= 5; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<!-- contoh tabel pakai tag HTML dan tag PHP dipisah -->

<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 3; $i++ ) { ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                <td> <?php echo "$i, $j" ?> </td>
            <?php } ?>
        </tr>
    <?php } ?>
<!-- dalam halaman tu boleh ada tag php banyak
< ?php for( $i = 1; $i <= 3; $i++ ) { ?>
 ---- disini bisa diisi tag lain ex. tr/ td
< ?php } ?>

//tips biar gak bungung kurung kurawal bisa diganti seperti berikut

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td> <?php echo "$i, $j" ?> </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
-->
</table>


</body>
</html>