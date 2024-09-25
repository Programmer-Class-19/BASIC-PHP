<?php
/*

1. Control flow Pengulangan 
4 jenis pengulangan :
    1. for 
    2. while 
    3. do.. while      
    4. foreach (pengulangan khusus array)

*/



// contoh Pengulangan  for :
//   1. pengulangan for 
//   pada for terdapat 3 bagaian :
//   1> inisialisasi ( menentukan variabel awal untuk pengulangan )
//   2> kondisi terminasi ( memberhentikan pengulangan )
//   3> increment / decrement ( supaya pengulangannya bisa maju atau bisa mundur )
for ( $a = 0; $a < 5; $a++ ) {
echo "Assalamu'alaikum<br>";

} 

print "<br><br><br><br><br>";


// contoh pengulangan while 
//   2. pengulangan while :
//    pada pengulangan while inisialisasi nya berada diluar while 
//    dan decrement / increment nya terletak sebelum looping tutup  
$b = 0; 
while ( $b < 7 ) {
    echo "Asaalamu'alaikum 2<br>";
$b++;
}            // dan apabila dalam programnya kita tidak menetapkan increment nya, maka loopingnya tidak akan berhenti 

print "<br><br><br><br><br>";



// contoh pengulangan do.. while 
// 3. pengulangan do. while 
$a = 0;
do {
    echo "<br>Assalamu'alaikum 3";
$a++;
} while ( $a < 3);


print "<br><br><br><br><br>";

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ltihan 1</title>
</head>
<body>
<p>cara pertama</p>

<table border="5" cellpading="10" cellspacing="0" width ="30%">
<?php
for ($a = 1; $a <= 3; $a++) {

    echo "<tr>";
    for ( $e = 1; $e <= 5; $e++) {
         echo "<td>$a, $e</td>";
    }
    echo "</tr>";
}

?>
</table>

</body>
</html>


<?php
print "<br><br><br><br><br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ltihan 1</title>
</head>
<body>
<p>cara kedua</p>

<table border="5" cellpading="10" cellspacing="0" width ="30%"  >
<?php for ($a = 1; $a <= 3; $a++ ) : ?>
    <tr>
        <?php  for ($e = 1; $e <= 5; $e++)  : ?>
            <td><?= "$a, $e"; ?></td>
        <?php endfor?>
    </tr>
<?php endfor ?>


</table>

</body>
</html>





<?php
print "<br><br><br><br><br>";
?>