<h1>Daftar Catatan</h1>
<a href="<?= BASEURL; ?>note/add">Tambah Catatan</a>
<ul>
    <?php foreach($data['notes'] as $note): ?>
        <li>
            <?= $note['title']; ?> 
            <a href="<?= BASEURL; ?>note/edit/<?= $note['id']; ?>">Edit</a> 
            <a href="<?= BASEURL; ?>note/delete/<?= $note['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
        </li>
    <?php endforeach; ?>
</ul>
