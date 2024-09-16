<?php
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["size"]) || 
    !isset($_GET["pembuat"]) ||
    !isset($_GET["pembuat"])) { //isset = mengecek apakah variabel udh pernah dibikin atau blm.
    //memindahkan halaman ke halaman lain.
    header("Location: link1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Game</title>
</head>
<body>
    <ul>
        <li><img src="image/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["size"];?></li>
        <li><?= $_GET["pembuat"];?></li>
    </ul>

    <a href="get & post.php">Back</a>
</body>
</html>