<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.min.css">
    <title>Tambah Ujian</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Tambah Ujian</h1>
    <form method="POST" action="<?= BASEURL; ?>">
        <div class="mb-3">
            <label for="examName" class="form-label">Nama Ujian</label>
            <input type="text" name="examName" class="form-control" id="examName" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= BASEURL; ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="<?= BASEURL; ?>js/bootstrap.bundle.min.js"></script>
</body>
</html>
