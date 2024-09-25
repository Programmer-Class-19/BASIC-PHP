<form action="<?=base_url('jenis_ujian/create');?>" method="post" class="form-horizontal">
  <div class="box-body">
    <div class="form-group">
      <label class="col-sm-3 control-label">Jenis Ujian</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="nama" required="">
        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-flat pull-right" title="Simpan Data">Simpan</button>
  </div> 
  <!-- /.box-footer -->
</form>
