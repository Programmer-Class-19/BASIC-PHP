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
 

    <?= $this->session->flashdata('message'); ?>

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Backup Database</a></li>
          <li><a href="#tab_2" data-toggle="tab">Reset Database</a></li>
          <li><a href="#tab_3" data-toggle="tab">Restore Database</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <br>
            <div class="form-group">              
                <a href="<?=base_url('utilitas/db')?>" class="btn btn-primary btn-flat" download><i class="fa fa-download"></i> Backup </a>
            </div>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            <br>
            
            <div class="form-group">
                <a href="<?=base_url('utilitas/resetdb')?>" class="btn btn-danger btn-flat" onclick="return confirm('Apakah anda yakin akan me-Reset Database ini ?')"><i class="fa fa-undo"></i> Reset Data </a>  
            </div>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_3">
            <br>
            <!-- form start -->
            <form action="<?=base_url('utilitas/restore')?>" method="post" enctype="multipart/form-data" class="form-horizontal" >

                <div class="form-group">
                  <label class="col-sm-2 control-label">File Database</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="file" id="datafile">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                  </div>
                </div>

            </form>          
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<?php
$this->load->view('admin/foot');
?>

