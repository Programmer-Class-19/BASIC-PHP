 <?php
// menampilkan araay dengan foreach
// Definisikan array
$buah = ["Apel", "Pisang", "Jeruk", "Mangga"];

// Gunakan foreach untuk menampilkan setiap elemen array
foreach ($buah as $item) {
    echo $item . "<br>";
}

print "<br><br><br>";




// Definisikan associative array
$umur = [
    "Ali" => 25,
    "Budi" => 30,
    "Siti" => 27
];

// Menampilkan nilai menggunakan kunci
echo "Umur Ali adalah " . $umur["Ali"] . " tahun.";

print "<br><br><br>";



// mencetak array multi dimensi 
$mahasiswa = [
    ["Nama" => "Ali", "Umur" => 20, "Jurusan" => "Teknik Informatika"],
    ["Nama" => "Budi", "Umur" => 22, "Jurusan" => "Sistem Informasi"],
    ["Nama" => "Siti", "Umur" => 21, "Jurusan" => "Manajemen"]
];

foreach ($mahasiswa as $data) {
    foreach ($data as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}

print "<br><br><br>";
















$mahasiswa02 = [
    ["Mas'uD", "19102004183816", "msdibnuismail@gmail.com", "Teknik Informatika"],
    ["Abdurrahman", "0304184826", "abdrrhmnibnuismail@gmail.com", "Teknik Informatika"],
    ["Salman", "06102015188866", "salmanibnuismail@gmail.com", "Teknik Informatika"]
];




// Array Assosiactive 
// Definisinya sama seperti array numerik,kecuali 
// key-nya adalah string yang kita buat sendiri 
  // contoh nya assosiactive array:
$kartuwarganegarari = [
    [ 
    "nama" => "Mas'ud",
    "nrp" => "1910200418",
    "email" => "msdibnuismail@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "Hiu.jpeg"
    ],
    [ 
    "nama" => "abdurrahman",
    "nrp" => "1910200418",
    "email" => "msdibnuismail@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "Itik.jpeg"
    ],
    [ 
    "nama" => "salman",
    "nrp" => "1910200418",
    "email" => "msdibnuismail@gmail.com",
    "jurusan" => "teknik informatika",
     "gambar" => "Penguin.jpeg"
    ]
];

echo $kartuwarganegarari[0]["nrp"];








print "<br><br><br>";

?> 





<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <style>
            .close {
                font-family: arial;
            }
            #open {
                font-family: serif;
                color: blue;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa02 as $mhssw) : ?>    
    
    <ul class="close">
        
        <li>NAMA :<?= $mhssw[0];  ?></li>
        <li>NRP :<?= $mhssw[1];  ?></li>
        <li>EMAIL :<?= $mhssw[2];  ?></li>
        <li>JURUSAN :<?= $mhssw[3];  ?></li>

    </ul>
    
    <?php endforeach; ?>

    <br><br><br>

    
    <?php foreach($kartuwarganegarari as $ktp) :  ?>
    <ul id="open">

        <li>
            <img src="img/" <?= $ktp["gambar"]; ?>>
        </li>
        <li><?= $ktp["nama"]; ?></li>
        <li><?= $ktp["nrp"]; ?></li>
        <li><?= $ktp["email"]; ?></li>
        <li><?= $ktp["jurusan"]; ?></li>

    </ul>
    <?php endforeach ?>

    <br><br><br>
    </body>
</html>


