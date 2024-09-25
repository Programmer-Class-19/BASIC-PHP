<?php 
echo 123;
echo "<br>";
echo -1234; //integer negatif

echo "<br>";
echo "syauqie"; 
echo "<br>";
echo 'billah;';

echo "<br>";
echo "true";
echo "<br>";    
echo "false";

echo "<br>";
$nama = ["syauqie",123, true, "mauk"];

echo "<br>";
$nama [] = "radhit";
var_dump($nama);

class syauqie {
    public  $nama = "syauqie",
            $sekolah = "pit jogja",
            $asal = "mauk";
}

$syauqie1 = new syauqie()



?>

<?php 
foreach ($nama as $n) { ?>
    <?php echo $n; ?>
<?php } ?>
?>


<br>
<br>
<?php 
$ex = NULL;
echo $ex;
?>
<br>
<br>
<?php
$file = fopen("ulangan1.php", "r"); // Membuka file dan menyimpan resource
if ($file) {
    // Operasi pada file
    fclose($file); // Menutup file
}
echo $file;
?>  

<?php 

$nama = fopen("ulangan2.php", "r"); 
if ($nama) {
    fclose ($nama);
}
?>
<br>

<?php 
$a = 1;
$b = 4;
$c = $a * $b;

var_dump ($c < 5 || $c % 2 == 1);
?>

<br>
<br>

<!-- tipe data adalah nilai yang akan disimpan dalam variable -->
<!-- variable adalah sebuah simbol untuk menyimpan tipe data atau nilai -->
<!-- validasi data maksudnya adalah untuk memastikan bahwa kode sudah sesuai harapan blm -->
<!-- optimasi memori mksdnya adalah untuk mengoptimalkan penggunaan karena berbeda tipe data berbeda pengoprasionalan memory -->
<!-- operasi yang tepat -->
<?php $x = 15 - 3; 
echo $x;
?>

<?php 
$a = 5;
$b = 10;

$a = ($a > $b);
var_dump  ($a);
?>
<br>
<?php 
$a = 5;
$b = 10;

$a += ($a < $b) ? 2 : 0;
echo $a;
?>
