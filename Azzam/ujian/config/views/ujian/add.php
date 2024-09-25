<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Ujian</title>
</head>
<body>
    <h1>Tambah Ujian</h1>
    <form action="index.php?action=add" method="post">
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <input type="submit" value="Tambah Ujian">
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
