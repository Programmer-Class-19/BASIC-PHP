<?php
include 'config.php';

$query = "SELECT * FROM crud";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>DAFTAR USER</h2>
    <a href="add.php" class="apa">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($user = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['phone']; ?></td>
            <td>
                <a href="edit.php?id=<?= $user['id']; ?>" class="button">Edit</a> |
                <a href="delete.php?id=<?= $user['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="alert">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

