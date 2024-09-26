<?php
//cek apakah tidak ada data di $__GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["pekerjaan"]) || 
    !isset($_GET["gambar"])
   ) {

    //redirect
    header("Location: get.php");
    exit;
}
?>  
<!DOCTYPE html>
<html>
<head>  
    <title>Details Mahasiswa</title>
</head>
<body>
 
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["pekerjaan"]; ?></li>
    </ul>

    <a href="get.php">Kembali Ke Halaman Utama</a>
</body>
</html>