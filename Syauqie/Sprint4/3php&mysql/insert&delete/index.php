<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" id="add-student">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10" id="student-table">

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
    <?php foreach ( $mahasiswa as $row ) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="" class="edit">ubah</a> |
            <a href="hapus.php?id=<?php echo $row ["id"]?>" onclick="return confirm('yakin?');" class="delete">hapus</a>
        </td>
        <td><img src="../insert&delete//foto2/<?php echo $row ["gambar"]?>" width=50px></td>
        <td><?= $row ["nrp"] ?></td>
        <td><?= $row ["nama"] ?></td>
        <td><?= $row ["email"] ?></td>
        <td><?= $row ["jurusan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>

    <script src="script.js"></script>
</body>
</html>