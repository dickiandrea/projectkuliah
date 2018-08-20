
<div class="page-title">
  <div class="title_left">
	<h3>Data Progres Pengujian <small> Kimia</small></h3>
  </div>
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  	  
	  <div class="x_content" style="margin-top:20px;">		
		<p>Berikut ini adalah data progres pengujian kimia.</p>
		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-konfirmasi" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th>Nama<br/><small>User</small></th>
			  <th>Kode<br/><small>Order</small></th>
			  <th>Tanggal<br/><small>Order</small></th>
			  <th>Status<br/><small>Kaji Ulang</small></th>
			  <th>Status<br/><small>Selesai</small></th>
			  <th>Status<br/><small>Progres</small></th>
			  <th style="width: 10%; max-width: 150px;">Tombol</th>
			</tr>
		  </thead>
		  <tbody id="hasilfilter">
			<?php
				$query = "
				select distinct a.kode_order, a.tanggal_terima, a.kode_user, b.nama, c.selesai, c.kaji_ulang, c.selesai, c.progres
				from 
					tborder as a inner join user as b inner join status as c 
				where 
					a.kode_order = c.kode_order and a.kode_user = b.kode_user and a.kode_analisis like 'K%' 
					and c.pengambilan ='' and (c.selesai ='' or c.selesai >= now() ) and progres !='100'
				order  by a.kode_order

				";
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
						$kaji_ulang = $data['kaji_ulang'];
						$selesai = $data['selesai'];
						$progres = $data['progres'];
					echo "<tr>
							  <td></td>
							  <td align=\"center\">".$data['nama']."</td>
							  <td align=\"center\">".$data['kode_order']."</td>			  
							  <td align=\"center\">".$data['tanggal_terima']."</td>";
							  if($kaji_ulang != ""){
								echo "<td align=\"center\">
								<span class=\"btn btn-success btn-sm\">
									<i class=\"fa fa-check-square\" style=\"margin-right:5px;\"></i>
									".Convert::convert_tanggal($kaji_ulang)."
								</span></td>";  
							  }else{
								  echo "<td align=\"center\">
								<span class=\"btn btn-danger btn-sm\">
									<i class=\"fa fa-minus-square\" style=\"margin-right:5px;\"></i> Belum Terkonfirmasi
								</span></td>";
							  }
								
							  		
							  if($selesai != ""){
								echo "<td align=\"center\">
								<span class=\"btn btn-success btn-sm\">
									<i class=\"fa fa-check-square\" style=\"margin-right:5px;\"></i>
									".Convert::convert_tanggal($selesai)."
								</span></td>";  
							  }else{
								  echo "<td align=\"center\">
								<span class=\"btn btn-danger btn-sm\">
									<i class=\"fa fa-minus-square\" style=\"margin-right:5px;\"></i> Belum Terkonfirmasi
								</span></td>";
							  }
							  
							  if($progres == ""){
								echo "<td align=\"center\">-</td>";
							  }else{
								  ?>
								  <td>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" style="width: <?php echo $progres;?>%;">
											<?php echo $progres;?>%
										</div>																				
									</div>
								  </td>
								  <?php
							  }
							  
					echo "	
							  <td align=\"center\">
								<a href=\"?page=lihat_proses_kimia_detail&kode_order=".$data['kode_order']."\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-file-text-o\"></i> Lihat Detail</a>
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
							<input class="btn btn-primary" type="hidden" name="print" value="kimia">
							<input type="submit" class="btn btn-default col-md-2" name="ok" value="Print" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>

