                            <!-- SINTAKS -->
<!-- 
Sintaks adalah aturan dan struktur yang menentukan bagaimana kode harus ditulis agar dapat dimengerti dan dijalankan oleh komputer. - simpelnya cara penulisan dasar dari php -
Setiap bahasa pemrograman memiliki aturan sintaks yang berbeda. Jika sintaksnya salah, program tidak akan berjalan atau akan menghasilkan kesalahan.
-->
>> SINTAKS PHP <<
<br><br>
<?php
// dalam sintak php itu seperti sintaks html yaitu spasi tidak pengaruh.

/* --> Standar Output
>> Pengertian :
Standar output adalah sebuah perintah di php untuk menampilkan sesuatu di layar.

>> Sintaksnya :
1. echo, print --> untuk mencetak tulisan atau isi variabel dsb.
2. print_r --> khusus mencetak isi array.
3. var_dump --> untuk melihat isi dari variabel.
    - nomor 2 & 3 ini biasanya untuk dibugging. / mencari kelasalah tulisan atau pingin tau isi dari variabel.
*/

// contoh "echo"
echo "Khodhir (contoh echo)"; // ini yang akan banyak digunakan
echo "<br>";
print "Khodhir (contoh print)";
echo "<br>";
print_r("Khodhir (contoh print_r)"); // unuk yg ini harus dalam kurung.
echo "<br>";
var_dump("Khodhir (contoh var_damp)")

/* Note untuk echo
    - Bisa untuk menuliskan angka dan ini tidak perlu tanda petik. ex - echo 35156;
    - jangan lupakan TITIK KOMA !!!!
    - echo bila hendak memunculkan string, maka harus diapit di tanda petik dua / satu.
    - "echo" adalah sebuah perintah (fungtion). jadi bukan sebuah variabel. dan kata setelahnya adalah nilai atau string
*/
?>
 <br><hr>
 >> PENULISAN SINTAKS PHP <<
 <br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<!-- Contoh 1 tag php dala, HTML -->
<h4> > contoh tag php dalam html<h4>                          
    <h1>Halo, Selamat datang <?php echo "Khodhir!"; ?></h1>

<!-- Contoh 1 tag html dala, php -->    
<h4> > contoh tag html dalam php<h4>

<?php echo "<h1>Halo ini tag html dalam php</h1>";?> 
<!-- tapi untuk yang contoh ini tidak disarankan! -->
</body>
</html>

<!-- NOTE tambahan untuk Variabel dan Tipe data by Sandhika Galih
 - dalam string  ada konsep "interpolasi" : untuk mengecek apakah dalam string ada sebuah variabel atau tidak. bila ada maka yng ditampilkan adalah isi variablenya.
-->
<hr>
>> OPERATOR <<
<!-- NOTE operator
 >> Devinisi
    Operator dalam bahasa pemrograman adalah simbol atau fungsi yang digunakan untuk melakukan operasi tertentu pada satu atau lebih operand (variabel atau nilai). 
>> Kategori operator : 
   1. Operator Aritmatika: Digunakan untuk melakukan operasi matematis, seperti penjumlahan (+), pengurangan (-), perkalian (*), dan pembagian (/).

   2. Operator Perbandingan: Digunakan untuk membandingkan nilai, seperti sama dengan (==), tidak sama dengan (!=), lebih besar dari (>), atau lebih kecil dari (<).

   3. Operator Logika: Digunakan untuk operasi logika, seperti AND (&&), OR (||), dan NOT (!).

   4. Operator Penugasan: Digunakan untuk menetapkan nilai ke variabel, seperti (=), serta operator penugasan gabungan seperti (+=, -=).

   5. Operator Bitwise: Digunakan untuk melakukan operasi pada level bit, seperti AND (&), OR (|), XOR (^), dan NOT (~).
-->

<br><br>
-  Operator Aritmatika
<br>
<?php
// -Aritmatika.
// = - * / %

echo 5+5 . " adalah contoh untuk aritmatika penjumlahan 5+5 yang bukan variable.";
echo "<br>";
$x = 20;
$y = 5;

echo $x * $y . " adalah contoh untuk aritmatika perkalian 20 * 5 yang menggunnakan variabel dulu.";
?>
<br><br>
-  Operator assignment / Penugasan
<br>
<?php
/* NOTE Assignment
  - Assignmnt adalah proses untuk menyimpan nilai ke dalam suatu variabel.
  - Operator assignment yang biasanya adalah tanda sama dengan (=).
  - Melalui assignment, kita memberikan atau mengikat suatu nilai tertentu ke sebuah variabel, sehingga variabel tersebut bisa digunakan kembali di bagian lain dari program.
  - Opertaor assignment yang lain ada :(+=), (-=), (/=), (%=),(.=).
*/
$x = 1;
echo $x."<br>"; //awalnya akan muncul 1, namun kalau kita tuliskan variabel yang sama dengan nilai berbeda :

// $x = 5;
// echo $x . "<br>"; // angka 1 tidak muncul karena tertindih oleh angka 5 karena nama variabelnya sama.
// Kita coba berikan operator assignment.
$x += 5; //kita tambahi operator assignment (+=)
echo $x; // maka nilai pada variabel x ditambah menjadi 6. jadi nilai lain di variabel yang sama akan ditambahkan, atau sesuai operator assignment yang digunakan. dst.
?>
<br><br>
-  Opertaor Perbandingan
<!-- 
    - Operator dari perbandingan adalah < , > , <= , >= , == , != .
    - Biasa dipakai untuk pengkondisian.
