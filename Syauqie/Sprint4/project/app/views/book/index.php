<?php include '../app/views/layout/header.php'; ?>
<main class="container mt-4">
    <h2 class="mb-4">Daftar Buku</h2>
    <a href="<?= BASEURL ?>/index.php?action=create" class="btn btn-success mb-3">Tambah Buku Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $counter++ ?></td>
                <td><?= htmlspecialchars($book['title']) ?></td>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td>
                    <a href="<?= BASEURL ?>/index.php?action=edit&id=<?= $book['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= BASEURL ?>/index.php?action=delete&id=<?= $book['id'] ?>')">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../app/views/layout/footer.php'; ?>
