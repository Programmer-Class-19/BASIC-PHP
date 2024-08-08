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

<!-- Kamis, 8/8/24 -->
// //Prngkondisian / percabangan
// if else
// if else if else
// ternary
// switch 

<< if else >>
<div>
<?php
if( $x < 20 ) {
    echo "benar";
    // maksudnya dari fungsi "if", jika yang dalam if itu true/benar maka lakukanlah apa yng ada di echonya!
} else {
    echo "salah";
    // ini ditambahkan untuk menambahkan ketrangan bahwa kalau tidak dengan true maka tampilkan yg ini
}
?>
</div>

<!-- Melakukan Pengkondisian pada Tabel -->


<table border="1" cellpadding="10" cellspacing="0">
<?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <!-- ini harus dibuat sylenya dulu di tag <header> -->
            <tr class="warna-baris"> 
        <?php else : ?>
            <tr>
               <?php endif ?>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td> <?= "$i, $j" ?> </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?> 

</table>

<!-- Function -->
<div>
<?php
//date
//    echo date("l, d-M-Y");

//time
// echo time()
// kalau cuman ketik di atas aja maka akan memunculkan UNIX Timestamp / EPOCH time - asal waktu di dunia IT (detik yang sudah berlalu sejak 1 januari 1970)

// mengetahui 100 hari lagi hari apa

echo date("l", time()+172800);

?>
<!-- kita juga bisa menghitngnya dengan menuliskan operasi matematika dalam functionnya -->

<br><br>

<?php
echo date("D M Y", time()+60*60*24*100);
?>

<br><br>

<?php
// <<mktime>>
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// urutannya: jam,menit,detik,bulan,tanggal,tahun

echo mktime(0,0,0,1,20,2001)
//hasil yg muncul adalah 1028152800 = ini adlah etik yng sudah berlalu dari 1 januari 1970 - tgl lahir

// cara agar tau
?>

<br><br>

<?php
// setelah kita tau detik dri lahir kita ke 1970, lalu ketukkan : 1028152800

echo date ("l", mktime(0,0,0,1,20,2001))
//hasilnya adalah Thursday
?>

<br><br>

<?php
//strtotime
echo date("l", strtotime ("jan 20 2001"))
?>
</div>


<!-- Function/ User-Defined Function  -->

<?php
function salam($waktu = "Datang", $nama = "Admiin!") {
    return "Selamat $waktu, $nama";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?php echo salam()?></h1>
    <!-- 
    Kasusnya apabila lupa memberikan parameter atau argumen, maka kita bisa  berikan paramater difault aja
    -->
</body>




>

</body>
</html>