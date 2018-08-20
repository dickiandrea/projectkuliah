
	<div class="col-md-3 left_col ">
	  <div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
		  <a href="?page=edit_administrator" class="site_title"><i class="glyphicon glyphicon-user"></i> <span>Administrator!</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
		  <div class="profile_pic">
			<img src="../images/icon/kambing.png" alt="..." class="img-circle profile_img">
		  </div>
		  <div class="profile_info">
			<span>Selamat datang,</span>
			<h2><?php echo Session::get('namapengguna');?></h2>
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
			  <li><a><i class="fa fa-sitemap"></i> Permohonan Penelitian <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="?page=lihat_permohonan_kimia">Kimia</a></li>
					<li><a href="?page=lihat_permohonan_fisika">Fisika</a></li>
					<li><a href="?page=lihat_permohonan_biologi">Biologi</a></li>
					<li><a href="?page=lihat_permohonan_mineralogi">Mineralogi</a></li>
				</ul>
			  </li>                  			  
   			  <li><a><i class="fa fa-file-text-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
				  <li><a href="?page=lihat_rekap_on_pengambilan">Rekap Data On Pengambilan</a></li>
				  <li><a href="?page=lihat_rekap_selesai">Rekap Data Selesai</a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		  <div class="menu_section">
			<h3>Live On</h3>
			<ul class="nav side-menu">
				<li><a><i class="fa fa-desktop"></i> Daftar Pengguna <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
					  <li><a href="?page=lihat_pengguna_peljas">Pelayanan Jasa</a></li>
					  <li><a href="?page=lihat_pengguna_lab">Laboratorium</a></li>
					  <li><a href="?page=lihat_pengguna_user">User Pelanggan</a></li>
					  <li><a href="?page=lihat_hakakses">Hak Akses</a></li>
					</ul>
			  </li>
			  <li><a><i class="fa fa-windows"></i>Dasar Penelitian<span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
				  <li><a href="?page=lihat_jenis_spermohonan">Jenis SPermohonan</a></li>
				  <li><a href="?page=lihat_jenis_analisis">Jenis Analisis</a></li>
				  <li><a href="?page=lihat_pertanyaan">Pertanyaan</a></li>
				</ul>
			  </li>			  
			</ul>
		  </div>

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
		  <a data-toggle="tooltip" data-placement="top" title="Settings">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		  </a>
		  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
			<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
		  </a>
		  <a data-toggle="tooltip" data-placement="top" title="Lock">
			<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
		  </a>
		  <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
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
			<div class="nav navbar-left">
				<i class="fa fa-search"></i>
				<input type="search" name="search" placeholder="Search" id="search">
			</div>
		  <ul class="nav navbar-nav navbar-right">			

			<li role="presentation" class="dropdown">
			  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
				<i class="fa fa-envelope-o"></i>
				<span class="badge bg-green">6</span>
			  </a>
			  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
				<li>
				  <a>
					<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
					<span>
					  <span>John Smith</span>
					  <span class="time">3 mins ago</span>
					</span>
					<span class="message">
					  Film festivals used to be do-or-die moments for movie makers. They were where...
					</span>
				  </a>
				</li>
				<li>
				  <a>
					<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
					<span>
					  <span>John Smith</span>
					  <span class="time">3 mins ago</span>
					</span>
					<span class="message">
					  Film festivals used to be do-or-die moments for movie makers. They were where...
					</span>
				  </a>
				</li>
				<li>
				  <a>
					<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
					<span>
					  <span>John Smith</span>
					  <span class="time">3 mins ago</span>
					</span>
					<span class="message">
					  Film festivals used to be do-or-die moments for movie makers. They were where...
					</span>
				  </a>
				</li>
				<li>
				  <a>
					<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
					<span>
					  <span>John Smith</span>
					  <span class="time">3 mins ago</span>
					</span>
					<span class="message">
					  Film festivals used to be do-or-die moments for movie makers. They were where...
					</span>
				  </a>
				</li>
				<li>
				  <div class="text-center">
					<a>
					  <strong>See All Alerts</strong>
					  <i class="fa fa-angle-right"></i>
					</a>
				  </div>
				</li>
			  </ul>
			</li>
		  </ul>
		</nav>
	  </div>
	</div>  