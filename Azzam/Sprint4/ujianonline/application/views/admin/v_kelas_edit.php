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
      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header with-border">
         <center><h4 class="box-title">Edit Data</h4></center>
        </div>
        <!-- /.box-header -->
        <?php foreach ($kelas as $a) { ?>
          <!-- form start -->
          <form action="<?= base_url('kelas/update'); ?>" method="post" class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Kelas</label>
                <input type="hidden" name="id" value="<?= $a->id_kelas; ?>">
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $a->nama_kelas; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <a href="<?=base_url('kelas')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-primary btn-flat" title="Simpan Data Pengawas"><span class="fa fa-save"></span> Simpan</button>
                </div>
              </div>

            </div>

           
            <!-- /.box-body -->

            <!-- /.box-footer -->
          </form>
        <?php } ?>
      </div>
    </div>
  </div>

</section><!-- /.content -->

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