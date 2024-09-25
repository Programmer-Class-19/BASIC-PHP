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

    <div class="callout callout-info">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan Ujian Online</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt></dt>
                <dd>
                    <ol><br>
                        <li><b>Jadwal Ujian</b></li>
                        di TAB Jadwal Ujian, terdapat jadwal ujian yang telah didaftarkan oleh administrator sebagai peserta ujian bahwa anda berhak melaksanakan ujian. Apbila di ruang tersebut tidak tersedia jadwal ujian silahkan hubungin administrator untuk mendapatkan informasi lebih lanjut
                        selanjutnya ketika anda sudah memiliki waktu ujian, silahkan anda klik tombol <b>Mulai</b> yang tersedia ketika waktu telah menunjukan mulainya waktu ujian.
                        <li><b>Hasil Ujian</b></li>
                        di TAB Hasil Ujian, anda dapat melihat secara langsung hasil ujian yang telah anda lakukan di Ruang Jadwal Ujian.
                        <li><b>Ganti Password</b></li>
                        di TAB Ganti Password, anda dapat mengganti password sesuai keinginan anda setelah anda mendapatkan password default dari pihak administrator. ketika anda lupa password, anda dapat menghubungi pihak administrator agar mendapatkan password terbaru.
                    </ol>
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('siswa/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

