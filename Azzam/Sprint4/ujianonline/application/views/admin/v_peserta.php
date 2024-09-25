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

             <!-- Default box -->
      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header">
          <center><h4 class="box-title">Daftar Peserta Ujian</h4></center><p>
          <h3 class="box-title"></h3>
          <a href="<?php echo base_url('peserta_tambah'); ?>"><button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#peserta_tambah" ><span class="fa fa-plus"></span> Tambah </button></a>
          <a href="<?php echo base_url('jenis_ujian'); ?>"><button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#" ><span ></span>Data Jenis Ujian</button></a>



        </div>
        <!-- /.box-header -->

           

                
                <div class="box-body" style="overflow-x: scroll;">
                    <table id="data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Jenis Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Durasi Ujian</th>
                                <th width="7%">Action</th>
                                <th>Status </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $d) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d->nama_siswa; ?></td>
                                    <td><?php echo $d->nama_kelas; ?></td>
                                    <td><?php echo $d->nama_matapelajaran; ?></td>
                                    <td><?php echo $d->jenis_ujian; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($d->tanggal_ujian)); ?> | <?php echo $d->jam_ujian; ?></td>
                                    <td><?php echo $d->durasi_ujian; ?> Menit</td>
                                    <td>
                                        <?php if ($d->nilai == null) { ?>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning btn-flat btn-xs">Action</button>
                                                <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="<?= base_url() . 'peserta/edit/' . $d->id_peserta; ?>">Edit Data</a></li>
                                                    <li><a href="<?= base_url() . 'peserta/hapus/' . $d->id_peserta; ?>" onclick="return confirm('Apakah yakin data peserta ini di hapus?')">Hapus Data</a></li>
                                                </ul>
                                            </div>
                                        <?php } else {
                                            echo '-';
                                        }
                                         ?>
                                        
                                    </td>
                                    <td>
                                        <?php if ($d->status_ujian == "1") {
                                                echo "<span class='btn btn-xs btn-default'> Belum Ujian </span>";
                                            } else if ($d->status_ujian == "2") {
                                                echo "<span class='btn btn-xs btn-success'> Selesai Ujian </span>";
                                            }
                                            ?>
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col-->

           

            <!-- MODAL CETAK DAFTAR HADIR -->
        </div>
        <!-- ./row -->
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#data').DataTable({
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });

    $('.select2').select2();

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>
<?php
$this->load->view('admin/foot');
?>