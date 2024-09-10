<?php 
    // harus mendefinisikan functionnya dan dipanggil
    //harus ada returnnya agar tidak mengulang
    // ketika ada parameter yang tidak di panggil akan di tapilkan variable default dengan cara $nama = "datang"

    function salam ( $waktu, $nama ) {
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
    <h1><?php echo salam ("pagi", "syauqie!!"); ?></h1>
</body>
</html>
<br>
<br>
<br>
<?php 
    function selamat ( $datang, $nama ) {
        return "selamat $datang, $nama";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo selamat ("pagi", "syauqie") ?></h1>
</body>
</html>