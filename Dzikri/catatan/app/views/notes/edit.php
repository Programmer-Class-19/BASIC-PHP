<!DOCTYPE html>
<html>
<head>
    <title>Edit Catatan</title>
</head>
<body>
    <h1>Edit Catatan</h1>
    <form action="<?= BASE_URL ?>note/update/<?= $note->id ?>" method="POST">
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title" value="<?= $note->title ?>"><br><br>
        <label for="content">Isi:</label><br>
        <textarea id="content" name="content"><?= $note->content ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
