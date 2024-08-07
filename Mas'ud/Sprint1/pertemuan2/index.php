<?php

// sintaks komentar php 
// doubel slash untuk komentar satu baris 
// /* slash bintang + bintang slash */ untuk komentyar banyak baris


/* 
sintak php 
==> standar ouput
standar ouput adalah sebuah printah di php untuk menampilkan sesuatu di layar 
macam macam sintak standar ouput : 
echo "untuk mencetak tulisan variabel dll";
print "untuk mencetak tulisan variabel dll";
print_r (" khusus untuk mencetak isi array ");
var_dump ("untuk meliat isi dari variabel");
saat kita mengunakan sintak var_dump berisi teks santri pondok it atau teks apa saja maka yang muncul pada hlaman web nya 
var_dump("santri pondok it")
tampilan pada halaman web :
string(16)"santri pondok it" 
string (16) adalah
string hasil dari cetakan atau tampilan atau isi data.
(16) jumlah huruf serta spasi yang dihasilkan atau ukuran dari string  

saat ingin menampilkan angka pada sintak echo dan print tidak perlu menggunakan "2 tanda kutip" dan ; 
dan saat print_r tidak perlu juga "2 tanda kutip" dan titik koma ;

dalam html disebut atribut - kalau php disebut boolean atau bool
boolean true akan menampilkan  angka 1
boolean false akan menampilkan  halaman kosong 



penulisan sintak php 
1. php di dalam html 
contohnya dalam file html kita membuata sintak php di hedding nya 
<h1>selamat datang di website <?php echo "mas'ud"?> </h1>
!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>selamat datang di website <?php echo $nama; ?> </php></h1>
    </body>
</html>





2. html di dalam php
contonya dalam sintak php menggunakan tag <h1> html untuk membuat judul dalam website 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <?php
          echo "<h1>selamat datang di website MAS'UD</h1";
          ?>
    
    </body>
</html>

tetapi diantara keduaa tersebut disanrankan lebih menngunakan yang pertama 
untuk memisahkan antara html dan php 






variabel dan tipe data 
1. variabel
dalam php untuk menggunakan  variabel cukup menampilkan tanda dolar = $ setelah itu nama variabelnya 
variabel gunanya untuk menampung sebuah nilai 
contoh dalam php ada variabel $nama = "mas'ud";

dan kita tinggal menampilkan variaber nya saja pada sintak php contoh
<?php echo $nama ?> 
maka yangtampil isi dari variabel tersebut

dalam variabel spasi diganti dengan tand  underscore _ 




operator
dalam php terdapat banyak operator antara laian 
operator :
1. artitmatika 
ada + tambah , - kurang , * kali , / bagi , % modulus = hasil sisa dari pembagian , ** eksponensial = menghitung pangkat dari angka 
contoh nya =
<?php
$a = 10;
$b = 5;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$modulus = $a % $b;
$eksponensial = $a ** $b;

echo "Penjumlahan: $penjumlahan\n";    // Output: Penjumlahan: 15
echo "Pengurangan: $pengurangan\n";    // Output: Pengurangan: 5
echo "Perkalian: $perkalian\n";        // Output: Perkalian: 50
echo "Pembagian: $pembagian\n";        // Output: Pembagian: 2
echo "Modulus: $modulus\n";            // Output: Modulus: 0
echo "Eksponensial: $eksponensial\n";  // Output: Eksponensial: 100000
?>


2. . titik = penggabungan string atau concatenation / concat
contoh nya =
$firstName = "Mas'ud";
$lastName = "Ibnu Ismail";
$fullName = $firstName . " " . $lastName;
echo $fullName; // Hasil: "Mas'ud Ibnu Ismail"
tanda kutip dua sebagai spasi " " 


3. assignment adalah operator penugasan 
data operatornya ada : = samadengan , += tambah samadengan , -= kurang samadengan , *= kali samadengan , /= bagi samadengan , %= modulus sama dengan , **= eksponensial assignment  , .= penggabungan string samadengan 
contoh nya =
$x = 10;
echo "Nilai awal x: $x\n"; // Output: Nilai awal x: 10

$x += 5;
echo "Setelah penjumlahan: $x\n"; // Output: Setelah penjumlahan: 15

$x -= 3;
echo "Setelah pengurangan: $x\n"; // Output: Setelah pengurangan: 12

$x *= 2;
echo "Setelah perkalian: $x\n"; // Output: Setelah perkalian: 24

$x /= 4;
echo "Setelah pembagian: $x\n"; // Output: Setelah pembagian: 6

$x %= 4;
echo "Setelah modulus: $x\n"; // Output: Setelah modulus: 2

$x **= 3;
echo "Setelah eksponensial: $x\n"; // Output: Setelah eksponensial: 8

$str = "Hello";
$str .= " World";
echo "Setelah penggabungan string: $str\n"; // Output: Setelah penggabungan string: Hello World


4. perbandingan  ada :
    < lebih kecil dari 
    > lebih besar dari 
    =< samadengang lebih kecil dari 
    => samadengan lebih besar dari 
    == samadengan samadengan 
    !== tidak samadengan 
operator perbangdingan digunakan untuk mengecek nilai 
    contoh nya = 
$a = 5;
$b = 10;
$c = '5';

// Sama dengan
var_dump($a == $b); // bool(false)
var_dump($a == $c); // bool(true)

// Identik
var_dump($a === $c); // bool(false)

// Tidak sama dengan
var_dump($a != $b); // bool(true)
var_dump($a <> $b); // bool(true)

// Tidak identik
var_dump($a !== $c); // bool(true)

// Lebih besar
var_dump($b > $a); // bool(true)

// Lebih kecil
var_dump($a < $b); // bool(true)

// Lebih besar atau sama dengan
var_dump($a >= 5); // bool(true)
var_dump($b >= 5); // bool(true)

// Lebih kecil atau sama dengan
var_dump($a <= 5); // bool(true)
var_dump($a <= $b); // bool(true)



5. identitas 
operator identitas digunakan untuk mengecek tipe data serta nilainya 
    === , !==
contoh nya =
$a = 5;
$b = '5';
$c = 5;
$d = 10;

// Operator Identik (===)
echo "Apakah \$a identik dengan \$b? ";
var_dump($a === $b); // Output: bool(false)

echo "Apakah \$a identik dengan \$c? ";
var_dump($a === $c); // Output: bool(true)

echo "Apakah \$a identik dengan \$d? ";
var_dump($a === $d); // Output: bool(false)

// Operator Tidak Identik (!==)
echo "Apakah \$a tidak identik dengan \$b? ";
var_dump($a !== $b); // Output: bool(true)

echo "Apakah \$a tidak identik dengan \$c? ";
var_dump($a !== $c); // Output: bool(false)

echo "Apakah \$a tidak identik dengan \$d? ";
var_dump($a !== $d); // Output: bool(true)


6.logika 
digunakan untuk pengkondisian 
ada 3 macam 
&& 
|| or
! not 
contoh nya =
$a = 5;
$b = 10;
$c = -5;
$d = 0;

// AND (&& atau and)
echo "Contoh AND:\n";
var_dump($a > 0 && $b > 0); // bool(true)
var_dump($a > 10 && $b > 0); // bool(false)

// OR (|| atau or)
echo "\nContoh OR:\n";
var_dump($a > 0 || $c > 0); // bool(true)
var_dump($c > 0 || $d > 0); // bool(false)

// NOT (!)
echo "\nContoh NOT:\n";
var_dump(!($a > 0)); // bool(false)
var_dump(!($c > 0)); // bool(true)

// XOR (xor)
echo "\nContoh XOR:\n";
var_dump($a > 0 xor $b > 0); // bool(false)
var_dump($a > 0 xor $d > 0); // bool(true)
var_dump($c > 0 xor $d > 0); // bool(false)




*/


