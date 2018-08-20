
	<div class="col-md-3 left_col ">
	  <div class="left_col scroll-view">		

		<!-- menu profile quick info -->
		<div class="profile clearfix">
		  <div class="profile_pic">
			<img src="../images/icon/kambing.png" alt="..." class="img-circle profile_img">
		  </div>
		  <div class="profile_info">
			<span>Selamat datang,</span>
			<h2><?php echo Session::get('namapelayanan');?></h2>
		  </div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		  <div class="menu_section">
			<h3>General</h3>
			<ul class="nav side-menu">
			  <li><a href="?page="><i class="fa fa-home"></i> Home </a>
			  </li>			  
			  <li><a><i class="fa fa-sitemap"></i> Pengajuan Penelitian <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="?page=lihat_permohonan_kimia">Kimia</a></li>
					<li><a href="?page=lihat_permohonan_fisika">Fisika</a></li>
					<li><a href="?page=lihat_permohonan_biologi">Biologi</a></li>
					<li><a href="?page=lihat_permohonan_mineralogi">Mineralogi</a></li>
				</ul>
			  </li>                  			  
			  <li><a><i class="fa fa-line-chart"></i> Proses Penelitian <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="?page=lihat_proses_kimia">Kimia</a></li>
					<li><a href="?page=lihat_proses_fisika">Fisika</a></li>
					<li><a href="?page=lihat_proses_biologi">Biologi</a></li>
					<li><a href="?page=lihat_proses_mineralogi">Mineralogi</a></li>
				</ul>
			  </li>                  			  
   			  <li><a><i class="fa fa-file-text-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
				  <li><a href="?page=lihat_rekap_on_penelitian">Rekap Data On Progres</a></li>
				  <li><a href="?page=lihat_rekap_on_pengambilan">Rekap Data On Pengambilan</a></li>
				  <li><a href="?page=lihat_rekap_selesai">Laporan Akhir</a></li>
				</ul>
			  </li>
			  <li><a><i class="fa fa-comments-o"></i> Pesan Chat <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
					  <li><a href="?page=pesan_chat">Pelanggan</a></li>
					  <li><a href="?page=peljas_chat">Admin</a></li>
					</ul>
				</li>
			  <li><a><i class="fa fa-cogs"></i>Pengaturan<span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
				  <li><a onclick="return confirm('Apakah anda yakin ingin keluar?');" title="Logout" href="logout.php">Logout</a></li>				  
				</ul>
			  </li>	
			</ul>
		  </div>

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
		  <a onclick="return confirm('Apakah anda yakin ingin keluar?');" class="pull-right" data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
			<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
		  </a>
		</div>
		<!-- /menu footer buttons -->
	  </div>
	</div>

	<!-- top navigation -->
	<div class="top_nav">
	  <div class="nav_menu">
		<nav>
		  <div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		  </div>
		</nav>
	  </div>
	</div>  