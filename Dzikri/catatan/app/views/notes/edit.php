<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Catatan</h1>
        <form action="<?= BASE_URL ?>note/update/<?= $note->id ?>" method="POST">
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" id="title" name="title" class="form-control" value="<?= $note->title ?>">
            </div>
            <div class="form-group">
                <label for="content">Isi:</label>
                <textarea id="content" name="content" class="form-control"><?= $note->content ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="<?= BASE_URL ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
