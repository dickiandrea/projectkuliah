<?php include "../koneksi.php";
$kode_yang_diambil = $_GET['id'];

$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$kode_yang_diambil' ");
$data = mysqli_fetch_array($sql);

$koder_order = $data['kode_order'];
$kode_user = $data['kode_user'];
$kode_analisis = $data['kode_analisis'];
						
ob_start();
?>
<div style="width:90%; padding:4px; height:auto; margin-top:-10px;">
		<div style="float:left; width:100%;	height:12%; text-align:center; margin-top:-10px;">
			<table width="100%" border="0">
				<tr>
					<td width="20%">
						<img src="../img/kementan.jpg" height="95" width="85">
					</td>
					<td align="center" valign="middle" width="50%">
						<h5>
						<big> LABORATORIUM PENGUJI BALAI PENELITIAN TANAH  </big> <br> 
						BALAI BESAR PENELITIAN DAN PENGEMBANGAN SUMBER DAYA LAHAN PERTANIAN <br>
						BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN, KEMENTERIAN PERTANIAN <br>
						<small>
						JL. Tentara Pelajar No.12 Cimanggu Bogor 16114. Telp/Fax : (0251) 833-6757 / 832-2933 <br>
						Email : balittanah@litbang.pertanian.go.id; pelayananbalittanah@gmail.com
						</small>
						</h5>
					</td>
					<td width="25%">
						<img src="../img/agro.png" height="85" width="75">
					</td>
				</tr>
			</table>
			<hr style="width:100%; border:2px solid #000; margin-top:-5px;"/>
		</div>
		
		<h4>
		<!-- 1. Kode Order : <php echo $data['id'];?> <br><br> -->
		Kode Order : <?php echo $data['kode_order'];?> <br><br>
		1. Tanggal Terima : <?php echo $data['tanggal_terima'];?> <br><br>
		2. Data Pemohon </h4>
		<table>
			<?php
			$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode_user'");
			$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
			$nama_user = $data['nama'];
				{
					?>
					<tr>
						<td style="width:120; height:20;" > Nama </td>
						<td width="10%"><b>:</b></td> 
						<td ><?php echo $data['nama'];?></td>
					</tr>
					<tr>
						<td style="width:120; height:20;" > Instansi </td>
						<td width="5%"><b>:</b></td>
						<td ><?php echo $data['instansi'];?></td>
					</tr>
							
					<tr>
						<td style="width:120; height:20;" > Alamat Instansi </td>
						<td width="5%"><b>:</b></td> 
						<td ><?php echo $data['alamat_instansi'];?></td>
					</tr>
							
					<tr>
						<td style="width:120; height:20;" > Telepon </td>
						<td width="5%"><b>:</b></td> 
						<td ><?php echo $data['telp'];?></td>
					</tr>
							
					<tr>
						<td style="width:120; height:20;" > Email </td>
						<td width="5%"><b>:</b></td> 
						<td ><?php echo $data['email'];?></td>
					</tr>
							
					<?php
				}
				?>
			</table>
			
			<?php
				$sql = mysqli_query($connect, "SELECT * FROM jenis_analisis WHERE kode_analisis='$kode_analisis'");
				$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
					{
						?>
						<h4>3. Analisis Yang Diajukan : <?php echo $data['nama_analisis'];?>
						<?php 
					}
						?>
					<br><br>
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
					4. Jumlah Contoh : </h4>
						<table>
							<tr>
								<td style="width:120; height:20;" > Contoh Tanah </td>
								<td ><b>:</b></td> 
								<td><?php echo $data['contoh_tanah'];?></td>
							</tr>
							
							<tr>
								<td style="width:120; height:20;"> Contoh Pupuk </td>
								<td><b>:</b></td>
								<td><?php echo $data['contoh_pupuk'];?></td>
								
								<td style="width:160; height:20;"> Contoh Pupuk Anorganik</td>
								<td><b>:</b></td>
								<td><?php echo $data['contoh_pupuk_anorganik'];?></td>
							
							</tr>
							
							<tr>
								<td style="width:120; height:20;"> Contoh Tanaman</td>
								<td><b>:</b></td> 
								<td style="width:50;"><?php echo $data['contoh_tanaman'];?></td>
								
								<td style="width:160; height:20;"> Contoh Air </td>
								<td><b>:</b></td> 
								<td><?php echo $data['contoh_air'];?></td>
							</tr>
							
							<tr>
								<td style="width:120; height:20;"> Contoh Ring </td>
								<td><b>:</b></td> 
								<td style="width:50;"><?php echo $data['contoh_ring'];?></td>
							
								<td style="width:160; height:20;"> Contoh Bulk </td>
								<td><b>:</b></td> 
								<td style="width:50;"><?php echo $data['contoh_bulk'];?></td>
							</tr>
						</table>
						
						<h4>5. Alamat Contoh </h4>
						<table>
							<tr>
								<td style="width:120; height:20;"> Desa </td>
								<td><b>:</b></td> 
								<td style="width:120; height:20;"><?php echo $data['desa'];?></td>
							
								<td style="width:120; height:20;">Kecamatan </td>
								<td><b>:</b></td>
								<td><?php echo $data['kecamatan'];?></td>
							</tr>
							
							<tr>
								<td style="width:120; height:20;">Kabupaten</td>
								<td><b>:</b></td> 
								<td><?php echo $data['kabupaten'];?></td>
							
								<td style="width:120; height:20;">Provinsi </td>
								<td><b>:</b></td> 
								<td><?php echo $data['provinsi'];?></td>
							</tr>
							
							<tr>
								<td style="width:120; height:20;">Koordinat</td>
								<td><b>:</b></td> 
								<td><?php echo $data['koordinat'];?></td>
								
								<td > &nbsp; </td>
								<td><b> &nbsp;  </b></td> 
								<td> &nbsp; </td>
							</tr>
						</table>
						
						<h4>6.  Total Yang Harus Dibayar : <font color="ff0000"> Rp <?php echo $data['total_biaya'];?> ,- </font></h4>
						<table>
							<tr>
								<td > Metode Pembayaran </td>
								<td width="1%"><b>:</b></td> 
								<td width="35%"><?php echo $data['metode_bayar'];?></td>
							</tr>
							<tr>
							<?php if($statusbayar=='')
							{
							?>
								<td > Pembayaran </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['status_bayar'];?></td>
							<?php 
							}
							else
							{
							?>
								<td > Pembayaran </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo "Sudah dibayar / ". $statusbayar;?></td>
							<?php
							}
							?>
							</tr>
							
							<tr>
								<td > Metode Pengiriman </td>
								<td width="5%"><b>:</b></td> 
								<td width="35%"><?php echo $data['metode_kirim'];?></td>
							</tr>
							<tr>
							<?php if($statuskirim=='')
							{
							?>
								<td > Pengiriman </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['status_bayar'];?></td>
							<?php 
							}
							else
							{
							?>
								<td > Pengiriman </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo "Sudah dikirim / ". $statuskirim;?></td>
							<?php
							}
							?>
							
							</tr>
						</table>
						<?php
						}
						?>
					<br>
					<hr style="width:100%; border:1px solid #000; "/>
					<table>
						<tr>
							<td style="height:10px;" colspan="3" align="right"> <h5> Bogor, <?php $tgl = date('d-m-Y'); echo $tgl; ?> </h5> </td>
						</tr>
						<tr>
							<td style="width:340px; height:10px;">
								<h5> &nbsp;&nbsp; Pemohon </h5>
									<p> &nbsp; </p>
						 			<p> &nbsp; </p>
									
								<h5> &nbsp;&nbsp; <?php echo $nama_user;?> </h5>
							</td>
							
							<td align="center">
								&nbsp;
							</td>
							
							<td style="width:300px; height:10px;" align="right">
								<h5> Yang Menerima </h5>
									<p> &nbsp; </p>
						 			<p> &nbsp; </p>
								<h5> Petugas Pelayanan Jasa </h5>
							</td>
						</tr>
					</table>
</div>
<?php
$html = ob_get_clean();
$html = "<page backtop='7mm' backbottom='7mm' backleft='8mm' backright='5mm' style='font-family: freeserif;'>".$html."</page>";
ob_end_clean();

require '../html2pdf/html2pdf.class.php';
$css = '<style>'.file_get_contents('../css/print.css').'</style>'; /// here call you external css file
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('TagihanPermohonan_'.$nama_user.'.pdf');
?>