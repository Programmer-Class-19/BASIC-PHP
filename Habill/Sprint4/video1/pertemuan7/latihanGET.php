<?php
// $_GET

$mahasiswa = [
    [
    "Nama" => "jieqibill",
    "NRP" => "061020041712",
    "Jurusan" => "programmer",
    "Email" => "kobil@gmail,com",
    "gambar" => "yyy.jpeg"
    ],
    [
    "Nama" => "katiarraa",
    "NRP" => "0913703971330",
    "Jurusan" => "management",
    "Email" => "mutiqq@gmail,com",
    "gambar" => "uuu.jpeg"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> _GET_ </title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&NRP=<?= $mhs["NRP"]; ?>&Email=<?= $mhs["Email"];?>&Jurusan=<?= $mhs["Jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>