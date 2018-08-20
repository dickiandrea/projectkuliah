
<div class="page-title">
  <div class="title_left">
	<h3>Rekap Data Selesai</h3>
  </div>
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  	  
	  <div class="x_content" style="margin-top:20px;">		
		<p>Berikut ini adalah daftar data penelitian yang sudah selesai.</p>
		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-konfirmasi" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;" rowspan="2"></th>
			  <th rowspan="2">Pemohon</th>
			  <th rowspan="2">Tanggal<br/><small>Masuk</small></th>
			  <th rowspan="2">Cara<br/><small>Pengiriman<br>Contoh</small></th>
			  <th rowspan="2">Jenis<br/><small>Penelitian</small></th>
			  <th colspan="3">Biaya<br/><small>Analisis</small></th>
			  <th rowspan="2">Nomor<br/><small>SP/LHP</small></th>
			  <th rowspan="2">Tanggal<br/><small>Diambil</small></th>
			  <th rowspan="2" style="width: 10%; max-width: 150px;">Tombol</th>
			</tr>
			<tr>
			  <th>Harga</th>
			  <th>Cara<br><small>Pembayaran</small></th>
			  <th>Status</th>
			</tr>
		  </thead>
		  <tbody id="hasilfilter">
			<?php
				$query = "select a.kode_order, a.tanggal_terima, a.kode_user, b.nama, a.status_kirim, a.status_bayar from tborder as a inner join user as b where a.kode_user = b.kode_user and a.kode_analisis like '%B' order  by a.tanggal_terima ";								
				//var_dump($query);
				$result = $mysqli->query($query);
				$angka = $result->num_rows;
				//var_dump($angka);
				if($angka>0)
				{
						
					while($data = $result->fetch_assoc())
					{
						
					}
				}else{
					echo "<tr><td colspan='11' style='text-align:center;'>Tidak Ada Data</td></tr>";
				}
				
			?>
		  </tbody>
		</table>
		<?php
			if($angka > 0){
				?>
					<div class="col-md-4" style="margin: 10px 0px;"><button onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info" type="button">Print Per Periode</button></div>
				<?php
			}
		?>
		
	  </div>
	</div>
  </div>
 </div>
<!-- The Modal (contains the Sign Up form) -->
<div id="tambah" class="modal" >
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Print Per Periode</h2>
				<span onclick="document.getElementById('tambah').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="laporan/print_laporan_data_periode.php" target="_blank" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >					
					
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Tanggal Akhir <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>								
								<input type="text" name="daterange" class="form-control" id="reportrange" value="01/01/2015 - 01/31/2015" />
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="print" value="rekapsemua">
							<input type="submit" class="btn btn-default col-md-2" name="ok" value="Print" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>
