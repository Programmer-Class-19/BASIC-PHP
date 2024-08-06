<?php
function salam ($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1><?php echo salam("pagi", "dzikri"); ?></h1>
</body>
</html>