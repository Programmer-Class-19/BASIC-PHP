<form action="<?=base_url('siswa/create');?>" method="post" class="form-horizontal">
  <div class="box-body">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">NIS</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nis" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Kelas</label>
      <div class="col-sm-10">
        <select class="select2 form-control" name="kelas" required="">                    
          <?php foreach($kelas as $k) { ?>
            <option value="<?=$k->id_kelas?>" ><?= $k->nama_kelas;?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password" required>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-flat pull-right" title="Simpan Data siswa">Simpan</button>
  </div> 
  <!-- /.box-footer -->
</form>
