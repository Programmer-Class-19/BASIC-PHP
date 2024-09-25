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

            <div class="box box-success" style="overflow-x: scroll;">
              <div class="box-header">
                


                            <!-- /. modal  -->
                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <center><h4 class="modal-title">Tambah Mata Pelajaran</h4></center>
                      </div>
                      <!-- /.form dengan modal -->
                      <form method="post" action="<?php echo base_url().'matapelajaran/mapel_aksi'; ?>">
                        <div class="modal-body">
                          <div class="form-group">
                            <label class="font-weight-bold">Kode Mata Pelajaran </label>
                            <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Mata Pelajaran" required="">
                          </div>
                          <div class="form-group">
                            <label class="font-weight-bold">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mata Pelajaran" required="">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
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


 

                    <center><div class="box-title">Tambah Soal Ujian</div></center>

                </div><!-- /.box-header -->
                <form action="<?= base_url('soal/insert'); ?>" method="post">
                    <div class="box-body">

                        <div class="form-horizontal">

                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <select class="select2 form-control" name="nama_matapelajaran" required="">
                                        <option selected="selected" disabled="" value="">- Pilih Mata Pelajaran -</option>
                                        <?php foreach ($soal as $a) { ?>
                                            <option value="<?= $a->id_matapelajaran ?>"><?= $a->kode_matapelajaran; ?> | <?= $a->nama_matapelajaran; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tulis Soal Ujian</label>
                                <div class="col-sm-10">
                                    <textarea  class="soal" name="soal" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban A</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="a" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban B</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="b" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban C</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="c" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban D</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="d" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban E</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="e" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kunci Jawaban</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="kunci" required>
                                        <option selected="selected" disabled="" value="">- Pilih Kunci Jawaban -</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                     <a href="<?=base_url('soal_ujian')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-flat" title="Tambah Data Soal Ujian"><span class="fa fa-save"></span> Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
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

<script type="text/javascript">
    $(function() {
        $('#data-tables').dataTable();
    });

    $('.select2').select2();

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>


<?php
$this->load->view('admin/foot');
?>