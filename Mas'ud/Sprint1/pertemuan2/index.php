<?php

/*

tag PHP 
<?php ?>

*/

// tag komentar php satu baris 

/*
tag komentar php banyak baris 
*/

/*
sintak standar ouput 
 1. echo = untuk menampilkan sesuatu atau mencetak sesuatu dilayar ( tulisan angka atau isi dari variabel dll )
 2. print =  untuk menampilkan sesuatu atau mencetak sesuatu dilayar ( tulisan angka atau isi dari variabel dll )    
 3. print_r = untuk mencetak isi array dan string 
 4. var_dump = untuk melihat isi dari variabel

*/


// contoh menggunakan  sintak echo 

echo "Nama saya Mas ' ud <br><br>";

echo 123;

echo "<br><br><br>";


// contoh kegunaan sintaks print

print "Lahir di Sumbawa 19 OKTOBER 2004";

print "<br><br><br>";


// contoh menggunakan  print_r 

print_r ("Santri Pondok IT JOGJA");

print "<br><br><br>";


// contoh menggunakan var_dump

var_dump ("Saya Mas'ud Dari NTB");

echo "<br><br><br>";

// var_dump kegunaannya untuk menampilkan informasi serta tipe data dan 




/*
dalam php ada 2 jenis boolean atau bool

1. boolean true = memiliki nilai atau benar 
2. boolean false = tidak memiliki nilai atau salah 

*/

// contoh boolean true

echo true;

echo "<br><br><hr>";

// contoh boolean false 

echo false;

echo "<br><br><hr>";






//  kita juga bisa mencetak string dengang echo atau print menggunakan "tanda kutip  dua" bisa juga menggunakan  'tanda kutip satu'
// tapi yang lebih bagus menggunakan "tanda kutip 2" 




/* penulisan sintaks php 

1. PHP di dalam HTML 
2.HTML di dalam PHP 

*/

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <!-- 1. PHP di  dalam HTML  -->
    <h4> Assalamu'alaikum Saya Mas'ud <?php echo "Dari Pondok IT "; ?> </h4>
    <br><br><br>

    </body>
</html>


<?php

// 2. HTML di dalam PHP 

echo "<h3>Wa'alaikum Salam <h3>";





/*

variabel dan tipe data 
variabel iconnya adalah $ 
variabel gunanya untuk menampung sebuah nilai  
dalam variabel ada aturan dalam membuat nya : 
namanya tidak boleh di awali  dengan angka tapi boleh menggandung angka
contoh : 
  1. variabel mengandung angka $2nama ini => salah 
  2. variabel mengandung angka $nama2 ini => benar 

dan tidak boleh menggunakan sepasi tapi bisa menggunakan diganti dengan tanda  underscore _ 
contoh : $nama_depan

*/

//contoh menggunakan variabel 

$nama = "Mas'ud";

echo "<br><br> $nama <br><br><br>";

// saat echo mengandung variabel tidak boleh menggunakan  'tanda kutip satu' karna interpolasinya ngk berjalan 






/*

Operator 
Operator dalam PHP ada :



1. Operator Aritmatika 
penjumlahan +
pengurangan -
perkalian *
pembagian /
modulus %   ( Digunakan untuk mendapatkan sisa dari pembagian dua angka )
eksponen atau perpangkatan **



2. operator concatenation / concat 
operator ini adalah operator pengggabung string 


3. operator Assignment
adalah operator penugasan 
macam-macamnya :
( samadengan ) =
( tambah samadengan) +=
( kurang samadengan) -=
( kali  samadengan)  *=
( bagi  samadengan) /=
( modulus  samadengan) %=
( titik samadengan) .=




4. operator perbandingan 
  Sama Dengan ( == )
  Tidak Sama Dengan ( != ) 
  Lebih Besar ( > )
  Lebih Kecil ( < )
  Lebih Besar atau Sama Dengan ( >= )
  Lebih Kecil atau Sama Dengan ( <= )
  Spaceship ( <=> )




5. operator  identitas 
   Operator Identik ( === ) 
   Tidak Identik (!==)   





6. Operator Logika
   AND ( && )
   OR ( || ) 
   NOT ( ! )
   XOR ( Exclusive OR )



*/



// 1.contoh operator aritmatika : 

// 1.penjumlahan
// menggunakan variabel
$a = 2;
$b = 3; 
$c = $a + $b;   

echo $c;

echo "<br><br><br>";

// langsung menggunakan bilangan bulat 
echo 5 + 2;

echo "<br><br><br>";


// 2.pengurangan 
$d = 8;
$e = 3;
$f = $d - $e;

echo $f;

echo "<br><br><br>";

echo 8 - 5;

