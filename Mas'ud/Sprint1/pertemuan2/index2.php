<?php

$a = 5;       // Integer
$b = "5";     // String

var_dump($a !== $b);  // Output: bool(true)

echo "<br><br><br>";

$a = "5";       // Integer
$b = "5";     // String

var_dump($a === $b);  // Output: bool(false)


 
echo "<br><br><br>";



$a = 1;       // Integer
$b = "5";     // String

var_dump($a !== $b);  // Output: bool(true)
 
echo "<br><br><br>";





$a = "110";
$b = 10;
echo $a <=> $b; // Output: -1

echo "<br><br><br><hr>";




$a = 1;
$b = 10;
var_dump($a <= $b); // Output: bool(true)

echo "<br><br><br>";


$a = 100; 
$b = 50;
var_dump ($a > $b && $a - 50 == 50 );


echo "<br><br><br>";


?>