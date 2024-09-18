<?php include '../app/views/layout/header.php'; ?>
<main class="container mt-4">
    <h2 class="mb-4">Tambah Buku Baru</h2>
    <form action="<?= BASEURL ?>/index.php?action=create" method="POST">
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
</main>
<?php include '../app/views/layout/footer.php'; ?>
