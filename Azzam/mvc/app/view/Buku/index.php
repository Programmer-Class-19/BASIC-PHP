<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h2>Daftar Buku</h2>
            <?php foreach( $data["Buku"] as $Book ) : ?>
                <ul>
                    <li><?= $Book["nama"]; ?></li>
                    <li><?= $Book["penulis"]; ?></li>
                    <li><?= $Book["penerbit"]; ?></li>
                    <li><?= $Book["halaman"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>