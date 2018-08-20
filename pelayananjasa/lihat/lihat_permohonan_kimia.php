
<div class="page-title">
  <div class="title_left">
	<h3>Data Permohonan Pengujian <small> Kimia</small></h3>
  </div>
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  	  
	  <div class="x_content" style="margin-top:20px;">		
		<p>Berikut ini adalah daftar data permohonan pengujian kimia.</p>
		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-konfirmasi" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th style="min-width: 90px;">Tanggal<br/><small>Order</small></th>
			  <th>Nama<br/><small>User</small></th>
			  <th>Status<br/><small>Sampel</small></th>
			  <th>Status<br/><small>Pembayaran</small></th>
			  <th style="width: 10%; max-width: 150px;">Tombol</th>
			</tr>
		  </thead>
		  <tbody id="hasilfilter">
			<?php
				$query = "
					select DISTINCT a.id, a.tanggal_terima, a.kode_user, b.nama, c.contoh, c.bayar, a.kode_analisis
						from 
							tborder as a inner join user as b inner join status as c 
						where 
							c.kode_order = '' and c.nomer_contoh = '' and a.id = c.id_order and (a.kode_user = b.kode_user and a.kode_analisis like 'K%')
						order by 
							a.tanggal_terima, a.id
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
						$status_sampel = $data['contoh'];
						$status_bayar = $data['bayar'];
					echo "<tr>
							  <td></td>	  
							  <td align=\"center\">".Convert::convert_tanggal($data['tanggal_terima'])."</td>			  
							  <td align=\"center\">".$data['nama']."</td>";
							  if($status_sampel != NULL){
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-success btn-md\" style=\"width:100%;\">Sudah Lengkap</span><br>
									Ubah ke 
									<a onclick=\"return confirm('Ubah menjadi Belum Lengkap?');\" href=\"?page=update_permohonan_kimia&id_order=".$data['id']."&sampel=belum\" class=\"btn btn-danger btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-minus-square\"></i></a>
								</td>";  
							  }else{
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lengkap</span><br>
									Ubah ke 
									<a href=\"?page=update_permohonan_kimia&id_order=".$data['id']."&update=contoh\" class=\"btn btn-success btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-check-square\"></i></a>
								</td>";  
							  }
							  if($status_bayar != NULL){
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-success btn-md\" style=\"width:100%; \">Lunas</span><br>
									Ubah ke 
									<a onclick=\"return confirm('Ubah menjadi Belum Lunas?');\" href=\"?page=update_permohonan_kimia&id_order=".$data['id']."&bayar=belum\" class=\"btn btn-danger btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-minus-square\"></i></a>
								</td>";  
							  }else{
								echo "
								<td align=\"center\" style=\"padding: 10px 15px 3px 15px;\">
									<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lunas</span><br>
									Ubah ke 
									<a href=\"?page=update_permohonan_kimia&id_order=".$data['id']."&update=bayar\" class=\"btn btn-success btn-xs\" style=\"margin-left:5px;\"><i class=\"fa fa-check-square\"></i></a>
								</td>";  
							  }
						if($status_bayar  == NULL or $status_sampel == NULL){
						
							echo "
									  <td align=\"center\">
										<span class=\"btn btn-warning btn-md disable\">Proses Pengujian</span><br>
										<a href=\"?page=lihat_permohonan_kimia_detail&id_order=".$data['id']."\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-file-text-o\"></i> Lihat Detail</a>
									  </td>
								</tr>";	
						}else{
							
							echo "
									  <td align=\"center\">
										<a href=\"?page=update_permohonan_kimia&id_order=".$data['id']."&update=berikode\" class=\"btn btn-danger btn-md\">Proses Pengujian</a><br>
										<a href=\"?page=lihat_permohonan_kimia_detail&id_order=".$data['id']."\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-file-text-o\"></i> Lihat Detail</a>
									  </td>
								</tr>";	
						}
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