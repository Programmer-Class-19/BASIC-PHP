<?php
$mahasiswa = [
    'Array1' => ['nama'=> 'Bambang',
   'npm'=> '20220001',
   'email'=> 'bambang@bambang',
   'jurusan'=> 'Teknik Informatika',],

   'Array2' => ['nama'=> 'Budi',
   'npm'=> '20220002',
   'email'=> 'budi@budi',
   'jurusan'=> 'Teknik Mesin',],

   'Array3' => ['nama'=> 'Caca',
   'npm'=> '20220003',
   'email'=> 'caca@caca',
   'jurusan'=> 'Teknik Elektro',],

   'Array4' =>['nama'=> 'Dedi',
   'npm'=> '20220004',
   'email'=> 'dedi@dedi',
   'jurusan'=> 'Sistem Informasi',],

   'Array5' => ['nama'=> 'Eka',
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
    <p><?php echo 'Ini Hasil Cara ekseksusi Pemanggilan Associative Array per Index Nama :';?></p>
    <p><?php echo 'Halo Nama Saya '.$mahasiswa['Array1']['nama']; ?></p>
    <p><?php echo 'Halo Nama Saya '.$mahasiswa['Array2']['nama']; ?></p>
    <p><?php echo 'Halo Nama Saya '.$mahasiswa['Array3']['nama']; ?></p>
    <p><?php echo 'Halo Nama Saya '.$mahasiswa['Array4']['nama']; ?></p>
    <p><?php echo 'Halo Nama Saya '.$mahasiswa['Array5']['nama']; ?></p>

</body>
</html>