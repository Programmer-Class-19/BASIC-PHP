<?php
// SUPERGLOABALs
// Variable Global Milk PHP
// merupakan Array Associatep
// echo $_SERVER["SERVER_NAME"];

// $_GET
$mahasiswa = [
    "Array1" =>
    [
    "nama"=> "Karina", 
    "npm"=> "043008002", 
    "jurusan"=> "Tata Boga", 
    "pekerjaan"=> "Cheft",
    "gambar" => "Karina.jpg"
    ],

    "Array2" =>
    [
    "nama"=> "Laila Uswathun Sholeha",
    "npm"=> "004012005",
    "jurusan"=> "Teknik Informatika",
    "pekerjaan"=> "Backend Developer",
    "gambar" => "Laila.jpg"
    ],

    "Array3" =>
    [
    "nama"=> "Ardi Juni Yansyah",
    "npm"=> "012062005", 
    "jurusan"=> "Teknik Informatika",
    "pekerjaan"=> "Full Stack Develover",
    "gambar"=> "Ardi.jpg"
    ],

    "Array4" =>
    [
    "nama"=> "Ghibto Syidqi", 
    "npm"=> "002062005", 
    "jurusan"=> "Desain Produk", 
    "pekerjaan"=> "Desainer",
    "gambar"=> "Ghibto.jpg"
    ],

    "Array5" =>
    [
    "nama"=> "Achmad Rizky Baihaki",
    "npm" => "013092004",
    "jurusan"=> "Audio Video",
    "pekerjaan"=> "Editing Video",
    "gambar"=> "Shibay.jpg"
    ]

];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Get</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="details-mahasiswa.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&pekerjaan=<?= $mhs["pekerjaan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>