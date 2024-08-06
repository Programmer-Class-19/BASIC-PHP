<?php

// sintaks komentar php 
// doubel slash untuk komentar satu baris 
// /* slash bintang + bintang slash */ untuk komentyar banyak baris


/* 
sintak php ada 
echo "isi teks";
print "isi teks";
print_r ("isi teks");
var_dump ("isi teks");
saat kita mengunakan sintak var_dump berisi teks santri pondok it atau teks apa saja maka yang muncul pada hlaman web nya 
var_dump("santri pondok it")
tampilan pada halaman web :
string(16)"santri pondok it" 
arti string(16) adalah tipe data dan ukuran dari informasi yangditampilkan oleh var_dump 

saat ingin menampilkan angka pada sintak echo dan print tidak perlu menggunakan "2 tanda kutip" dan ; 
dan saat print_r tidak perlu juga "2 tanda kutip" dan titik koma ;

dalam html disebut atribut - kalau php disebut boolean atau bool
boolean true akan menampilkan  angka 1
boolean false akan menampilkan  halaman kosong 

saat sintak php bisa juga menggunakan tanda kutip '1' dan tanda kutip "2"


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



operator
dalam php terdapat banyak operator antara laian 
operator :
1. artitmatika 
2. + tambah , - kurang , x kali , : bagi , % modulus = hasil sisa dari pembagian , ** eksponensial = menghitung pangkat dari angka 
3. . titik = penggabungan string atau concatenation / concat
4. = samadengan ( assignment ) adalah operator penugasan 
5. perbandingan ada :
    < lebih kecil dari 
    > lebih besar dari 
    =< samadengang lebih kecil dari 
    => samadengan lebih besar dari 
    == samadengan samadengan 
    !== tidak samadengan 
6. identitas 
=== , !==
7.logika 
ada 3 macam 
&& 
|| or
! not 



*/


$nama = "mas'ud ibnu ismail";

echo "assalamu'alaikum. nama saya $nama" 

?>