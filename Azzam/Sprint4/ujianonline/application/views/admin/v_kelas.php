<?php
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
        Apabila Anda menghapus data kelas, maka data mahasiswa yang ada pada data kelas tersebut akan terhapus!
      </div>
      <?= $this->session->flashdata('message'); ?>
      <!-- Default box -->
      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header">
          <center><h3 class="box-title">Data Kelas</h3></center><p>
          <h3 class="box-title"></h3>
          <a href="<?=base_url('siswa')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
          <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah</button>
        </div>
        <!-- /.box-header -->        
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th>Nama Kelas</th>
                <th width="15%"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($kelas as $m) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->nama_kelas; ?></td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat btn-xs">Action</button>
                      <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= base_url('kelas/edit/') . $m->id_kelas; ?>">Edit Data</a></li>
                        <li><a href="<?= base_url('kelas/hapus/') . $m->id_kelas; ?>" onclick="return confirm('Apakah yakin data peserta ini di hapus?')">Hapus Data</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->

<!-- /. modal  -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h4 class="modal-title">Tambah Data Kelas</h4></center>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url('kelas/kelas_aksi'); ?>">
        <div class="modal-body">
          <div class="form-group">
            <label class="font-weight-bold">Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas" required="">
            <?= form_error('nama_kelas', '<small class="text-danger">', '</small>'); ?>
          </div>

        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <!-- /.tutup form dengan modal  -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">
  $(function() {
    $('#data').dataTable();
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>


<?php
$this->load->view('admin/foot');
?>