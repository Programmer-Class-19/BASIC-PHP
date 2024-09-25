<?php
// variabel scope / lingkup variabel
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }


// tampilX();

//////////////////////////////////////////////////

// SUPERGLOBALS
// variabel global milik php
// merupakan array associative
// var_dump($_SERVER);

//////////////////////////////////////////////////

$mahasiswa = [
    [
    "nama" => "nadine",
    "nrp" => "0997776", 
    "jurusan" => "teknik informatika",
    "email" => "nadine@gamil.com",
    "gambar" => "deandra2.jpeg"
    ],
    [
    "nama" => "regie",
    "nrp" => "099756546", 
    "jurusan" => "teknik informatika",
    "email" => "regie@gamil.com",
    "gambar" => "deandra.jpeg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
     <h1>daftar mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $ms ) : ?>
        <li>
            <a href="get.php?nama=<?= $ms["nama"]; ?>&nrp=<?= $ms["nrp"]; ?>&jurusan=<?= $ms["jurusan"]?>&email=<?= $ms["email"]; ?>&gambar=<?= $ms["gambar"]; ?>"><?= $ms["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul> 
</body>
</html>