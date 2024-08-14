<!--                   CONTROL FLOW / STRUKTUR KENDALI 
o> Yang akan kita pelajari adalah :
    1. Pengulangan = Berguna ketika kita ingin mengerjakan sebuah blog program tanpa harus menulis ulang scriptmya.
        - for
        - while
        - do-while
        - foreach
    2. Pengkondisian
        - if.. else
        - if.. else if.. else
        - ternary
        - switch
-->

<?php
/* Pengulangan / Looping
    o> 4 Jenis Pengulanagan
        - for
        - while
        - do-while
        - foreach
*/

// Emplementasi "for
/* di dalam for ada 3 bagian yang harus difamahi :
    1. Inisialisasi --> Menentukan variable awal untuk pengualangannya.
    2. Kondisi terminasi --> untuk menghentikan pengulangannya 
    3. Increment / Decrement --> Supaya pengulangannya bisa maju atau mundur
*/
// for( $i = 0; $i < 5; $i++)
/* cara baca
 - $i = 0 ini yang disebut dengan "inisiaisasi" dan nilai awal biasanya kalau ndak 0 ya 1.
 - $i < 5 ini adalah kondisi terminasi yang artinya kita ingin pengulangannya sebanyak 5 kali. dan bacanya. selama nilai variable lebih kecil dari 5 maka pengulangan terus dilakukan.
 - $i++ Increment Ini adalah operasi yang terjadi setelah setiap iterasi loop. ++ adalah operator increment yang artinya menambah nilai $i sebanyak 1. Jadi setelah setiap iterasi, jika $i sebelumnya adalah 0, setelah iterasi pertama $i akan menjadi 1, kemudian 2, 3, 4, dan akhirnya setelah iterasi kelima, $i akan menjadi 5, pada titik ini kondisi $i < 5 tidak lagi terpenuhi dan loop akan berhenti..
*/
for( $i = 0; $i < 5; $i++) {
    echo "Hello World!<br>";
}

echo "<br><br>";

// Contoh While :
$i = 0;
while( $i < 8) {
echo "Salam Bro!<br>"; $i++; // disini increment nya berada di setelah echo !! .Susunannya berbeda dengan Loop for. harus sertakan increment biar tidak masuk ke looping forever.
}

// Contoh Do While :

$i = 10;
do{
    echo "Semangat Bro!<br>"; $i++; //ini jalankan perintah dulu
} while ($i < 15 ); // baru dicek kondisinya. ini kebalikan dari while.

// do while kalau hasilnya false maka akan tetap dijalankan sekali. kalau while tidak akan dijalankan bila false, karena dicek dulu kondisinya.
?>
<hr>
<!-- Pratek pengulanagn praktis agar tampak di web -->
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
 </head>
 <body> -->
<!-- Membuat sebuah tabel, 3 baris dan tiap baris ada 5 kolom -->
<table border="1" cellpadding="10" cellspacing="0">
<!-- Kalau pakai cara manual akan tertulis panjang dan ribet, maka kita bisa pakai looping -->
 <?php
    for( $i = 1; $i <= 3; $i++ ) {
        echo "<tr>";
        for( $j = 1; $j <= 5; $j++ ) {
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
 ?>
</table>
<hr>
<h5>Praktek</h5> <br>
<table border="1" cellpadding="10" cellspacing="0">
<?php
    for( $a = 1; $a <= 3; $a++) {
        echo "<tr>"; //perhatikan titik koma!!!
            for($b = 1; $b <= 5; $b++) {
                echo "<td>$a,$b</td>";//perhatikan titik koma!!!
            }
        echo "</tr>";//perhatikan titik koma!!!
    }
?>
</table> 
<!-- di atas adalah contoh yang masih memasukkan tag php dalam html, harusnya dipisah saja/tag phpnya dikuluarhkan dari HTML nya. -->
<hr>
<h4>Contoh pakai sintaks template php</h4>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $f = 1; $f <=5; $f++ ) : ?>
        <tr>
            <?php for( $g = 1; $g <= 5; $g++ ) : ?>
                <td><?php echo "$f,$g"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    <!-- agar tidak bingung, {} ini bisa diganti dengan { = : dan } = end ... (bisa for, if, dll menyesuaikan) 
    echo juga bisa diganti < ?= lalu diisi
    -->
</table>
 </body>
 </html>
 <hr>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>

    <style>
        .warna-baris {
            background-color: blue; 
        }
    </style>
 </head>
 <body>
 </table> 
<!-- di atas adalah contoh yang masih memasukkan tag php dalam html, harusnya dipisah saja/tag phpnya dikuluarhkan dari HTML nya. -->
<hr>
<h4>Contoh Pengkondisian dalam tabel</h4>
<table border="1" cellpadding="10" cellspacing="0">
    <!-- Memberikan pengkondisian warna pada tabel -->
    <?php for( $f = 1; $f <=5; $f++ ) : ?>
    <?php if($f % 2 == 1) : ?>
        <tr class="warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
            <?php for( $g = 1; $g <= 5; $g++ ) : ?>
                <td><?php echo "$f,$g"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    <!-- agar tidak bingung, {} ini bisa diganti dengan { = : dan } = end ... (bisa for, if, dll menyesuaikan) 
    echo juga bisa diganti < ?= lalu diisi
    -->
</table>
 </body>
 </html>
