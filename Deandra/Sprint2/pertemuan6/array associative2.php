<?php
// $mahasiswa =  [ 
//     ["deandra putra", "09868765", "teknik informatika", "deandraputra@gamil.com"],
//  ["doddy", "09868534", "teknik informatika", "doddy@gamil.com"],
//  ["putra", "09864242", "teknik informatika", "putra@gamil.com"]
// ];

// array associative
// definisinya sama seperti array numerik kucuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "deandra putra",
    "nrp" => "0997776", 
    "jurusan" => "teknik informatika",
    "email" => "deandraputra@gamil.com",
    "gambar" => "deandra.jpg"
    ],
    [
    "nama" => "doddy",
    "nrp" => "099756546", 
    "jurusan" => "teknik informatika",
    "email" => "doddy@gamil.com",
    "gambar" => "deandra.jpg"
    ]
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
     <h1>daftar mahasiswa</h1>

    <?php foreach( $mahasiswa as $ms ) : ?>
    <ul>
        <li>
            <img src="img/<?= $ms["gambar"]; ?>">
        </li>
        <li>NAMA : <?= $ms["nama"]; ?></li>
        <li>NRP : <?= $ms["nrp"]; ?></li>
        <li>JURUSAN : <?= $ms["jurusan"]; ?></li>
        <li>EMAIL : <?= $ms["email"]; ?></li>
    </ul>
    <?php endforeach ?> 
</body>
</html>