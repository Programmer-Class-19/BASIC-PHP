<?php include '../app/views/layout/header.php'; ?>
<main class="container mt-4">
    <h2 class="mb-4">Add New Book</h2>
    <form action="<?= BASEURL ?>/index.php?action=create" method="POST">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</main>
<?php include '../app/views/layout/footer.php'; ?>
