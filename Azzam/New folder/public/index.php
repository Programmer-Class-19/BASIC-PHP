<?php
// views/siswa/index.php
?>
<html>
<head>
    <title>Halaman Utama Siswa</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
</head>
<body>
    <h1>Halaman Utama Siswa</h1>
    <ul>
        <?php foreach ($siswa as $s) { ?>
            <li><?php echo $s['nama_siswa']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>