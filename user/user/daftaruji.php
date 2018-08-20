<?php
include "../koneksi.php";
	$kode_yang_diambil = $_GET['kode'];
	$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE kode_order='$kode_yang_diambil' ");
	$hasil = mysqli_fetch_array($sql);
	$kode_user = $hasil['kode_user'];
	$kode_analisis = $hasil['kode_analisis'];
	$contohtanah1 = $hasil['contoh_tanah'];
?>
<html>
<head>
<meta charset="utf-8">
<title>DAFTAR PENGUJIAN SAYA</title>
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
		<h3>1. Kode Order : <?php echo $hasil['kode_order'];?>	 </h3> <hr>
		<h3>2. Tanggal Terima : <?php echo $hasil['tanggal_terima'];?>	 </h3>
					
					<hr>
					<h3>3. Data Pemohon </h3>
					<hr>
					<table cellspacing="1" width="500">
						<?php
						//$username = $_SESSION['user1'];
						$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode_user'");
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
							<h3>4. Analisis Yang Diajukan : <font color="#23d96d"> <?php echo $data['nama_analisis'];?> </font></h3>
						<?php 
							}
						?>
		<hr>
		<h3>5. Daftar Pengujian</h3>
		<?php
			$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE kode_order='$kode_yang_diambil'");
			$data = mysqli_fetch_array($sql);?>
			<table class="table table-bordered table-striped">
				  <thead>
					<tr>
					  <td width="1%" align="center">No</td>
					  <td width="6%" align="center">Kode Analisis </td>
					  <td width="25%" align="center">Parameter Analisis Uji</td>
					  <td width="10%" align="center">Biaya <small>(Rp./Contoh)</small></td>
					</tr>
				  </thead>
				  <tbody>
					<?php
						$pertanyaan = $data['pertanyaan'];
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
						$result = mysqli_query($connect, $query);
						//var_dump($result);
						while($data = mysqli_fetch_array($result))
						{
							if($tmp != $data['kelompok']){
								echo "<tr>
								  <td align=center>";echo $i; $i++;
								echo "</td>
								  <td align=center>".$data['kode_pertanyaan']."</td>			  
								  <td>".$data['isi_pertanyaan']."</td>
								  <td align=center>Rp.".$data['tarif']."</td>
								</tr>";
								$tmp = $data['kelompok'];
							}else{
								echo "<tr>
								  <td> &nbsp; </td>
								  <td align=center>".$data['kode_pertanyaan']."</td>			  
								  <td>".$data['isi_pertanyaan']."</td>			  
								  <td align=center>Rp.".$data['tarif']."</td>
								</tr>";
							}
							
						}
					?>
				  </tbody>				 
				 <hr>
				</table>
				<hr>
				<h3>6.  Total Yang Harus Dibayar : <font color="ff0000"> Rp <?php echo $hasil['total_biaya'];?> ,- </font></h3>
				<hr>
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