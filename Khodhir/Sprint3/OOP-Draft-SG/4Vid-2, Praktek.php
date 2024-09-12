<!-- script dibawah ini adalah contoh sederhana dari pembuatan Class -->
 
<?php
// ternyata bila dalam file php kita, bila tidak ada tag html, maka kita bisa tidak menuliskan tag tutup phpnya.
// ingat ya buat class gak perlu tanda kurung, tapi pakainya kurung kurawal saja. Kalau tanda kurung pakainya untuk object, seperti contoh dibawah :
    class Coba { 


    }

    $a = new Coba(); // artinya kita sudah membuat object berdasarkan blueprint/template dari class Coba di atas.
    $b = new Coba();
    $c = new Coba();

    var_dump($a);
    var_dump($b);
    var_dump($c);
