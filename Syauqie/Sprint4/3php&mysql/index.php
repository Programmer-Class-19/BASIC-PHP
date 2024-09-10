<?php 
//koneksi ke database
$conn = mysqli_connect("Localhost", "root", "", "phpdasar"); //nilai 1. host-nya, 2.user-nya, 3.password, 4.nama database
//ambil data mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); //kalau pakai query mau berhasil atau gagal tidak ada pesan kesalahannya cara mengatasinya dengan memasukkan kle variable dan di var_dump
// var_dump($result);

// 4 Cara mengambil data dari object result : 
// Mysqli_fetch_row( ) 
// Mysqli_fetch_assoc( )
// Mysqli_fetch_array( )
// Mysqli_fetch_object( )

// while ($mhs = Mysqli_fetch_assoc($result)) { 
// var_dump($mhs);
// };


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
    <?php while ($row = Mysqli_fetch_assoc($result)) : ?>
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
    <?php endwhile; ?>
    </table>
</body>
</html>
        
