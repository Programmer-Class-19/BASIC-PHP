
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Catatan</h1>
        <a href="<?= BASE_URL ?>note/create" class="btn btn-primary mb-3">Tambah Catatan</a>
        <ul class="list-group">
            <?php foreach ($notes as $note): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $note->title ?>
                    <span>
                        <a href="<?= BASE_URL ?>note/edit/<?= $note->id ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= BASE_URL ?>note/delete/<?= $note->id ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
