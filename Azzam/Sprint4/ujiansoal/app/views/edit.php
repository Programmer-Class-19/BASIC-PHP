<?php include '..public/header.php'; ?>
<main class="container mt-4">
    <h2 class="mb-4">Edit Exam</h2>
    <form action="<?= BASEURL ?>/index.php?action=edit&id=<?= $Exam['id'] ?>" method="POST">
        <div class="form-group">
            <label for="title">ID :</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= htmlspecialchars($book['title']) ?>" required>
        </div>
        <div class="form-group">
            <label for="author">Mapel :</label>
            <input type="text" id="author" name="author" class="form-control" value="<?= htmlspecialchars($book['author']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Exam</button>
    </form>
</main>
<?php include '../app/views/layout/footer.php'; ?>
