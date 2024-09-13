<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>