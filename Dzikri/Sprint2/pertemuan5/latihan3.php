<!-- Penjelasan Kode PHP dan HTML:
1. Deklarasi Array di PHP: -->
<?php
$mahasiswa = [
    ["dzikri rabbani", "043040023", "teknik informatika", "adzri2705@gmail.com"],
    ["hamazu", "034040027", "teknik farmasi", "hamazu83@gmail.com"],
    ["yoshida", "056040032", "teknik pertanian", "yoshida27@gmail.com"]
];
// Array Multidimensi:
// -Di sini, $mahasiswa adalah sebuah array multidimensi yang berisi beberapa array kecil di dalamnya.
// -Setiap array kecil tersebut mewakili data seorang mahasiswa, dengan elemen-elemen sebagai berikut:
// -Nama Mahasiswa
// -NRP (Nomor Registrasi)
// -Jurusan
// -Alamat Email (Gmail)
?>

<!-- 2. Struktur HTML: -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<!-- 3. Penggunaan PHP di dalam HTML: -->
<?php foreach( $mahasiswa as $mhs ): ?>
<ul>
   <li>Nama : <?= $mhs[0] ;?></li>
   <li>NRP : <?= $mhs[1] ;?></li>
   <li>Jurusan : <?= $mhs[2] ;?></li>
   <li>Gmail : <?= $mhs[3] ;?></li>
</ul>
<?php endforeach; ?>

<!-- 
=>Pengulangan foreach:

-Kode PHP ini menggunakan struktur kendali foreach untuk melakukan iterasi (perulangan) melalui setiap elemen (array kecil) 
di dalam array $mahasiswa.
-Setiap elemen array $mahasiswa disimpan sementara dalam variabel $mhs.
-Mencetak Data dengan PHP:

-Di dalam setiap iterasi foreach, dibuatlah sebuah daftar tidak terurut (<ul>), yang berisi daftar item (<li>) 
 untuk setiap atribut mahasiswa:
-Nama: Dicetak dengan <?= $mhs[0]; ?> (nama mahasiswa).
-NRP: Dicetak dengan <?= $mhs[1]; ?> (NRP mahasiswa).
-Jurusan: Dicetak dengan <?= $mhs[2]; ?> (jurusan mahasiswa).
-Gmail: Dicetak dengan <?= $mhs[3]; ?> (email mahasiswa).
-Sintaks <?= ... ?>:

-Ini adalah cara singkat untuk mencetak output di PHP, setara dengan <?php echo ...; ?>. -->

</body>
</html>
<!-- 4. Hasil Akhir:
Ketika kode ini dijalankan, akan menghasilkan daftar mahasiswa yang berisi nama, NRP, jurusan, dan email untuk setiap mahasiswa yang ada di array $mahasiswa.
Setiap mahasiswa akan ditampilkan dalam sebuah daftar yang terpisah (<ul>), sehingga terlihat rapi dan mudah dibaca. -->