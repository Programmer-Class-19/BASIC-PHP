<?php
$mahasiswa = [
    [
     "nama" => "dzikri rabbani",
     "nrp" => "0430356045", 
     "jurusan" => "teknik informatika", 
     "email"=> "adzri2705@gmail.com",
     "gambar" => "bakugo.jpg"
    ],
    [
    "nama" => "Hamazu", 
    "nrp" => "05600454023", 
    "jurusan" => "teknik industri", 
    "email" => "hamazu83@gmail.com",
    "gambar" => "hinata.jpg"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        .img{
        
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" class="img">
        </li>
        <li>Nama : <?= $mhs["nama"] ;?></li>
        <li>NRP : <?= $mhs["nrp"] ;?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ;?></li>
        <li>Gmail : <?= $mhs["email"] ;?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>