<!-- sebuah tempat untuk menyimpan sebuah nilai -->
<!-- nilainya tidak dapat berubah apabila telah kita set-->
<!-- define() dan const -->
<!-- define() harus di simpan di luar class -->
<!-- const bisa di simpan di dalam class -->
<!-- magic constant 
        1. __LINE__
        2. __FILE__
        3. __DIR__
        4. __FUNCTION__
        5. __CLASS__
        6. __TRAIT__
        7. __METHOD__
        8. __NAMESPACE__ -->
<!-- tanpa $ adalah constant -> echo NAMA; -->
<!-- memakai $ adalah variabel -> echo $NAMA; -->

<?php
// define("nama", "nilai");
define("ME", "Elhaqq");

echo ME;

echo "<br>";

const USIA = 20;
echo USIA;

echo "<hr>";


?>
