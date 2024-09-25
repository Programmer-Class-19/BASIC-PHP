<?php
// Pengkondisian / Percabang
// if else
// if else if
// ternary
//switch

/* Berikut Contog IF */
//Contoh if true
$a = 10;
if ( $a < 20) {
    echo "Contoh perbandingan benar";
}
echo "<hr>";
?>
<?php
/* Berikut Contoh IF else */
$b = 30;
if ($b < 20) {
    echo "Contoh perbandingan yang benar";
}  else {
    echo "Contoh perbandingan yang salah";
}
?>
<hr>
<?php
/* Berikut Contoh if else if else */
$c = 20;
if ($c < 20) {
    echo "Contoh perbandingan yang benar";
}  else if ($c == 20) {
    echo "Contoh perbandingan yang sama";
}else {
    echo "Contoh perbandingan yang salah";
}
?>