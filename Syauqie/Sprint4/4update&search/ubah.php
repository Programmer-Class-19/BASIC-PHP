<?php
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//ambil data di url
$id = $_GET['id'];
//query data mahasiswa berdasarakan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id"); //yang akan ditampilkan adalah array numeric

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script> 
            alert('data berhasil diubah!');
            document. location.href = 'index.php';
        </script>";
    } else {
        echo " 
        <script> 
            alert('data gagal diubah!'); 
            document. location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa </title>
</head>

<body>

    <h1>Ubah Data</h1>
    <form action="" method="post"> <!-- action dan method adalah atribut -->
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nama">Nama</label> <br>
                <input type="text" id="nama" name="nama" value="<?= $mhs["nama"] ?>">
            </li>

            <li>
                <label for="nrp">NRP :</label> <br>
                <input type="text" id="nrp" name="nrp" value="<?= $mhs["nrp"] ?>">
            </li>

            <li>
                <label for="email">E-Mail</label> <br>
                <input type="text" id="email" name="email" value="<?= $mhs["email"] ?>">
            </li>

            <li>
                <label for="jurusan">Jurusan</label> <br>
                <input type="text" id="jurusan" name="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>

            <li>
                <label for="gambar">Gambar</label> <br>
                <input type="text" id="gambar" name="gambar" value="<?= $mhs["gambar"] ?>">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data!!</button>
            </li>
            <hr>
            <a href="index.php">home</a>
        </ul>
    </form>
</body>
</html>