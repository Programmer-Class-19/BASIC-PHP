<?php 
$mahasiswa = [["farid iqmal"], ["0430400203"], ["iqmalfarid8@gmail.com"], ["bisnis"]];
$mahasiswa = [["hafidz iqmal"], ["0340400302"], ["iqmalfarid8@gmail.com"], ["teknik"]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    
    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>