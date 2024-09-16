<div class="container mt-5">

        <div class="row">
            <div class="col-6">
                <h3>Daftar Mahasiswa</h3>
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <ul>
                    <li>Nama : <?= $mhs['nama']; ?></li>
                    <li>Nrp : <?= $mhs['nrp']; ?></li>
                    <li>Email : <?= $mhs['email']; ?></li>
                    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
                </ul>
                <?php endforeach; ?>            </div>
        </div>
</div>