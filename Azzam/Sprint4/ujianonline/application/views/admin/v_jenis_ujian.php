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

      <?= $this->session->flashdata('message'); ?>

      <!-- Default box -->
      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header">
          <center><h4 class="box-title">Jenis Ujian</h4></center><p>
          <h3 class="box-title"></h3>
           <a href="<?=base_url('peserta')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
          <?php echo '<button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-data" onclick="$(\'#modal-data-body\').load(\'' . base_url('jenis_ujian/create') . '\')"><span class="fa fa-plus"></span> Jenis Ujian</button>' ?>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <table id="data" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th>Jenis Ujian</th>
                <th width="25%"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($jenis_ujian as $m) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->jenis_ujian; ?></td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat btn-xs">Action</button>
                      <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= base_url('jenis_ujian/edit/') . $m->id_jenis_ujian; ?>">Edit Data</a></li>
                        <li><a href="<?= base_url('jenis_ujian/hapus/') . $m->id_jenis_ujian; ?>" onclick="return confirm('Apakah yakin data peserta ini di hapus?')">Hapus Data</a></li>
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

<!-- /. modal tambah data siswa  -->
<div class="modal fade" id="modal-data">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Tambah Data Jenis Ujian</h4>
      </div>
      <!-- /.form dengan modal -->
      <div class="modal-body">
        <div id="modal-data-body">
          <p>Loading...</p>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /. modal import data siswa  -->
<div class="modal fade" id="modal-import">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Import Data siswa</h4>
      </div>
      <!-- /.form dengan modal -->
      <form action="<?= base_url('siswa/import'); ?>" method="post" class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <div class="col-sm-12">
              <a href="<?= base_url('format/format-import-data-siswa.xlsx') ?>" class="pull-right" download><i class="fa fa-download"></i> Download Format Data Import siswa</a>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">File</label>
            <div class="col-sm-10">
              <input type="file" name="file" required accept=".xls, .xlsx">
              <p class="help-block">File harus bertipe <b>.xls, .xlsx</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kelas</label>
            <div class="col-sm-10">
              <select class="select2 form-control" name="kelas" required="">
                <option selected="selected" disabled="">- Pilih Kelas</option>
                <?php foreach ($kelas as $a) { ?>
                  <option value="<?= $a->id_kelas ?>"><?= $a->nama_kelas; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">TUTUP</button>
          <button type="submit" class="btn btn-primary pull-right" title="Import Data siswa">Import</button>
        </div>
        <!-- /.box-footer -->
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
  $(document).ready(function() {
    $('#data').dataTable();
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>