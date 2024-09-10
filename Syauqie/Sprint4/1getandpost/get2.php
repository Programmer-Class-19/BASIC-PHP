<?php 

    if (!isset($_GET["nama"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"])) {
        header("Location : get1.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <li><img src="../foto/<?php echo $_GET["gambar"]?>"></li>
    <li><?php echo $_GET["nama"];?></li>
    <li><?php echo $_GET["email"]; ?></li>
    <li><?php echo $_GET["jurusan"]; ?></li>

    <a href="get1.php">home</a>
</body>
</html>
