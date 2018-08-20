
<div class="page-title">
  <div class="title_left">
	<h3>Data Permohonan Penelitian <small> Biologi</small></h3>
  </div>
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  	  
	  <div class="x_content" style="margin-top:20px;">		
		<p>Berikut ini adalah daftar data permohonan penelitian biologi.</p>
		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-konfirmasi" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th>Kode<br/><small>Order</small></th>
			  <th>Tanggal<br/><small>Order</small></th>
			  <th>Kode<br/><small>User</small></th>
			  <th>Nama<br/><small>User</small></th>
			  <th>Status<br/><small>Sampel</small></th>
			  <th>Status<br/><small>Pembayaran</small></th>
			  <th style="width: 10%; max-width: 150px;">Tombol</th>
			</tr>
		  </thead>
		  <tbody id="hasilfilter">
			<?php
				$query = "select a.kode_order, a.tanggal_terima, a.kode_user, b.nama, a.status_kirim, a.status_bayar from tborder as a inner join user as b where a.kode_user = b.kode_user and a.kode_analisis like '%B' order  by a.tanggal_terima ";								
				//var_dump($query);
				$result = $mysqli->query($query);
				$angka = $result->num_rows;
				$unik = NULL;
				//var_dump($angka);
				if($angka>0)
				{
						
					while($data = $result->fetch_assoc())
					{
						$unik = $data['kode_order'];
						$status_sampel = strtolower($data['status_kirim']);
						$status_bayar = strtolower($data['status_bayar']);
					echo "<tr>
							  <td></td>
							  <td align=\"center\">".$data['kode_order']."</td>			  
							  <td align=\"center\">".$data['tanggal_terima']."</td>			  
							  <td align=\"center\">".$data['kode_user']."</td>
							  <td align=\"center\">".$data['nama']."</td>";
							  if($status_sampel != "belum dikirim"){
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-success btn-md\" style=\"width:100%;\">Sudah Lengkap</span><br>
									Ubah ke 
									<a onclick=\"return confirm('Ubah menjadi Belum Lengkap?');\" href=\"?page=update_permohonan_biologi&kode_order=".$data['kode_order']."&sampel=belum\" class=\"btn btn-danger btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-minus-square\"></i></a>
								</td>";  
							  }else{
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lengkap</span><br>
									Ubah ke 
									<a onclick=\"document.getElementById('statuscontoh').style.display='block'\"  class=\"btn btn-success btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-check-square\"></i></a>
								</td>";  
							  }
							  if($status_bayar != "belum dibayar"){
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-success btn-md\" style=\"width:100%; \">Lunas</span><br>
									Ubah ke 
									<a onclick=\"return confirm('Ubah menjadi Belum Lunas?');\" href=\"?page=update_permohonan_biologi&kode_order=".$data['kode_order']."&bayar=belum\" class=\"btn btn-danger btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-minus-square\"></i></a>
								</td>";  
							  }else{
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lunas</span><br>
									Ubah ke 
									<a onclick=\"document.getElementById('statusbayar').style.display='block'\"  class=\"btn btn-success btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-check-square\"></i></a>
								</td>";  
							  }
													  
					echo "
							  <td align=\"center\">
								<a href=\"?page=lihat_permohonan_biologi_detail&kode_order=".$data['kode_order']."\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-file-text-o\"></i> Lihat Detail</a>
							  </td>
						</tr>";
					}
				}else{
					echo "<tr><td colspan='8' style='text-align:center;'>Tidak Ada Data</td></tr>";
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
							<input class="btn btn-primary" type="hidden" name="print" value="biologi">
							<input type="submit" class="btn btn-default col-md-2" name="ok" value="Print" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>

<div id="statuscontoh" class="modal" >
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Konfirmasi Kelengkapan Contoh</h2>
				<span onclick="document.getElementById('statuscontoh').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="?page=update_permohonan_biologi" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >					
					
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Tanggal Konfirmasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>								
								<input type="text" name="tanggal" class="form-control"  />
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="sampel" value="lengkap">
							<input class="btn btn-primary" type="hidden" name="kode_order" value="<?php echo $unik; ?>">
							<input type="submit" class="btn btn-default col-md-4" name="ok" value="Konfirmasi Kelengkapan" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>

<div id="statusbayar" class="modal" >
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Konfirmasi Pembayaran</h2>
				<span onclick="document.getElementById('statusbayar').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="?page=update_permohonan_biologi" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >					
					
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Tanggal Konfirmasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>								
								<input type="text" name="tanggal" class="form-control"  />
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="bayar" value="sudah">
							<input class="btn btn-primary" type="hidden" name="kode_order" value="<?php echo $unik; ?>">
							<input type="submit" class="btn btn-default col-md-4" name="ok" value="Konfirmasi Pembayaran" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>
