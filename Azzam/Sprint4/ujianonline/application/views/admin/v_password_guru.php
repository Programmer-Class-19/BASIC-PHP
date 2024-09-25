<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= $this->session->flashdata('message'); ?>

      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header with-border">
          <center><h3 class="box-title">Ganti Password</h3></center>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="<?= base_url('password'); ?>" method="post" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Password Baru</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Masukan Password Baru" name="password1">
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Ulangi Password </label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Uangi Password Baru" name="password2">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-flat" title="Simpan Password Baru">Simpan</button>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>
  </div>
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->
<script type="text/javascript">
  $(function() {
    $('#data-tables').dataTable();
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>