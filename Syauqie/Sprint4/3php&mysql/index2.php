<?php 

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">

    <tr>
        <th>NO.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ( $mahasiswa as $row) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="../foto/<?php echo $row ["gambar"]?>" width=50px></td>
        <td><?php echo $row ["nrp"] ?></td>
        <td><?php echo $row ["nama"] ?></td>
        <td><?php echo $row ["email"] ?></td>
        <td><?php echo $row ["jurusan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>