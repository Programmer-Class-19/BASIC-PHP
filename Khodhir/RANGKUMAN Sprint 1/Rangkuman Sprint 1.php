<!--
<< VARIABLE & TIPE DATA >>

>> PENGERTIAN

    - Suatu "wadah" yang digunakan untuk menyimpan suatu data atau nilai.
    - Variable bisa menyimpan data nama, nomor, kalimat, dan lainnya.

>> PERATURAN

    - diawali dengan tanda "$", misal: $nama.
    - diawali dengan huruf atau underscore, misal: $_nama
    - tidak boleh diawali dengan angka.
    - tidak boleh ada karakter khusus seperti *, /, &, % dan lainnya selain "_" (underscore).
    - bersifat case-sensitive, maka nama variable "nama" dan "Nama" adalah variable yang berbeda.
    - gunakan nama variable yang pendek dan jelas, misal: $nama_lengkap. ex: mau buat variabel berisi alamat maka variabelnya ditulis dengan - $alamat -.

<< JENIS JENIS TIPE DATA >>
    1. String - bentuk teks yang diapit oleh dua tanda petik.
    2. Integer - bilangan bulat yang dapat berupa positif, negatif, atau nol.
    3. float - bilangan yang berisi angka decimal.
    4. Boolean - hanya dapat menyimpan nilai true (benar) atau false (salah).
    5. Array - kumpulan data yang dibungkus dalam sebuah tanda kurung siku.
    6. Object - kumpulan informasi yang dibungkus dalam sebuah objek.
    7. Null - membuat variable yang kosong isinya.
-->

                                    <!-- PRAKTEK STRING -->
 
<?php

// String adalah tipe data yang bentuknya text dan penulisannya diletakkan ditengah-tengah tanda petik. 

$alamat = "Jalan Ciptonegaran Rt 05 Rw 06";
$nama = 'budi'; //ini contoh pakai petik 1 (').  
// di bawah ini string denga isi tag html.
$alamat = "Jalan Ciptonegaran<br>Rt 05 Rw 06";
/*
Note :
 - tanda petik menjadi tanda bahwa kata yang ada di dalamnya sebagi "string".
 - kita boleh mengisi apapun bebas, bahkan menulis tag html itu boleh, sperti <br> untuk memindahkan baris.
 - di akhir statment harus diakhir dengan (;)
*/
?>

<br><br><hr>

                                    <!-- PRAKTEK Integer dan Float -->

<?php
/* NOTE INTEGER : 
    - Integer adalah tipe data dalam bentuk angka yang merupakan bilangan asli atau bilangan bulat ex. 1, 15, 20,3666, 20000 dst.
    - integer tidak perlu tanda petik.
*/

//Contoh tipe data integer.
$total = 250;
$harga = 25500;

/* NOTE Float : 
    - Float adalah tipe data dalam bentuk angka yang merupakan bilangan desimal ex: 3,5/10,5/12,1 dst. disebut juga sebagai data "double".
    - gunakan tanda titik ( . ) untuk menggantikan koma ( , ) dalam penulisan desimal tsbt.
*/

//Contoh tipe data Float.
$hasil = 3.6;
$total = 4455.678;
?>

                                   <!-- PRAKTEK BOOLEAN -->
<?php
 /* NOTE Boolean : 
    - Float adalah tipe data yang memiliki dua buah value atau isi, yaitu true dan false, atau 0 dan 1
    - Digunakan untuk memeriksa ketersediaan atau memeriksa nilai kebenaran pada sebuah data.
*/   

//Contoh Boolean

$isRaining = true;  // Menginisialisasi variabel dengan nilai true
$isSunny = false;   // Menginisialisasi variabel dengan nilai false

if ($isRaining) {
    echo "Jangan lupa bawa payung!";
} else {
    echo "Cuaca cerah, nikmati harimu!";
}
?>

                                   <!-- PRAKTEK ARRAY -->
<?php
/* NOTE Array :
    - Array adalah tipe data yang menyimpan banyak isi di dalam sebuah variable.
    - Array seperti sebuah tas yang didalamnya bisa saja berisi bolpen, buku, penggaris dan lainnya.
*/
// Contoh Array:

$tas = array("pulpen","buku","penggaris"); // memakai tanda petik karena ini strang, lain kalau isinya angka dsb.
$buah = array("apel","anggur","pisang");

/* Array memiliki :
    - index
    - nilai/value.
*/
// Contoh:
$nama_buah = array("Mangga","Apel","Jeruk"); //bila kita ingin memanggil salah satu dari data tadi dengan :

echo $nama_buah[0]; // akan muncul "Apel" ; dan array punya nomor urut dan dimulai dari "0".
echo $nama_buah[2]; // akan muncul "Jeruk".

//beberapa gaya penulisan Array:

$array1 = array(1=>"Jeruk", 3=>"Jambu");
$array2 = array("nama"=>"Budi");
$array3[1] = "Budi";
$array3[3] = "Ayu";

/* kita bisa menetapkan nilai ke indeks tertentu dalam array menuliskan
 - (indeks) => nilai.
 - $array3[3] = "Ayu"; artinya kita mengunci nilai ayu pada index no. 3. jadi kalau mau panggil ayu cukup kita ketik  - echo $array3[3]; - seperti ini dibut dengan assign (penugasan).
*/



?>