$nama = "mas'ud ibnu ismail";

$nama1 = "Lahir Di Sumbawa Tanggal 19 OKTOBER 2004";

echo "assalamu'alaikum. nama saya $nama"; 

echo "<br><br> $nama1 <br><br><br><hr>";







//contoh  operator aritmatika 
$m = 10;
$s = 5;
$d = 3;
$q1 = $m + $s; 
$q2 = $m - $s;
$q3 = $m * $d; 
$q4 = $m / $s; 
$q5 = $m % $d; 
$q6 = $s ** $d; 

//contoh operator penjumlahan atau tambah +
print "$q1<br><hr>";

//contoh operator pengurangan -
print "$q2<br><hr>";

//contoh operator perkalian *
print "$q3<br><hr>";

//contoh operator pembagian /
echo "$q4<br><hr>";

//contoh operator modulus %
echo "$q5<br><hr>";

//contoh operator eksponensial atau perpangkatan **
echo "$q6<br><br><hr>";






// contoh operator penggabungan string atau concat .
$nama_depan = "Maungzy";
// tanda kutip dua adalah ( " " ) spasi antara nama dpan dan belakang 
$nama_belakang = "Ahmad";
$alhasil = $nama_depan ." ". $nama_belakang;

echo "<br><br><br>$alhasil<br><br><hr>";











?>