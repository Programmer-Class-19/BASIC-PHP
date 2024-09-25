<?php

// menggunakan sintak php 
echo "Assalmu'alaikum";
echo "<br><br><br>";



print_r ("Wa'alaikumsalam");
echo "<br><br><br>";



print "Heloo World!";
echo "<br><br><br>";



var_dump ("Saya Mas'ud");
echo "<br><br><br>";



echo true;
echo "<br><hr><br>";



echo false;
echo "<br><hr><br>";




for ( $a = 100; $a > 91; $a--) {
    echo $a;
}
echo "<br><br><br>";



$b = 0; 
while ( $b < 10 ) {
    echo "HEllO WORlD!<br>";
$b++;
}
echo "<br><br><br>";



// $c = 10;
// do {
//     echo "Assalamu'alaikum : Wa'alaikum salam<br>";
// $c++;
// } while ( $c < 15 )


function menyapa ($name = "mas'ud",$usia= 20) {
return "HEllO $name, $usia DAN saya dari NTB";
}

echo menyapa();
echo "<br><br><br>";



$mahasiswa = array("UI","UGM","UNSA","UNRAM");
var_dump ($mahasiswa);
print_r($mahasiswa);
echo "<br><br><br>";





$fruits = ['Apple', 'Banana', 'Cherry', 'Date'];

echo "Fruits List:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


















































?>