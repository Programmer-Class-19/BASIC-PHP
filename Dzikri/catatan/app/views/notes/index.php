<!DOCTYPE html>
<html>
<head>
    <title>Daftar Catatan</title>
</head>
<body>
    <h1>Daftar Catatan</h1>
    <a href="<?= BASE_URL ?>note/create">Tambah Catatan</a>
    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <?= $note->title ?> - 
                <a href="<?= BASE_URL ?>note/edit/<?= $note->id ?>">Edit</a> | 
                <a href="<?= BASE_URL ?>note/delete/<?= $note->id ?>">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
