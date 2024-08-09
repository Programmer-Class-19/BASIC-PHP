<?php
$x = 10;
$y = 20;

function tampilX() {
    global $x;
    echo $x;
    global $y;
    echo $y;
}

tampilX();

?>