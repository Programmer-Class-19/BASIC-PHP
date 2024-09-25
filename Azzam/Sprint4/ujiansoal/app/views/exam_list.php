<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.min.css">
    <title>Daftar Ujian</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Ujian</h1>
    <a href="<?= BASEURL; ?>views/add_exam.php" class="btn btn-primary">Tambah Ujian</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Ujian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exams as $exam): ?>
            <tr>
                <td><?= $exam['id']; ?></td>
                <td><?= $exam['name']; ?></td>
                <td>
                    <a href="BASEURL" class="btn btn-danger">Hapus</a>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= BASEURL ?>/index.php?action=delete&id=<?= $exam['id'] ?>')">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="<?= BASEURL; ?>js/bootstrap.js"></script>
</body>
</html>