echo "<br><br><br>"; 


// 3.perkalian 
$g = 3;
$h = 5;
$j = $g *  $h;

echo $j;

echo "<br><br><br>";

echo 5 * 3;

echo "<br><br><br>";


// 4.pembagian 
$k = 9;
$l = 3;
$m = $k / $l;

echo $m;

echo "<br><br><br>";

echo 9 / 3;

echo "<br><br><br>";


// 5.modulus
$n = 7;
$o = 2;
$p = $n % $o;

echo $p;

echo "<br><br><br>";

echo 10 % 4;

echo "<br><br><br>";


// 6.eksponen / perpangkatan 
$q = 7;
$r = 2;
$s = $q ** $r;

echo $s;

echo "<br><br><br>";

echo 10 ** 4;

echo "<br><br><br><hr>";







//2.contoh operator concat / penggabungan 

$nama_depan = "Mas'ud";
$nama_belakang = "Ibnu Ismail";
$namefull = $nama_depan ." ". $nama_belakang;

/* 

Penjelasan:
$nama_depan berisi string "Mas'ud";
$nama_belakang berisi string "Ibnu Ismail";
$namefull menggabungkan $nama_depan, sebuah spasi (" "), dan $nama_belakang menjadi satu string: "Mas'ud Ibnu Ismail".

*/

echo $namefull;

echo "<br><br><br>";

echo "$nama_depan . $nama_belakang<br><br><br><hr>";








//3.contoh operator assigment :
//  1.menggunakan (samadengan)

$number = 10;   // Menetapkan nilai 10 ke variabel $number
$name = "Ali";  // Menetapkan string "Ali" ke variabel $name

echo $number;   // Output: 10

echo "<br><br><br>";

echo $name;     // Output: Ali

echo "<br><br><br>";



// 2.Penambahan dan Assignment (+=):

$number = 5;
$number += 3;  // Sama dengan: $number = $number + 3

echo $number;  // Output: 8

echo "<br><br><br>";


// 3.Pengurangan dan Assignment (-=):

$number = 10;
$number -= 4;  // Sama dengan: $number = $number - 4

echo $number;  // Output: 6

echo "<br><br><br>";




// 4.Perkalian dan Assignment (*=):

$number = 7;
$number *= 2;  // Sama dengan: $number = $number * 2

echo $number;  // Output: 14

echo "<br><br><br>";




// 5.Pembagian dan Assignment (/=):

$number = 20;
$number /= 4;  // Sama dengan: $number = $number / 4

echo $number;  // Output: 5


echo "<br><br><br>";



// 6.Modulus dan Assignment (%=):

$number = 15;
$number %= 4;  // Sama dengan: $number = $number % 4

echo $number;  // Output: 3


echo "<br><br><br>";



// 7.Konkatenasi dan Assignment (.=):

$greeting = "Hello";
$greeting .= " World!";  // Sama dengan: $greeting = $greeting . " World!"

echo $greeting;  // Output: Hello World!

echo "<br><br><br><hr>";








/*  
4. contoh operator perbandingan 

Operator perbandingan pada PHP digunakan untuk 
membandingkan dua nilai, dan hasilnya akan berupa nilai boolean (true atau false).

*/ 
    // 1. operator perbanndingan sama dengan ( == )
    //  Membandingkan apakah dua nilai sama, tanpa memperhatikan tipe data.
    $a = 5;
    $b = "5";
    var_dump($a == $b); // Output: bool(true)


    echo "<br><br><br>";



    // 2. operator perbangdingan Tidak Sama Dengan ( != )
    //   Membandingkan apakah dua nilai tidak sama, tanpa memperhatikan tipe data.
    $a = 5;
    $b = 10;
    var_dump($a != $b); // Output: bool(true)
 
    echo "<br><br><br>";


    // 3. operator perbandingan Lebih Besar  ( > )
    //    Membandingkan apakah nilai kiri lebih besar daripada nilai kanan.   
    $a = "10";
    $b = 5;
    var_dump($a > $b); // Output: bool(true)
  
    echo "<br><br><br>";



    // 4. operator perbangdingan Lebih Kecil ( < )
    //   Membandingkan apakah nilai kiri lebih kecil daripada nilai kanan.
    $a = 5;
    $b = 10;
    var_dump($a < $b); // Output: bool(true)

    echo "<br><br><br>";   
    
    
    
    // 5. operator perbangdingan Lebih Besar atau  Sama Dengan ( >= )
    //   Membandingkan apakah nilai kiri lebih besar atau sama dengan nilai kanan.
    $a = 10;
    $b = 10;
    var_dump($a >= $b); // Output: bool(true)

    echo "<br><br><br>"; 

    
    
    // 6. operator perbangdingan Lebih Kecil atau Sama Dengan ( <= )
    //   Membandingkan apakah nilai kiri lebih kecil atau sama dengan nilai kanan.
    $a = 5;
    $b = 10;
    var_dump($a <= $b); // Output: bool(true)

    echo "<br><br><br>";
    
    
    
    // 7. operator perbangdingan  Spaceship ( <=> )
    /* 
    Operator ini mengembalikan nilai -1, 0, atau 
    1 saat membandingkan dua ekspresi.
    
    -1 jika nilai kiri lebih kecil
    0 jika nilai kiri sama dengan nilai kanan
    1 jika nilai kiri lebih besar
    */
    $a = 5;
    $b = 10;
    echo $a <=> $b; // Output: -1


    echo "<br><br><br><hr>";





