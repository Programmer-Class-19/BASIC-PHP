<?php
$mahasiswa = [
    ["dzikri rabbani", "043040023", "teknik informatika", "adzri2705@gmail.com"],
    ["hamazu", "034040027", "teknik farmasi", "hamazu83@gmail.com"],
    ["yoshida", "056040032", "teknik pertanian", "yoshida27@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ): ?>
<ul>
   <li>Nama : <?= $mhs[0] ;?></li>
   <li>NRP : <?= $mhs[1] ;?></li>
   <li>Jurusan : <?= $mhs[2] ;?></li>
   <li>Gmail : <?= $mhs[3] ;?></li>
</ul>
<?php endforeach; ?>
</body>
</html>