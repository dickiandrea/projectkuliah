<?php
$syarat = Input::get('kode_order');
$kata = "
		select a.kode_order, a.tanggal_terima,a.kode_user, a.kode_analisis, a.contoh_tanah,
		a.contoh_tanaman, a.contoh_pupuk, a.contoh_air, a.contoh_ring, a.contoh_bulk, a.desa,
		a.kecamatan, a.kabupaten, a.provinsi, a.koordinat, a.pertanyaan, a.total_biaya, a.status_bayar,
		a.status_kirim, b.nama_analisis, c.nama, c.instansi, c.alamat_instansi, c.telp from tborder as 
		a inner join jenis_analisis as b inner join user as c where a.kode_analisis = b.kode_analisis and
		c.kode_user = a.kode_user and a.kode_order = '$syarat'
	";
//var_dump($kata)	;die();
$result = $mysqli->query($kata)	;
while($data = $result->fetch_assoc()){
	$kode_order = $data['kode_order'];
	$tanggal_terima = $data['tanggal_terima'];
	$kode_user = $data['kode_user'];
	$contoh_tanah = $data['contoh_tanah'];
	$contoh_tanaman = $data['contoh_tanaman'];
	$contoh_pupuk = $data['contoh_pupuk'];
	$contoh_air = $data['contoh_air'];
	$contoh_ring = $data['contoh_ring'];
	$contoh_bulk = $data['contoh_bulk'];
	$desa = $data['desa'];
	$kecamatan = $data['kecamatan'];
	$kabupaten = $data['kabupaten'];
	$provinsi = $data['provinsi'];
	$koordinat = $data['koordinat'];
	$pertanyaan = $data['pertanyaan'];
	$total_biaya = $data['total_biaya'];
	$status_kirim = $data['status_kirim'];
	$status_bayar = $data['status_bayar'];
	$nama_analisis = $data['nama_analisis'];
	$nama = $data['nama'];
	$instansi = $data['instansi'];
	$alamat_instansi = $data['alamat_instansi'];
	$telp = $data['telp'];
	
}
?>

