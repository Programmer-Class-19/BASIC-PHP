<h1>Daftar Guru</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($guru as $g) { ?>
    <tr>
        <td><?= $g['id'] ?></td>
        <td><?= $g['nama'] ?></td>
        <td><?= $g['nip'] ?></td>
        <td>
            <a href="<?= BASEURL ?>guru/edit/<?= $g['id'] ?>">Edit</a>
            <a href="<?= BASEURL ?>guru/delete/<?= $g['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="<?= BASEURL ?>guru/create">Tambah Guru Baru</a>