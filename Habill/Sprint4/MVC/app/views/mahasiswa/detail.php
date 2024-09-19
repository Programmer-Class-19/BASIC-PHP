<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp'] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['email'] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['jurusan'] ?></h6>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
    </div>
</div>

</div>