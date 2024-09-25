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
                <center><h3 class="box-title">Edit Data</h3></center>
            </div>
            <!-- /.box-header -->
            <?php foreach($guru as $a) { ?>
            <!-- form start -->
            <form action="<?=base_url('guru/update');?>" method="post" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK (Nomor Induk Kepegawaian)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="nik" value="<?= $a->id_guru;?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $a->nama_guru;?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?= $a->username;?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="<?= $a->password;?>" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <a href="<?=base_url('guru')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-primary btn-flat" title="Simpan Data Pengawas"><span class="fa fa-save"></span> Simpan</button>
                </div>
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div> 
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