<div id="tambah" class="modal" style="display:block;">
	<div id="laporan_penelitian" class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Lembar Permohonan Penelitian Lengkap</h2>
				<a href="laporan/print_permohonan_kimia_detail.php?kode_order=<?php echo $kode_order;?>" target="_blank"><span style="color:black; line-height: 30px; float: right; margin-right: 50px;" title="Close Modal">print <i class="fa fa-print"></i></span></a> 
				<a href="?page=lihat_permohonan_kimia"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>				
			  </div>
			  
			  <div class="x_content">	  
			  
				<div class="row laporan_detail">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>PERMOHONAN ANALISIS KIMIA TANAH</h2>
						<h4>No. Order : <b style="color:#34495e;"><?php echo substr($kode_order, 6, 5);?></b>/LP Balittanah/<b style="color:#34495e;"><?php echo substr($kode_order, 3, 2);?></b>/20<b style="color:#34495e;"><?php echo substr($kode_order, 0, 2);?></b></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Tanggal Terima </p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;"><?php echo Convert::convert_tanggal($tanggal_terima);?></p><hr style="margin-top:-10px;margin-bottom:0px;">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Jumlah Contoh </p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p style="color:#34495e;font-weight:bold;"><?php echo $contoh_tanah;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Tanah</p>
							</div>							
						</div>
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p style="color:#34495e;font-weight:bold;"><?php echo $contoh_tanaman;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Tanaman</p>
							</div>							
						</div>
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p style="color:#34495e;font-weight:bold;"><?php echo $contoh_pupuk;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Pupuk</p>
							</div>							
						</div>
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p style="color:#34495e;font-weight:bold;"><?php echo $contoh_air;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Air</p>
							</div>							
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Asal Contoh </p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Desa &#160 :</p>
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-4 col-xs-2">
								<p style="color:#34495e;font-weight:bold;"><?php echo $desa;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>							
						</div>
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Kec. &#160 :</p>
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-4 col-xs-2">
								<p style="color:#34495e;font-weight:bold;"><?php echo $kecamatan;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>							
						</div>
					</div>
				</div>					
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p></p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p></p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Kab. &#160 :</p>
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-4 col-xs-2">
								<p style="color:#34495e;font-weight:bold;"><?php echo $kabupaten;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>							
						</div>
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>Prov. &#160 :</p>
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-4 col-xs-2">
								<p style="color:#34495e;font-weight:bold;"><?php echo " ".$provinsi;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>							
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p></p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p></p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<div class="item item-grup ">
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-1 col-xs-1">
								<p>GPS. &#160 :</p>
							</div>
							<div style="padding-left:0px !important; text-align:center;" class="col-sm-10 col-xs-10">
								<p style="color:#34495e;font-weight:bold;"><?php echo $koordinat;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
							</div>							
						</div>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Nama Pengirim </p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;"><?php echo $nama;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Dari Instansi </p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;"><?php echo $instansi;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Alamat</p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;"><?php echo $alamat_instansi;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Telepon</p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-8 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;"><?php echo $telp;?></p><hr style="margin-top:-10px;margin-bottom:0px;">
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Status Pembayaran</p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<p style="color:#34495e;font-weight:bold;">							
							<?php 
								if($status_bayar == "sudah dibayar"){
									echo "<span class=\"btn btn-success btn-md\" style=\"width:100%;\">Sudah Berdonasi</span><br>";
								}else{
									echo "<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Berdonasi</span><br>";
								}
									
							?>
						</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4"><p>Status Kelengkapan Contoh</p></div>
					<div class="col-xs-1" style="max-width: 5px !important;"><p> : </p></div>
					<div class="col-md-3 col-sm-10 col-xs-8">
						<p style="color:#34495e;font-weight:bold;">
							<?php 
								if($status_kirim == "sudah dikirim"){
									echo "<span class=\"btn btn-success btn-md\" style=\"width:100%;\">Sudah Lengkap</span><br>";
								}else{
									echo "<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lengkap</span><br>";
								}
									
							?>
						</p>
					</div>
				</div>
				<div class="row laporan_detail">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h4><b>Daftar Pilihan Pengujian</b></h4>
					</div>
				</div>
				
				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				  <thead>
					<tr>
					  <th style="width: 1%;">No</th>
					  <th>Jenis<br/><small>Analisis</small></th>
					  <th>Tarif *<br/><small>(Rp./Contoh)</small></th>
					  <th>Jumlah<br/><small>Contoh</small></th>
					  <th>Biaya<br/><small>(Rp.)</small></th>
					</tr>
				  </thead>
				  <tbody>
					<?php
						$pertanyaan = rtrim($pertanyaan," ,");
						$index_pertanyaan = explode(",", $pertanyaan);
						$tmp = "salah";
						$i = 1;$n=0;
						$syarat = null;
						foreach($index_pertanyaan as $key => $value){
							$syarat .= "kode_pertanyaan = '".ltrim($value," ")."' or ";
						}												
						$value = rtrim($syarat, "or ");
						$query = "select kelompok, isi_pertanyaan, tarif, kode_pertanyaan from pertanyaan where $value";										
						//var_dump($query);
						$result = $mysqli->query($query);
						while($data = $result->fetch_assoc())
						{
							if($tmp != $data['kelompok']){
								echo "<tr>
								  <td>";echo $i;$i++;
								echo "</td>
								  <td>".$data['kode_pertanyaan']."</td>			  
								  <td>".$data['isi_pertanyaan']."</td>			  
								  <td>".$data['kelompok']."</td>
								  <td>Rp.".$contoh_tanah*$data['tarif']."</td>
								</tr>";
								$tmp = $data['kelompok'];
							}else{
								echo "<tr>
								  <td></td>
								  <td>".$data['kode_pertanyaan']."</td>			  
								  <td>".$data['isi_pertanyaan']."</td>			  
								  <td>".$data['kelompok']."</td>
								  <td>Rp.".$contoh_tanah*$data['tarif']."</td>
								</tr>";
							}
							
						}
										
						
					?>
				  </tbody>
				</table>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12"><p>Keterangan :* Tarif berdasarkan PP 35/2016 tentang Tarif PNBP Kementrian Pertanian.</p></div>
				</div>
				<div class="row" style="margin-top: 60px !important;">
					<div class="col-md-2 col-sm-2 col-xs-2" style="text-align: center;"><p>Pemohon </p></div>
					<div class="col-md-7 col-sm-7 col-xs-7"></div>
					<div class="col-md-3 col-sm-3 col-xs-4"><p>Bogor, <?php echo Convert::convert_tanggal($tanggal_terima);?></p></div>
				</div>					
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-2"></div>
					<div class="col-md-7 col-sm-7 col-xs-7"></div>
					<div class="col-md-3 col-sm-3 col-xs-4"><p>Yang menerima/<br>Petugas Pelayanan Jasa</p></div>
				</div>					
				<div class="row" style="margin-top: 50px !important;">
					<div class="col-md-2 col-sm-2 col-xs-2"><hr></div>
					<div class="col-md-7 col-sm-7 col-xs-7"></div>
					<div class="col-md-2 col-sm-3 col-xs-4"><p><hr></p></div>
				</div>
				<div class="row" style=" margin-bottom: 20px;">
					<div class="col-md-2 col-sm-2 col-xs-2" style="text-align: center;"><?php echo $nama;?></div>
					<div class="col-md-7 col-sm-7 col-xs-7"></div>
					<div class="col-md-2 col-sm-3 col-xs-4" style="text-align: center;"><p><?php echo Session::get('namapengguna');?></p></div>
				</div>				
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>

</div>

