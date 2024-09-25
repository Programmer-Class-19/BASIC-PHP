<?php

$mahasiswa = [
    ["Maman","19102004","Teknik Informatika","maman@gmail.com"],
    ["mas'ud","40020191","Informasi Teknologi","masud@gmail.com"],
    ["Gilang","10200419","Teknologi","gilang@gmail.com"],
];



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhsw) : ?>
    <li> Nama :<?= $mhsw[0];?></li>
    <li> NRP :<?= $mhsw[1]; ?></li>
    <li>Jurusan :<?= $mhsw[2]; ?></li>
    <li> EMail :<?= $mhsw[3]; ?></li>
    <?php endforeach; ?>
  
    </body>
</html>