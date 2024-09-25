<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hapus Buku</title>
</head>
<body>
    <h1>Hapus Exam</h1>
    <p>Apakah Kamu Yakin Akan Menghapus data ini??</p>
    <form action="<?= BASEURL ?>/index.php?action=delete&id=<?= $book['id'] ?>" method="POST">
        <input type="submit" value="Yes, delete it">
        <a href="<?= BASEURL ?>/index.php">Cancel</a>
    </form>
</body>
</html>