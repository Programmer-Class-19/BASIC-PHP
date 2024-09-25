<h1>Daftar Ujian</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Ujian</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($ujian as $u) { ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= $u['nama_ujian'] ?></td>
        <td><?= $u['tanggal'] ?></td>
        <td>
            <a href="<?= BASEURL ?>ujian/edit/<?= $u['id'] ?>">Edit</a>
            <a href="<?= BASEURL ?>ujian/delete/<?= $u['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="<?= BASEURL ?>ujian/create">Tambah Ujian Baru</a>