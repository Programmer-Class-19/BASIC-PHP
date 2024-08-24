<?php
$mahasiswa = [
    ['nama'=> 'Bambang',
   'npm'=> '20220001',
   'email'=> 'bambang@bambang',
   'jurusan'=> 'Teknik Informatika',],

   ['nama'=> 'Budi',
   'npm'=> '20220002',
   'email'=> 'budi@budi',
   'jurusan'=> 'Teknik Mesin',],

   ['nama'=> 'Caca',
   'npm'=> '20220003',
   'email'=> 'caca@caca',
   'jurusan'=> 'Teknik Elektro',],

   ['nama'=> 'Dedi',
   'npm'=> '20220004',
   'email'=> 'dedi@dedi',
   'jurusan'=> 'Sistem Informasi',],

   ['nama'=> 'Eka',
   'npm'=> '20220005',
   'email'=> 'eka@eka',
   'jurusan'=> 'Teknik Sipil',],
   
];


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
            <li><?= $mhs['nama']; ?></li>
            <li><?= $mhs['npm']; ?></li>
            <li><?= $mhs['email']; ?></li>
            <li><?= $mhs['jurusan']; ?></li>
            
    </ul>
    <?php endforeach; ?>
</body>
</html>