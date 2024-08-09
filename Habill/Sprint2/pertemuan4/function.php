<?php

function salam($waktu = "sore", $nama = "qibiell") {
    return "selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("pagi", "biell"); ?></h1>
</body>
</html>