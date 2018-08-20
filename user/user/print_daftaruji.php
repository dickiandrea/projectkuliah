<?php include "../koneksi.php";
$kode_yang_diambil = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$kode_yang_diambil' ");
$data = mysqli_fetch_array($sql);
						
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
		<br><br>
		<!-- 1. Kode Order : <php echo $data['id'];?> <br><br> -->
		1. Tanggal Terima : <?php echo $data['tanggal_terima'];?> <br><br>
		2. Data Pemohon :
		
			<?php
			$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode_user'");
			$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
			$nama_user = $data['nama'];
				{
					echo $nama_user;
				}
			
			$sql = mysqli_query($connect, "SELECT * FROM jenis_analisis WHERE kode_analisis='$kode_analisis'");
			$hasil = mysqli_fetch_array($sql) or die (mysqli_error($connect));
			$analisis = $hasil['nama_analisis'];
					{
						?>
						<br><br>3. Analisis Yang Diajukan : <?php echo $analisis;?>
						<?php 
					}
						?>
			
			<br><br>4. Daftar Pengujian <br><bR>
		<?php
		$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE id='$kode_yang_diambil'");
		$data = mysqli_fetch_array($sql);
		$totalbiaya = $data['total_biaya'];
		?>
			<table>
				<thead>
					<tr>
					  <td align="center" style="width:30; height:40;" >No</td>
					  <td style="width:90; height:40;" >Kode Analisis </td>
					  <td style="width:200; height:40;" >Parameter Analisis Uji</td>
					  <td align="center" style="width:60; height:40;" >Jumlah Contoh</td>
					  <td align="center" style="width:50; height:40;" >No Contoh</td>
					  <td align="center" style="width:130; height:40;" >Biaya <br> <small>(Tarif*Jumlah)</small></td>
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
						//var_dump($syarat);die();
						$value = rtrim($syarat, "or ");
						$query = "select kelompok, isi_pertanyaan, tarif, kode_pertanyaan from pertanyaan where $value";
						//var_dump($query);
						$result = mysqli_query($connect, $query);
						//var_dump($result);
						$i =1;
						while($data = mysqli_fetch_array($result))
						{
							if($tmp != $data['kelompok']){
								echo "
								<tr>
								  <td align=center>";echo $no; $no++; echo "</td>
								  <td >".$data['kode_pertanyaan']."</td>
								  <td style=width:260px; height:40px;>".$data['isi_pertanyaan']."</td>
								  <td align=center>".$jumlah[$i]."</td>
								  <td align=center>".$no_contoh[$i]."</td>
								  <td align=center>Rp.".$data['tarif']*$jumlah[$i]." ,-</td>
								</tr>";
								$tmp = $data['kelompok'];
							}else{
								echo "
								<tr>
								  <td> &nbsp; </td>
								  <td >".$data['kode_pertanyaan']."</td>
								  <td style=width:260px; height:40px;>".$data['isi_pertanyaan']."</td>
								  <td align=center>".$jumlah[$i]."</td>
								  <td align=center>".$no_contoh[$i]."</td>
								  <td align=center>Rp.".$data['tarif']*$jumlah[$i]." ,- </td>
								</tr>";
							}
							$i++;
						}
						echo
						"
						<tr><td colspan=6 height=5px>&nbsp;</td></tr>
						<tr>
							<td colspan='5' align='right'> Total Biaya </td>
							<td align=center> Rp ".$totalbiaya." ,- </td>
						</tr>";
					?>
				</tbody>
			</table>
			
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
$pdf->Output('DaftarUji_'.$analisis.'_'.$nama_user.'.pdf');
?>