
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<h2 align="center" style="margin-top:50px;" >Selamat Datang Di Halaman Administrator</h2>
			<p align="center" style="margin-bottom:50px;">Halaman ini adalah halaman administrator</p>
		  <div class="x_content">
		  </div>
		</div>
	</div>
</div>

<div class="row tile_count">	  
  
  <div class="col-md-8 col-sm-8 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>Grafik Permohonan Masuk <small>Minggu Ini</small></h2>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">

		<div id="echart_line" style="height:350px;"></div>

	  </div>
	</div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12 top_tiles">
	<div class="animated flipInY">
		<div class="tile-stats">
		  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
		  <div class="count">
			<?php 
				$result = $mysqli->query("select count(*) as total, 
					sum(if(week(tanggal_terima) = week(now()), 1, 0)) as minggu, 
					sum(if(tanggal_terima = curdate() and kode_analisis like 'K%', 1, 0)) as kimia,
					sum(if(tanggal_terima = curdate() and kode_analisis like 'F%', 1, 0)) as fisika,
					sum(if(tanggal_terima = curdate() and kode_analisis like 'B%', 1, 0)) as biologi,
					sum(if(tanggal_terima = curdate() and kode_analisis like 'M%', 1, 0)) as mineralogi
					from tborder");
				while($data = $result->fetch_assoc()){
					$total = $data['total'];
					$minggu = $data['minggu'];
					$kimia = $data['kimia'];
					$biologi = $data['biologi'];
					$fisika = $data['fisika'];
					$mineralogi = $data['mineralogi'];
				}				
				echo $total;
			?>
		  </div>
		  <h3>Total Permohonan</h3>
		  <p>Permohonan masuk pada minggu ini adalah <?php echo $minggu;?></p>
		</div>
	</div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12 top_tiles">
	<div class="animated flipInY">
		<div class="tile-stats">
			<h3><small><b>Permohonan Pengujian Masuk Hari Ini</b></small></h3>		  
			<?php 
				echo "
					<h3>$kimia <small>Kimia</small></h3>
					<h3>$biologi <small>Biologi</small></h3>
					<h3>$fisika <small>Fisika</small></h3>
					<h3>$mineralogi <small>Mineralogi</small></h3>
				";
			?>		  
		</div>
	</div>
  </div>
</div>
