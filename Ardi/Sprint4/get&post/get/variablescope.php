<?php
//Variable Scope / lingkup variable
$a = 12;
// $l = 4;

function tampilA() {
    // global $a;
    $a = 24;
    echo $a;
}

tampilA();
echo "<br>";
echo $a;

?>