// 5. operator identitas 
/*

Operator ini digunakan untuk memeriksa apakah dua nilai 
memiliki nilai yang sama dan tipe data yang sama. 
Jika keduanya sama, hasilnya adalah true; jika tidak, hasilnya false

*/

  // 1. operator identitas identik ( === )
  //   Membandingkan apakah dua nilai sama dan memiliki tipe data yang sama.
  $a = 5;
  $b = "5";
  var_dump($a === $b); // Output: bool(false)

  echo "<br><br><br>";

  $a = "5";
  $b = "5";
  var_dump($a === $b); // Output: bool(true)

  echo "<br><br><br>";


  // 2. operator identitas Tidak Identik ( !== )
  //    Membandingkan apakah dua nilai tidak sama atau tidak memiliki tipe data yang sama.
  $a = 5;
  $b = "5";
  var_dump($a !== $b); // Output: bool(true)

  echo "<br><br><br><hr>";  





// 6. Operator Logika
/*

operator logika digunakan untuk membandingkan 2 inputan dengan tipe data boolean yaitu TRUE atau FALSE 
dan biasanya operator logika ini dipakai untuk kondisi IF atau LOOPING.  

*/

  // 1. operatol logika && ( and )
  //    nilainya akan true jika kedua nya true. Dan akan false jika salah satu atau keduanya false.
  //    contoh 1:
  $a = 100; 
  $b = 50;
  var_dump ($a > $b && $a - 50 == 50 );  // output : bool (true)

  echo "<br><br><br>";

  if ( $a == 100 && $b == 50 ) :  
    var_dump ( $a == 100 && $b == 50 ); 
    echo "<br>assalamu'alaikum";            // if sebagai looping ( pengulangannya ) nya
                                            
  endif;                                    // output : bool (true) dan assalamu'alaikum          


    echo "<br><br><br>";  



    // 2. operator logika  || ( or )
    // nilainya akan true jika salah satu atau kedua variabel true. apabila variabel false maka akan bernilai false. 
    $a = 100; 
    $b = 50;
    var_dump ($a < $b || $a - 50 == 50 );  // output : bool (true)
  
    echo "<br><br><br>";
  
    if ( $a == 100 || $b == 80 ) :  
      var_dump ( $a == 100 || $b == 80 ); 
      echo "<br>assalamu'alaikum";            // if sebagai looping ( pengulangannya ) nya
                                              
    endif;                                    // output : bool (true) dan assalamu'alaikum          
  
  
      echo "<br><br><br>"; 




    // 3. operator logika ! ( not )
    /*   
    
    operator ini digunakan untuk membalikan nilai logika.
    apabila input bernilai true maka output bernilai false. 
    apabila input bernilai false maka ouput bernilai true. 
    
    */
    $a = 100; 
    $b = 50;
    var_dump ( ! $a < $b   );  // output : bool (true)
  
    echo "<br><br><br>";
  
    if ( $b !== 80 ) :  
 
      echo "<br>assalamu'alaikum";            // if sebagai looping ( pengulangannya ) nya
                                              
    endif;                                  // output : bool (false) dan assalamu'alaikum          
  
  
      echo "<br><br><br>";     




      // 4. operator logika xor ( xor )
      /*

      akan bernilai true jika salah satunya true. tapi
      akan bernilai false apabila nilai keduanya true. 
      bernilai false juga jika keduanya false.

      */
      $a = 100; 
      $b = 50;
      var_dump ($a < $b xor $a - 50 == 50 );  // output : bool (true)
    
      echo "<br><br><br>";
    
      if ( $a == 100 xor $b == 80 ) :  
        var_dump ( $a == 100 xor $b == 50 ); 
        echo "<br>assalamu'alaikum";            // if sebagai looping ( pengulangannya ) nya
                                                
      endif;                                    // output : bool (false) dan assalamu'alaikum          
    
    
        echo "<br><br><br>"; 




?>