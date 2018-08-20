<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1><center>
						TAGIHAN PEMBAYARAN
					</center></h1>
					
					<hr>
					<?php include "koneksi.php";
					$kode_yang_diambil = $_GET['id'];
					$kode = addslashes($_POST['id']);
					
						$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$kode_yang_diambil' ");
						$data = mysqli_fetch_array($sql);
						$kode_analisis = $data['kode_analisis'];
						$contohtanah1 = $data['contoh_tanah'];
						{
						?>
						<h3> Kode Order : <?php echo $data['kode_order'];?>	 </h3>
						<h3> Tanggal Terima : <?php echo $data['tanggal_terima'];?>	 </h3>
						<?php 
						}
						?>
					<hr>
					<h3> Data Pemohon </h3>
					<hr>
					
					<table cellspacing="1" width="500" class="tableprint">
						<?php
						$username = $_SESSION['user1'];
						$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
						$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
						{
						?>
							<tr>
								<td width="30%" height="29" > Nama </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['nama'];?></td>
							</tr>
							
							<tr>
								<td width="30%" height="29" > Instansi </td>
								<td width="5%"><b>:</b></td>
								<td ><?php echo $data['instansi'];?></td>
							</tr>
							
							<tr>
								<td width="30%" height="29" > Alamat Instansi </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['alamat_instansi'];?></td>
							</tr>
							
							<tr>
								<td width="30%" height="29" > Telepon </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['telp'];?></td>
							</tr>
							
							<tr>
								<td width="30%" height="29" > Email </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['email'];?></td>
							</tr>
							
						<?php
						}
						?>
					</table>
					<hr>
						<?php
						$sql = mysqli_query($connect, "SELECT * FROM jenis_analisis WHERE kode_analisis='$kode_analisis'");
						$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
							{
						?>
							<h3> Analisis Yang Diajukan : <font color="#23d96d"> <?php echo $data['nama_analisis'];?> </font></h3>
						<?php 
							}
						?>
					<hr>						
						<?php
					
						$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$kode_yang_diambil'");
						$data = mysqli_fetch_array($sql);
						
						$totalbiaya = $data['total_biaya'];
						$id_order = $data['id'];
						
						$querystatus = mysqli_query($connect, "SELECT * FROM status WHERE id_order='$id_order'");
						$datastatus = mysqli_fetch_array($querystatus) or die (mysqli_error($connect));
						
						$statusbayar = $datastatus['bayar'];
						$statuskirim = $datastatus['contoh'];
						
						{
						?>
							<h3>  Total Yang Harus Dibayar : <font color="ff0000"> Rp <?php echo $data['total_biaya'];?> ,- </font></h3>
							<table class="table" width="40%">
							
							<tr>
								<td width="25%" height="29" > Metode Pembayaran </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['metode_bayar'];?></td>
							
							<?php if($statusbayar=='')
							{
							?>
								<td width="15%" height="29" > Status Pembayaran </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['status_bayar'];?></td>
							<?php 
							}
							else
							{
							?>
								<td width="15%" height="29" > Status Pembayaran </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo "Sudah dibayar / ". $statusbayar;?></td>
							<?php
							}
							?>
							
							</tr>
							
							<tr>
								<td > Metode Pengiriman </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['metode_kirim'];?></td>
							
							<?php if($statuskirim=='')
							{
							?>
								<td width="15%" height="29" > Status Pengiriman </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['status_bayar'];?></td>
							<?php 
							}
							else
							{
							?>
								<td width="15%" height="29" > Status Pengiriman </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo "Sudah dikirim / ". $statuskirim;?></td>
							<?php
							}
							?>
							
							</tr>
							
							</table>
							
							<hr>
							<h3>5. Jumlah Contoh : </h3>
							
							<table class="table" width="40%">
							<tr>
								<td width="15%" height="29" > Contoh Tanah </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['contoh_tanah'];?></td>
								
								<td colspan="3">&nbsp;</td> 
							</tr>
							
							<tr>
								<td width="30%" height="29" > Contoh Pupuk Organik </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['contoh_pupuk'];?></td>
							
								<td width="30%" height="29" > Contoh Pupuk Anorganik</td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['contoh_pupuk_anorganik'];?></td>
							</tr>
							
							<tr>
								<td > Contoh Tanaman</td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['contoh_tanaman'];?></td>
							
								<td > Contoh Air </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['contoh_air'];?></td>
							</tr>
							
							<tr>
								<td > Contoh Ring </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['contoh_ring'];?></td>
							
								<td > Contoh Bulk </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['contoh_bulk'];?></td>
							</tr>
							</table>
							<hr>
							
							<h3>6. Alamat Contoh </h3>
							<table class="table" width="40%">
							<tr>
								<td width="15%" height="29" > Desa </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['desa'];?></td>
							
								<td width="15%" height="29" > Kecamatan </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['kecamatan'];?></td>
							</tr>
							
							<tr>
								<td > Kabupaten</td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['kabupaten'];?></td>
							
								<td > Provinsi </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['provinsi'];?></td>
							</tr>
							
							<tr>
								<td > Koordinat</td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['koordinat'];?></td>
								
								<td > &nbsp; </td>
								<td width="5%"><b> &nbsp;  </b></td> 
								<td > &nbsp; </td>
							</tr>
							
							</table>
							<hr>
					<?php
						}
					?>
					
				<h4> Daftar Pengujian : </h4>
				<table class="table table-striped table-bordered dt-responsive nowrap">
				  <thead>
					<tr>
						<td width="2%" align="center">No</td>
						<td width="5%" align="center">Kode Analisis </td>
						<td width="28%" align="center">Parameter Analisis Uji</td>
						<td width="5%" align="center">Jumlah</td>
						<td width="5%" align="center">No Contoh</td>
						<td width="7%" align="center">Tarif <small>(Jumlah*Contoh)</small></td>
					</tr>
				  </thead>
				  <tbody>
					<?php
						$no=1;
						$pertanyaan = $data['pertanyaan'];
						$pertanyaan = rtrim($pertanyaan," ,");
						$index_pertanyaan = explode(",", $pertanyaan);
						$tmp = "salah";
						$i = 1;
						$syarat = null;
						foreach($index_pertanyaan as $key => $value){							
							$isivalue = explode("&", $value);							
							$kode = $isivalue[0];
							$jumlah[$i] = $isivalue[1];
							$no_contoh[$i] = $isivalue[2];
							$syarat .= "kode_pertanyaan = '".ltrim($kode," ")."' or ";
							$i++;
						}		
				
						$value = rtrim($syarat, "or ");
						$query = "select kelompok, isi_pertanyaan, tarif, kode_pertanyaan from pertanyaan where $value";
						$result = mysqli_query($connect, $query);
						
						$i =1;
						while($data = mysqli_fetch_array($result))
						{
							if($tmp != $data['kelompok'])
							{
								echo "
								<tr>
								  <td align=center>";echo $no; $no++; echo "</td>
								  <td>".$data['kode_pertanyaan']."</td>
								  <td>".$data['isi_pertanyaan']."</td>
								  <td>".$jumlah[$i]."</td>
								  <td>".$no_contoh[$i]."</td>
								  <td>Rp.".$data['tarif']*$jumlah[$i]." ,-</td>
								</tr>";
								$tmp = $data['kelompok'];
							}
							else
							{
								echo "
								<tr>
								  <td> &nbsp; </td>
								  <td>".$data['kode_pertanyaan']."</td>
								  <td>".$data['isi_pertanyaan']."</td>
								  <td>".$jumlah[$i]."</td>
								  <td>".$no_contoh[$i]."</td>
								  <td>Rp.".$data['tarif']*$jumlah[$i]." ,- </td>
								</tr>";
							}
							$i++;
						}
						echo
						"<tr>
							<td colspan='5' align='right'> Total Biaya </td>
							<td > Rp ".$totalbiaya." ,- </td>
						</tr>";
					?>
				  </tbody>
				</table>
				
					<br><br>
					<div class="row">
						<div class="col-xs-12 col-md-10">
							<div class="form-group">
							</div>
						</div>
						<div class="col-xs-12 col-md-2">
							<div class="form-group">
								<h4> Bogor, <?php $tgl = date('d-m-Y'); echo $tgl; ?> </h4>
									<h3> Pemohon </h3>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
									<?php 
									$username = $_SESSION['user1'];
									$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
									$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
									{
									?>
									<h5> <?php echo $data['nama'];?> </h5>
									<?php 
									} 
									?>
							</div>
						</div>
					</div>
				<hr>
				<?php
				$ambilkode = $_GET['id'];
				$kodenya = addslashes($_POST['id']);
					
						$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$ambilkode' ");
						$data = mysqli_fetch_array($sql);
				?>
			
				<a target=_blank class="btn btn-theme" href="user/print_laporan.php?id=<?php echo $data['id'];?>"> 
					PRINT INVOICE
				</a>
				<a target=_blank class="btn btn-theme" href="user/print_daftaruji.php?id=<?php echo $data['id'];?>"> 
					PRINT DAFTAR PENGUJIAN
				</a>
				<a class="btn btn-theme" href="?view=lihat-tagihan"> 
					Kembali
				</a>
		</div>
	</div>
</div>