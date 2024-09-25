  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('image/avatar.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        

        <!-- Menu Home -->
        <li <?= $this->uri->segment(1) == 'home_siswa' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('home_siswa');?>"><i class="fa fa-home"></i> 
            <span>Home</span>
          </a>
        </li>
        <!-- Tutup Menu Home -->

        <!-- Menu Data Hasil Ujian -->
        <li <?= $this->uri->segment(1) == 'jadwal_ujian' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('jadwal_ujian');?>"><i class="fa fa-calendar-check-o"></i> 
            <span>Jadwal Ujian</span>
          </a>
        </li>
        <!-- Tutup Data Peserta Ujian -->

        <!-- Menu Data Hasil Ujian -->
        <li <?= $this->uri->segment(1) == 'ruang_hasil' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('ruang_hasil');?>"><i class="fa fa-folder"></i> 
            <span>Hasil Ujian</span>
          </a>
        </li>
        <!-- Tutup Data Peserta Ujian -->


       

        <!-- Menu Data Peserta Ujian -->
        <li <?= $this->uri->segment(2) == 'password' ? 'class="active"' : ''?>>
          <a href="<?php echo base_url('password');?>"><i class="fa fa-lock"></i> 
            <span>Ganti Password</span>
          </a>
        </li>
        <!-- Tutup Data Peserta Ujian -->

        <!-- Menu Data Peserta Ujian -->
        <li>
          <a href="<?php echo base_url('logout');?>"><i class="fa fa-power-off"></i> 
            <span>Keluar Akun</span>
          </a>
        </li>
        <!-- Tutup Data Peserta Ujian -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">