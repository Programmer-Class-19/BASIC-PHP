<?php 
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Backup Database
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Utilitas</a></li>
        <li><a href="#"> Backup Database</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="callout callout-danger">
        <h4>Perhatian !!</h4>
        <p>Pastikan Anda telah mem-Backup Database Aplikasi Ujian Online ini sebelum meng-Klik tombol Reset Database !</p>
    </div>

    <div class="box box-success box-solid" style="overflow-x: scroll;">
        <div class="box-header with-border">
            <h3 class="box-title">Reset Database</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <a href="<?=base_url('reset/resetdb')?>" class="btn btn-success btn-flat" onclick="return confirm('Apakah anda yakin akan me-Reset Database ini ?')"><i class="fa fa-undo"></i> Reset Database Aplikasi Ujian Online</a>                      
                  </div>
                </div>

              <div class="box-footer">
                
              </div>
            
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<?php
$this->load->view('admin/foot');
?>

