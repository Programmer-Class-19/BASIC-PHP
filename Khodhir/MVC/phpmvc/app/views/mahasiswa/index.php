<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br><br>
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <!-- Nama -->
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <!-- nrp -->
            <div class="mb-3">
              <label for="nrp" class="form-label">NRP</label>
              <input type="number" class="form-control" id="nrp" name="nrp">
            </div>

            <!-- E-mail -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <!-- combo box / select -->
            <div class="form-group">
              <label for="Jurusan">Jurusan</label>
              <select class="form-control" aria-label="Jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>