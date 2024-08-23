<?php 

// $mahasiswa = [
//     ["qibeill", "3101931037", "teknik informatika", "kobil@gmail.com"],
//     ["qibeill", "3101931037", "teknik informatika", "kobil@gmail.com"],
//     ["qibeill", "3101931037", "teknik informatika", "kobil@gmail.com"]
// ];

// array associative 
// definisinya sama seperti array nemerik, kecuali
// key-nya adalah string yang kita buat sendiri, bukan index lagi
// array associative bikin sendiri indexnya
// tambahkan string  didepan array buat ngasih tau data ini namanya apa
// kemudian di string depannya di tambahin data dan =>

$mahasiswa = [
    [
    "Nama" => "jieqibill",
    "NRP" => "061020041712",
    "Jurusan" => "programmer",
    "Email" => "kobil@gmail,com",
    "gambar" => "yyy.jpeg"
    ],
    [
    "Nama" => "jieqibill",
    "NRP" => "061020041712",
    "Jurusan" => "programmer",
    "Email" => "kobil@gmail,com",
    "gambar" => "uuu.jpeg"
    // "nilaiTugas" => [90, 80, 100]
    ]
];
// echo $mahasiswa[1]["nilaiTugas"][2];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
    
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["Nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
<?php endforeach; ?>


</body>
</html>