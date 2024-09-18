<?php include '../app/views/layout/header.php'; ?>
<main class="container mt-4">
    <h2 class="mb-4">Edit Buku</h2>
    <form action="<?= BASEURL ?>/index.php?action=edit&id=<?= $book['id'] ?>" method="POST">
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= htmlspecialchars($book['title']) ?>" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" class="form-control" value="<?= htmlspecialchars($book['author']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</main>
<?php include '../app/views/layout/footer.php'; ?>
