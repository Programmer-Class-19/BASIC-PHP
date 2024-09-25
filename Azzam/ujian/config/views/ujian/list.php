<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Ujian</title>
</head>
<body>
    <h1>Daftar Ujian</h1>
    <a href="index.php?action=add">Tambah Ujian</a>
    <ul>
        <?php foreach ($ujian as $item) : ?>
            <li>
                <?php echo htmlspecialchars($item["title"]); ?> - <?php echo htmlspecialchars($item["description"]); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
