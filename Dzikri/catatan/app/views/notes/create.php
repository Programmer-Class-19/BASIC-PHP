<!DOCTYPE html>
<html>
<head>
    <title>Tambah Catatan</title>
</head>
<body>
    <h1>Tambah Catatan Baru</h1>
    <form action="<?= BASE_URL ?>note/store" method="POST">
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Isi:</label><br>
        <textarea id="content" name="content"></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
