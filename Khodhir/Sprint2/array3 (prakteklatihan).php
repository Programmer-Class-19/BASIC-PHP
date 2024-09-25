<!-- DATA MAHASISWA -->

<?php
    $mahasiswa = [
        ["Sandhika Galih", "043040023","Teknik Informatika","sandhikagalih@unpas.ac.id"], 
        ["Ahmad", "033040423","Teknik Informatika","sandhikagalih@unpas.ac.id"],
        ["Ishaq", "00332040044","Teknik Informatika","sandhikagalih@unpas.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar MAHASISWA</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <h4>ini contoh pakai looping</h4>
    <ul>
    <?php  foreach($mahasiswa as $mhs) { ?>
        <li><?php echo $mhs; ?></li>
    <?php } ?>
    </ul>
    <h4>ini contoh manual gak pakai looping</h4>
    <ul>
        <li><?php echo $mahasiswa [0]; ?></li>
        <li><?php echo $mahasiswa [1]; ?></li>
        <li><?php echo $mahasiswa [2]; ?></li>
        <li><?php echo $mahasiswa [3]; ?></li>
    </ul>

    <h4>ini contoh apabila mahasiswa lebih dari satu pakai looping foreach</h4>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
 >

        <li>Nama :<?php echo $mhs [0]; ?></li>
        <li>NRP :<?php echo $mhs [1]; ?></li>
        <li>Jurusan :<?php echo $mhs [2]; ?></li>
        <li>E-mail :<?php echo $mhs [3]; ?></li>

    <?php endforeach; ?>
    </ul>

</body>
</html>