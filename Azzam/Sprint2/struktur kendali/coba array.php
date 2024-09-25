<?php
$Siswa = [
    ["Elhaqq", "123456", "tekhnik", "Elhaqq123@gmail.com"],
    ["Haqqi", "654321", "PAI", "Haqqi321@gmail.com"],
    ["Robani", "123654", "Design", "Robani132@gmail.com"],
    ["Robi", "132564", "Seni", "Robi132@gmail.com"],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <?php foreach( $Siswa as $Sw ) : ?>
    <ul>
        <li>Nama : <?= $Sw[0]; ?></li>
        <li>NIK : <?= $Sw[1]; ?></li>
        <li>Jurusan : <?= $Sw[2]; ?></li>
        <li>Email : <?= $Sw[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>