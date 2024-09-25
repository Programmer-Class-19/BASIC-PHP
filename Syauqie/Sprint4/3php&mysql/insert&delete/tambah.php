<?php
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset($_POST["submit"])) {
    //ambil data dari setiap elemen dalam form
    //query insert data
    //cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn)); cara pertama
    if (tambah($_POST) > 0) {
        echo "
        <script> 
            alert('data berhasil ditambahkan!');
            document. location.href = 'index.php';
        </script>";
    } else {
        echo " 
        <script> 
            alert('data gagal ditambahkan!'); 
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

    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post"> <!-- action dan method adalah atribut -->
        <ul>
            <li>
                <label for="nama">Nama</label> <br>
                <input type="text" id="nama" name="nama" required>
            </li>

            <li>
                <label for="nrp">NRP :</label> <br>
                <input type="text" id="nrp" name="nrp" required>
            </li>

            <li>
                <label for="email">E-Mail</label> <br>
                <input type="text" id="email" name="email" required>
            </li>

            <li>
                <label for="jurusan">Jurusan</label> <br>
                <input type="text" id="jurusan" name="jurusan" required>
            </li>

            <li>
                <label for="gambar">Gambar</label> <br>
                <input type="text" id="gambar" name="gambar">
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