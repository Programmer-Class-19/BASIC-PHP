<!-- BEGIN DASHBOARD -->
<li>
	<a class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" href="<?=base_url('dashboard')?>">
		<div class="gui-icon"><i class="md md-home"></i></div>
		<span class="title">Dashboard</span>
	</a></li>
	<!--end /menu-li -->
	<!-- END DASHBOARD -->
	
	<!-- BEGIN Akademik -->
	<li class="gui-folder">
		<a>
			<div class="gui-icon"><i class="fa fa-book"></i></div>
			<span class="title">Akademik</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a class="<?php if($this->uri->segment(1)=="siswa"){echo "active";}?>" href="<?=base_url('siswa')?>" ><span class="title">Siswa</span></a></li>
			<li><a class="<?php if($this->uri->segment(1)=="pelajaran"){echo "active";}?>" href="<?=base_url('pelajaran')?>" ><span class="title">Pelajaran</span></a></li>
			<li><a class="<?php if($this->uri->segment(1)=="nilai"){echo "active";}?>" href="<?=base_url('nilai')?>" ><span class="title">Nilai</span></a></li>
		</ul>
		<!--end /submenu -->
		
		<p style="text-align: justify;">