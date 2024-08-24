<?php
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

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

?>
<!DOCTYPE html>
<html>
<head>
    <title>Motivasi</title>
</head>
<body>
    
    <h3>Ku Pasti Bisa</h3>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul type="square">
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>"> 
            </li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["npm"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
            <li><?= $mhs["pekerjaan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    <p><h3><php echo "Ini Hasil Cara ekseksusi Pemanggilan Associative Array per Index Nama :";?> </h3></p>
    <p><h3><?php echo 'Halo Nama Saya '.$mahasiswa['Array1']['nama']; ?></h3></p>
    <p><h3><?php echo 'Halo Nama Saya '.$mahasiswa['Array2']['nama']; ?></h3></p>
    <p><h3><?php echo 'Halo Nama Saya '.$mahasiswa['Array3']['nama']; ?></h3></p>
    <p><h3><?php echo 'Halo Nama Saya '.$mahasiswa['Array4']['nama']; ?></h3></p>
    <p><h3><?php echo 'Halo Nama Saya '.$mahasiswa['Array5']['nama']; ?></h3></p>
</body>
</html>