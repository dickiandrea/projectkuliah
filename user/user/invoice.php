<html>
<head>
<meta charset="utf-8">
<title>SIMPEL BALITTANAH</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />

<!-- css -->
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="../css/cubeportfolio.min.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="../skins/default.css" rel="stylesheet" />

	<!-- ICON TITLE -->
	<link rel="icon" href="../img/s.png"/>
	
<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-10">
		<br>
		<div class="kop">
			<h4>
			<big> LABORATORIUM PENGUJI BALAI PENELITIAN TANAH  </big> <br>
				BALAI BESAR PENELITIAN DAN PENGEMBANGAN SUMBER DAYA LAHAN PERTANIAN <br>
				BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN, KEMENTERIAN PERTANIAN <br>
				<small>
					JL. Tentara Pelajar No.12 Cimanggu Bogor 16114. Telp/Fax : (0251) 833-6757 / 832-2933 <br>
					Email : balittanah@litbang.pertanian.go.id; pelayananbalittanah@gmail.com
				</small>
			</h4>
			<br>
		</div>
		<div class="kementan">
			<img src="../img/kementan.jpg" height="125" width="110">
		</div>
		<div class="agro">
			<img src="../img/agro.png" height="100" width="90">
		</div>
			<hr class="hrkop">
					<?php include "../koneksi.php";
						$kode_yang_diambil = $_GET['kode'];
						$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE kode_order='$kode_yang_diambil' ");
						$data = mysqli_fetch_array($sql);
						
						$kode_user = $data['kode_user'];
						$kode_analisis = $data['kode_analisis'];
						{
						?>
						<h3>1. Kode Order : <?php echo $data['kode_order'];?>	 </h3>
						<h3>2. Tanggal Terima : <?php echo $data['tanggal_terima'];?>	 </h3>
						<?php 
						}
						?>
					
					<hr>
					<h3>3. Data Pemohon </h3>
					<hr>
					
					<table cellspacing="1" width="500">
						<?php
						//$username = $_SESSION['user1'];
						$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode_user'");
						$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
						$nama_user = $data['nama'];
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
							<h3>4. Analisis Yang Diajukan : <font color="#23d96d"> <?php echo $data['nama_analisis'];?> </font></h3>
						<?php 
							}
						?>
					<hr>
						<?php $sql = mysqli_query($connect, "SELECT * FROM tborder WHERE kode_order='$kode_yang_diambil'");
						$data = mysqli_fetch_array($sql);
						{
						?>
						
						<h3>5. Jumlah Contoh : </h3>
							
							<table class="table" width="40%">
							<tr>
								<td width="15%" height="29" > Contoh Tanah </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['contoh_tanah'];?></td>
							
								<td width="15%" height="29" > Contoh Pupuk </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['contoh_pupuk'];?></td>
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
						
							<h3>7.  Total Yang Harus Dibayar : <font color="ff0000"> Rp <?php echo $data['total_biaya'];?> ,- </font></h3>
							<table class="table" width="40%">
							<tr>
								<td width="25%" height="29" > Metode Pembayaran </td>
								<td width="1%"><b>:</b></td> 
								<td ><?php echo $data['metode_bayar'];?></td>
							
								<td width="25%" height="29" > Status Pembayaran </td>
								<td width="1%"><b>:</b></td>
								<td ><?php echo $data['status_bayar'];?></td>
							</tr>
							
							<tr>
								<td > Metode Pengiriman </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['metode_kirim'];?></td>
							
								<td > Status Pengiriman </td>
								<td width="5%"><b>:</b></td> 
								<td ><?php echo $data['status_kirim'];?></td>
							</tr>
							</table>
							
							<hr>							
						<?php
						}
						?>
				<div class="row">
					<div class="col-xs-12 col-md-9">
						<div class="form-group">
							
						</div>
					</div>
					<div class="kolomttd">
						<div class="pemohon"><br>						
									<h4> &nbsp;&nbsp; Pemohon </h4>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
						 			<p> &nbsp; </p>
									
									<h5> &nbsp;&nbsp; <?php echo $nama_user;?> </h5>
									
						</div>
						<div class="petugas">
							<h4> Bogor, <?php $tgl = date('d-m-Y'); echo $tgl; ?> </h4>
							
							<h4> Yang Menerima </h4>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
									<p> &nbsp; </p>
						 			<p> &nbsp; </p>
									
							<h5> Petugas Pelayanan Jasa </h5>
						</div>
					</div>
				</div>
						<script type="text/javascript">
						function printWindow()
						{
							bV = parseInt(navigator.appVersion);
							if(bV >=4) window.print();
						}
						printWindow();
					</script>	
				</div>
			</div>
		</div>
	</body>
</html>
<?php