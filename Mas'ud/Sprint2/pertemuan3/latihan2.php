<?php
// 2. conntol flow pengkondisian / percabangan 
// ada 3 jenis pengkondisian:
//    1> if  else 
//    2> if    else if    else
//    3> ternary
//    4> switch


$m = 20;
if ( $m < 20 ) {
    echo "benar";
}  

else if ( $m == 20 ) {
    echo "binggo!";
}

else { 
    echo "salah";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ltihan 2</title>
<style>
.warna-baris {
    background-color: blue;
}
</style>
</head>
<body>
<p>cara kedua</p>

<table border="5" cellpading="10" cellspacing="0" width ="30%"  >
<?php for ($a = 1; $a <= 7; $a++ ) : ?>
<?php  if ($a % 2 == 1 ) : ?>
    <tr class="warna-baris">
<?php else : ?>
    <tr>
<?php endif;  ?>
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