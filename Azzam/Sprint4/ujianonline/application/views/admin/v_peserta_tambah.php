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
        </div>

                      <!-- /. modal tambah data siswa  -->
           





        <div class="col-md-12">
            <div class="box box-success" style="overflow-x: scroll;">
                <div class="box-header with-border">
              <center><h3 class="box-title">Tambah Peserta Ujian</h3></center>               
       </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="get">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Pilih Kelas</label>

                      <div class="col-sm-10">
                        <select class="select2 form-control" name="kelas" required="">
                            <option selected="selected" disabled="" value="">- Pilih Kelas -</option>
                            <?php foreach($kelas as $a) { ?>
                              <option value="<?=$a->id_kelas?>"><?= $a->nama_kelas;?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"></label>

                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-flat" title="Pilih Kelas">Pilih Kelas</button>
                      </div>
                    </div>
                   </div>
                </form>
            </div>
        </div>
        <!-- /.col-->


        <div class="col-md-12">
            <div class="box box-success" style="overflow-x: scroll;">
                <form class="form-horizontal" action="<?=base_url('peserta_tambah/insert_');?>" method="post">
                   <div class="box-body">
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Mata Pelajaran</label>
                      <div class="col-sm-10">
                        <select class="select2 form-control" name="mapel" required="">
                            <option selected="selected" disabled="" value="">- Pilih Mata Pelajaran -</option>
                            <?php foreach($mapel as $a) { ?>
                              <option value="<?=$a->id_matapelajaran?>"><?= $a->kode_matapelajaran;?> | <?= $a->nama_matapelajaran;?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Ujian</label>
                      <div class="col-sm-10">
                          <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="date" name="tanggal" placeholder="2019-12-30" autocomplete="off" required="">
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jam Ujian</label>
                      <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control" id="time" name="jam" required="">
                          </div>
                      </div>
                    </div>

                     
                    

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Ujian</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jenis_ujian" required>
                            <option selected="selected" disabled="" value="">- Pilih Jenis Ujian -</option>
                            <?php foreach ($jenis_ujian as $a) { ?>
                              <option value="<?= $a->id_jenis_ujian ?>"><?= $a->jenis_ujian; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>

                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Durasi Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="durasi_ujian" placeholder="Masukan Waktu Lama Ujian dalam Menit" required>
                        </div>
                    </div>

                    
                    
                  </div>
                  <!-- /.box-body -->
                  
                    <div class="box-body">
                      <table id="data" class="table table-bordered table-striped">                    
                        <thead>
                          <tr>
                            <th width="1%">No</th>
                            <th>Nama siswa</th>
                            <th>NIS</th>                            
                            <th>Kelas</th>                            
                            <th width="13%">
                              <input type="checkbox" class="check-all" id="cek-semua"/> Pilih Semua
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach($siswa as $d) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $d->nama_siswa; ?></td>                                
                              <td><?php echo $d->nis; ?></td>                                              
                              <td><?php echo $d->nama_kelas; ?></td>                                              
                              <td>
                                <input type="checkbox" name="id[]" value="<?php echo $d->id_siswa; ?>"/>
                              </td>
                            </tr>
                          <?php } ?>                  
                        </tbody>                
                      </table>
                    
                  </div>
                    
                  <div class="box-footer">
                     <a href="<?=base_url('peserta')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                  <button type="submit" class="btn btn-primary btn-flat" ><span class="fa fa-save"></span> Simpan</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->
<!-- <script src="<?php //echo base_url()?>assets/jquery.min.js" type="text/javascript"></script> -->
<script type="text/javascript">
    
  
  // $('#cek-semua').on('click', function () {
  //   $(this).closest('table').find(':checkbox').prop('checked', this.checked);
  // });

  $('#cek-semua').click(function(){
    $('input:checkbox').prop('checked', this.checked);
  })
  //Flat red color scheme for iCheck
  // $('input[type="checkbox"].flat-red').iCheck({
  //   checkboxClass: 'icheckbox_flat-green'
  // });
  


	$(function(){
		$('#data').dataTable();
	});

   $('#datepicker').datepicker({
    autoclose: true,
    todayHighlight: true,
    orientation: "bottom auto",
    format: 'yyyy-mm-dd'
  });
  $('#date').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
  $('#timepicker').timepicker({
    showInputs: false,
    showMeridian: false
  });
  $('#time').timepicker({
    showInputs: false,
    showMeridian: false
  });

  $('.select2').select2();

	$('.alert-dismissible').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

