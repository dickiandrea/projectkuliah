<?php
require_once "../pusatdata/core/init.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/logo/logo-simpel.png">
    <title>SIMPEL - Balai Penelitian Tanah </title>

    <!-- Bootstrap -->
    <link href="../pusatdata/css/bootstrap.min.css" rel="stylesheet">
    <link href="../pusatdata/css/custom.min.css" rel="stylesheet">
    <link href="../pusatdata/css/simpel.css" rel="stylesheet">
	
</head>
<body style="background-image:url('../images/background.jpg');color:#5c6d1b;">
  <div class="col-md-10" style="margin:0px 7%;">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="text-align:center;">
				<img src="../images/logo/balittanah.png" title="Logo Balittanah" style="width:100px;"/>
				<h1 style="margin-top:20px; font-size: 30px;">Sistem Administrasi Permohonan Pengujian Tanah</h1>
				<h2 style="font-size:18px;">Balai Penelitian Tanah (Balittanah)</h2>
				<p>Jl. Tentara Pelajar No. 12 Cimanggu, Bogor, Jawa Barat, Indonesia, 16114</p>
				<p >Admin silahkan login <a href="login.php">disini</a></p>
			  <div class="x_content">
				  <div class="col-md-4 col-sm-4 col-xs-12 top_tiles">
					<div class="animated flipInY">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
						  <div class="count">
							<?php 
								$result = $mysqli->query("select count(*) as total, 
									sum(if(week(tanggal_terima) = week(now()), 1, 0)) as minggu,									
									b.totalselesai, c.blmkimia,c.blmfisika,c.blmbiologi,c.blmmineralogi, d.progkimia, d.progfisika, d.progbiologi, d.progmineralogi
									from tborder
									join
									(
										select count(*) as totalselesai
										from status
										where pengambilan != ''
									)b
									join
									(
										select 
											sum(if(kode_analisis like 'K%', 1, 0)) as blmkimia,
											sum(if(kode_analisis like 'F%', 1, 0)) as blmfisika,
											sum(if(kode_analisis like 'B%', 1, 0)) as blmbiologi,
											sum(if(kode_analisis like 'M%', 1, 0)) as blmmineralogi
										from tborder
										where
											kode_order = 'Belum Ada Kode Order'
									)c
									join
									(
										select 
											sum(if(kode_analisis like 'K%', 1, 0)) as progkimia,
											sum(if(kode_analisis like 'F%', 1, 0)) as progfisika,
											sum(if(kode_analisis like 'B%', 1, 0)) as progbiologi,
											sum(if(kode_analisis like 'M%', 1, 0)) as progmineralogi
										from tborder inner join status
										where
											tborder.kode_order = status.kode_order and status.pengambilan = ''
									)d
									");
								while($data = $result->fetch_assoc()){
									$total = $data['total'];
									$totalselesai = $data['totalselesai'];
									$blmkimia = $data['blmkimia'];
									$blmbiologi = $data['blmbiologi'];
									$blmfisika = $data['blmfisika'];
									$blmmineralogi = $data['blmmineralogi'];
									$progbiologi = $data['progbiologi'];
									$progfisika = $data['progfisika'];
									$progkimia = $data['progkimia'];
									$progmineralogi = $data['progmineralogi'];
									$minggu = $data['minggu'];
								}				
								echo $total;
							?>
						  </div>
						  <h3>Total Permohonan</h3>
						  <p>Permohonan masuk pada minggu ini adalah <?php echo $minggu;?></p>
						</div>
					</div>
				  </div>
				  <div class="col-md-4 col-sm-5 col-xs-12 top_tiles">
					<div class="animated flipInY">
						<div class="tile-stats" style="padding: 10px 0px;">
							<h4><b>Permohonan <u>Belum</u> Terkonfirmasi</b></h4>
							<div class="row clearfix" style="margin-top:17px; text-align:center;">
								<div class="col-md-3">
									<h3><?php echo $blmkimia;?></h3><h4>Kimia</h4>
								</div>
								<div class="col-md-2">
									<h3><?php echo $blmfisika;?></h3><h4>Fisika</h4>
								</div>
								<div class="col-md-3">
									<h3><?php echo $blmbiologi;?></h3><h4>Biologi</h4>
								</div>
								<div class="col-md-3">
									<h3><?php echo $blmmineralogi;?></h3><h4>Mineralogi</h4>
								</div>
							</div>		  
						</div>
					</div>
				  </div>
				  <div class="col-md-4 col-sm-5 col-xs-12 top_tiles">
					<div class="animated flipInY">
						<div class="tile-stats" style="padding: 10px 0px;">
							<h4><b>Permohonan <u>Sudah</u> Terkonfirmasi</b></h4>
							<div class="row clearfix" style="margin-top:17px; text-align:center;">
								<div class="col-md-3">
									<h3><?php echo $progkimia;?></h3><h4>Kimia</h4>
								</div>
								<div class="col-md-2">
									<h3><?php echo $progfisika;?></h3><h4>Fisika</h4>
								</div>
								<div class="col-md-3">
									<h3><?php echo $progbiologi;?></h3><h4>Biologi</h4>
								</div>
								<div class="col-md-3">
									<h3><?php echo $progmineralogi;?></h3><h4>Mineralogi</h4>
								</div>
							</div>		  
						</div>
					</div>
				  </div>
			  <div class="col-md-12 col-sm-12 col-xs-12">			  
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
			  </div>
			</div>
		</div>				
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="text-align:center;">
				<h1 style="margin-top:20px;">BALITTANAH</h1>
				<h2><b>Balai Penelitian Tanah</b> | Badan LITBANG Pertanian | Kementrian Pertanian | Indonesia</h2>
			  <div class="x_content" >
				<div class="col-sm-4 col-sm-4">
						<h4>Alamat Lengkap</h4>
						<address>
						<strong>Jl. Tentara Pelajar</strong><br>
						 No. 12 Cimanggu, Bogor<br>
						 Indonesia, 16114<br>
						 </address>
				</div>
				<div class="col-sm-4 col-sm-4">						
						<p><br>
							<i class="icon-phone"></i> Telepon :(0251) 833-6757 <br>
							<i class="icon-phone"></i> Fax : (0251) 8322-933 / 8321-608 <br><br>
						</p>
				</div>
				<div class="col-sm-4 col-sm-4">
						<p>
							<i class="icon-phone"></i> Email : <br>
							<i class="icon-envelope-alt"></i> balittanah@litbang.pertanian.go.id <br>
							<i class="icon-envelope-alt"></i>pelayananbalittanah@gmail.com
						</p>
				</div>
			  </div>
				  
			</div>
		</div>				
	
  </div>
</body>
</html>

<!-- jQuery -->
    <script src="../pusatdata/js/jquery.min.js"></script>
    <script src="../pusatdata/js/jquery.dataTables.js"></script>
    <!-- Bootstrap -->
    <script src="../pusatdata/js/bootstrap.min.js"></script>
    <script src="../pusatdata/js/bootstrap-select.js"></script>
	
    <!-- FastClick -->
    <script src="../pusatdata/js/fastclick.js"></script>

    <!-- Chart.js -->
    <script src="../pusatdata/js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../pusatdata/js/gauge.min.js"></script>
    <!-- iCheck -->
    <script src="../pusatdata/js/icheck.min.js"></script>
	
	<!-- PDFmake -->
    <script src="../pusatdata/js/pdfmake.min.js"></script>
    <script src="../pusatdata/js/vfs_fonts.js"></script>
	
    <!-- Flot -->    
    
    <script src="../pusatdata/js/morris.min.js"></script>
    <script src="../pusatdata/js/raphael.min.js"></script>
    <script src="../pusatdata/js/echarts.min.js"></script>
	
	
    <!-- DateJS -->
    <script src="../pusatdata/js/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../pusatdata/js/moment.min.js"></script>
    <script src="../pusatdata/js/daterangepicker.js"></script>
    <script src="../pusatdata/js/validator.js"></script>
	
	<!-- datatables -->
    <script src="../pusatdata/js/dataTables.responsive.min.js"></script>
    <script src="../pusatdata/js/responsive.bootstrap.js"></script>
    <script src="../pusatdata/js/dataTables.bootstrap.min.js"></script>
	
    <!-- Custom Theme Scripts -->
    <script src="../pusatdata/js/custom.min.js"></script>
    <script src="../pusatdata/js/simpel.js"></script>
	