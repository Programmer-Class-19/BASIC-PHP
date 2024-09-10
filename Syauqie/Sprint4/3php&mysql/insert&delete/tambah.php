<?php 

    if (isset($_POST["submit"])) {
        //ambil data dari setiap elemen dalam form
        
        //query insert data


        //cek apakah data berhasil di tambahkan atau tidak
        // var_dump(mysqli_affected_rows($conn)); cara pertama
        if (mysqli_affected_rows($conn) > 0) {
            echo "berhasil";
        } else {
            echo "gagal";
            echo "<br>";
            echo mysqli_error($conn);
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

    <a href="index.php">home</a>

    <form action="" method = "post">
        <ul>
            
            <li>
                <label for="nama">Nama</label> <br>
                <input type="text" id="nama" name="nama">
            </li>

            <li>
                <label for="nrp">NRP :</label> <br>
                <input type="text" id="nrp" name="nrp">
            </li>

            <li>
                <label for="email">E-Mail</label> <br>
                <input type="text" id="email" name="email">
            </li>

            <li>
                <label for="jurusan">Jurusan</label> <br>
                <input type="text" id="jurusan" name="jurusan">
            </li>

            <li>
                <label for="gambar">Gambar</label> <br>
                <input type="text" id="gambar" name="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data!!</button>
            </li>
        </ul>
    </form>

</body>
</html>