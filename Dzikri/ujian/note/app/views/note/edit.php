<h1>Edit Catatan</h1>
<form action="" method="POST">
    <label for="title">Judul:</label>
    <input type="text" name="title" id="title" value="<?= $data['note']['title']; ?>">
    <br>
    <label for="content">Konten:</label>
    <textarea name="content" id="content"><?= $data['note']['content'];
