<h1>Daftar Siswa</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($siswa as $s) { ?>
    <tr>
        <td><?= $s['id'] ?></td>
        <td><?= $s['nama'] ?></td>
        <td><?= $s['nis'] ?></td>
        <td>
            <a href="<?= BASEURL ?>siswa/edit/<?= $s['id'] ?>">Edit</a>
            <a href="<?= BASEURL ?>siswa/delete/<?= $s['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="<?= BASEURL ?>siswa/create">Tambah Siswa Baru</a>