-->
<br>
<?php
//Mari kita coba praktek menggunakan standart output var_dump.
var_dump(1 < 5); echo "= ini contoh boolean true dri operator perbandingan dengan contoh sederhana<br>"; // cara bacanya: apakah 1 lebih kecil dari 5? maka akan tampil bool(true).
//  -- conoth kasus --
var_dump(1 == "1");echo "ini hasil cek dengan operator perbandingan (==).<br>"; // cara bacanya : apakah 1 sama dengan string 1?. maka jawabannya psati true padahal 2 nilai itu beda tipe data yang satu integer dan yang satu adalah string. karena operator perbandingan ini (==) tidak mengecek tipe datanya, tp hanya mengecek nilainya.

/* untuk cek tipe datanya juga. maka kita mnggunakan operator identitas.
dan jenisnya ada 2 = (===) dan (!==).
*/
var_dump(1 === "1"); echo "ini hasil cek operator identitas (===)<br>"; //pasti jawabannya falese karena operator ini tidak hanya cek nilai tapi juga cek tipe datanya.
?>
<br>
- Operator Logika / Pengkondisian
<br>
<?php
/* Note untuk Operator logika
- Biasa dipakai untuk pengkondisian
- jenis operator logika: DAN/(&&) , OR/(||) , NOT/(!) .
*/
//Praktek :

$x = 10;
var_dump($x < 20 && $x % 2 == 0 );echo "ini contoh logika AND (&&)<br>";//2 kondisi perbandingan di samping harus bernilai true kalau pakai operator logika &&
// cara membaca : apakah variable $x (10) lebih kecil dari 20 dan apakah variable $x itu genap.

$a = 5;
$b = 10;
$c = 15;

if ($a < $b && $b < $c) {
    echo "Semua kondisi benar";
} else {
    echo "Salah satu kondisi salah";
}

/* 
1. Inisialisasi Variabel:
    $a diatur ke 5.
    $b diatur ke 10.
    $c diatur ke 15.

2. Pernyataan Kondisi: 
    Program memeriksa apakah $a lebih kecil dari $b dan $b lebih kecil dari $c (menggunakan operator logika &&).

3. Hasil:
    - Jika kedua kondisi tersebut benar (yaitu, 5 < 10 dan 10 < 15), maka program akan menampilkan pesan "Semua kondisi benar".
    - Jika salah satu dari kondisi tersebut tidak benar, maka program akan menampilkan pesan "Salah satu kondisi salah".

Jadi, dalam hal ini, karena semua kondisi benar, outputnya akan menjadi "Semua kondisi benar".
*/
echo "<br>";
// Operator OR/(||) digunakan untuk memastikan setidaknya satu dari kondisi yang diperiksa bernilai True.. -- CONTOH :
$a = 5;
$b = 10;
$c = 15;

if ($a > $b || $b < $c) {
    echo "Setidaknya satu kondisi benar";
} else {
    echo "Semua kondisi salah";
}

/* CARA BACA :
1. Inisialisasi Variabel:
    $a, $b, dan $c diisi dengan nilai 5, 10, dan 15 masing-masing.

2. Pernyataan If:
    Kondisi dalam pernyataan if mengecek dua kondisi:
     - $a > $b (5 lebih besar dari 10), yang menghasilkan false.
     - $b < $c (10 kurang dari 15), yang menghasilkan true.

3. Operator Logika OR (||):
     - Operator ini mengembalikan true jika setidaknya salah satu dari kedua kondisi di atas bernilai true.
     - Karena $b < $c adalah true, keseluruhan kondisi akan bernilai true.

4. Output:
    - Karena salah satu kondisi benar, maka akan menampilkan hasil "Setidaknya satu kondisi benar".

Secara ringkas, kode ini memeriksa dua kondisi, dan karena setidaknya satu dari kondisi tersebut benar, maka ia mencetak bahwa setidaknya satu kondisi benar.
*/

echo "<br>";
// Adapun operator NOT/(!) : Digunakan untuk membalikkan nilai boolean dari suatu kondisi.
// -- Contohnya:

$rainy = false;

if (!$rainy) {
    echo "Cuaca cerah, mari keluar!";
} else {
    echo "Hujan turun, lebih baik di rumah.";
}

/* CARA BACA :
1. <?php - Menandai awal dari kode PHP.
2. $rainy = false; - Mendefinisikan variabel $rainy dan memberinya nilai false, yang berarti saat ini tidak hujan.
3. if (!$rainy) { - Memeriksa kondisi. !$rainy berarti "jika bukan hujan" (karena $rainy adalah false, kondisi ini terpenuhi).
4. echo "Cuaca cerah, mari keluar!"; - Jika kondisi di atas benar, maka pesan ini akan ditampilkan: "Cuaca cerah, mari keluar!".
5. } else { - Jika kondisi if tidak terpenuhi (yaitu, jika $rainy adalah true), maka kode di dalam blok else akan dijalankan.
6. echo "Hujan turun, lebih baik di rumah."; - Pesan ini ditampilkan jika hujan: "Hujan turun, lebih baik di rumah.".
7. ?> - Menandai akhir dari kode PHP.
*/

?>
