<?php 
$this->load->view('siswa/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('siswa/topbar');
$this->load->view('siswa/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            

            <!-- Default box -->
            <div class="box box-success" style="overflow-x: scroll;">
                <div class="box box-header" >
                    <center><h3 class="box-title">Hasil Ujian</h3></center>
                </div>
              <div class="box-body">
                <table id="data" class="table table-bordered table-striped">                    
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th> Pelajaran</th>                            
                            <th> Tanggal Ujian</th>                            
                            <th> Jam </th>                            
                            <th> Benar</th>                            
                            <th> Salah</th>                            
                            <th> Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach($hasil as $d) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>                              
                                <td><?php echo $d->nama_matapelajaran; ?></td>                                
                                <td><?php echo date('d-m-Y',strtotime($d->tanggal_ujian)); ?></td>                               
                                <td><?php echo date('H:i:s',strtotime($d->jam_ujian)); ?></td>                                
                                <td>
                                    <?php
                                    if($d->benar == ''){
                                        echo "<span class='btn btn-xs btn-warning'>Belum Ujian</span>";
                                    }else {
                                        echo $d->benar;
                                    }
                                    ?>
                                </td>                                
                                <td>
                                    <?php
                                    if($d->salah == ''){
                                        echo "<span class='btn btn-xs btn-warning'>Belum Ujian</span>";
                                    }else {
                                        echo $d->salah;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($d->nilai == ''){
                                        echo "<span class='btn btn-xs btn-warning'>Belum Ujian</span>";
                                    }else {
                                        echo $d->nilai;
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
</div>
<!-- ./row -->
</section><!-- /.content -->

<?php 
$this->load->view('siswa/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>

<?php
$this->load->view('siswa/foot');
?>

