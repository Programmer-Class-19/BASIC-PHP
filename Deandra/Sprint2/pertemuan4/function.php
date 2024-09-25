<?php
function salam($waktu, $nama) {
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("pagi", "deandra"); ?></h1>
    
</body>
</html>