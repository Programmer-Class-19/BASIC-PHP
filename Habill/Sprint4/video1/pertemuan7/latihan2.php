<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <li><img src="img/yyy.jpeg"></li>
    <li><?= $_GET["Nama"]; ?></li>
    <li><?= $_GET["NRP"]; ?></li>
    <li><?= $_GET["Email"]; ?></li>
    <li><?= $_GET["Jurusan"]; ?></li>
</ul>

<a href="latihanGET.php">Kembali Ke Daftar Mahasiswa</a>

</body>
</html>