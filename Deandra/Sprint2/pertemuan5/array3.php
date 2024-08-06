<?php
$mahasiswa = [
    ["deandra putra", "12345678", "teknik informatika", "deandraputra@gmail.com"],
    ["doddy ray", "12345098", "teknik informatika", "doddyray@gmail.com"],
    ["rian ray", "12095098", "teknik informatika", "rianray@gmail.com"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<!-- <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li><?php echo $mhs; ?></li>
    <?php endforeach; ?>    
</ul> -->

<br>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>NAMA : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>JURUSAN : <?= $mhs[2]; ?></li>
    <li>EMAIL : <?= $mhs[3]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>