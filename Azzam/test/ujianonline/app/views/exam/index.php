<!DOCTYPE html>
<html>
<head>
    <title>Ujian Online</title>
</head>
<body>
    <h1>Daftar Ujian</h1>
    <a href="<?php echo BASEURL; ?>/index.php?action=create">Tambah Ujian Baru</a>
    <ul>
        <?php foreach ($exam as $ex): ?>
            <li>
                <strong><?php echo htmlspecialchars($ex['title']); ?></strong> - <?php echo htmlspecialchars($ex['date']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
