
<?php require_once "../../pusatdata/core/init-print.php";
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
ob_start();

?>
<table style="text-align:center; vertical-align:center;">
	<tr>
		<td style="width:80px;"><img src="../../images/logo/balittanah.png" title="Logo Balittanah" style="height:90px;"></td>
		<td style="width:475px;">
			<h4 style="margin-bottom:0px;text-align:center;margin-top:15px;">BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN</h4>
			<h5 style="margin-bottom:0px;text-align:center;margin-top:5px;">LABORATORIUM PENGUJI BALAI PENELITIAN TANAH</h5>
			<h6 style="margin-bottom:10px;text-align:center;margin-top:5px;">
				Jl. Tentara Pelajar No.12, Kampus Penelitian Pertanian Cimanggu Bogor 16114<br>
				Telp/Fax. (0251) 8322933, email: balittanah@litbangpertanian.go.id
			</h6>
		</td>
		<td style="width:80px;"><img src="../../images/logo/agro-inovasi.png" title="Logo Agro Inovasi" style="height:90px;"></td>
	</tr>
</table>
<hr>
<h5 style="text-align:center;margin-bottom:0px;">PERMOHONAN ANALISIS BIOLOGI TANAH</h5>
<h5 style="text-align:center;margin-top:0px;margin-bottom:20px;">No. Order : <b style="color:#34495e;"><?php echo substr($kode_order, 6, 5);?></b>/LP Balittanah/<b style="color:#34495e;"><?php echo substr($kode_order, 3, 2);?></b>/20<b style="color:#34495e;"><?php echo substr($kode_order, 0, 2);?></b></h5>
<table>
	<tr>
		<td>Tanggal Terima</td>
		<td>:</td>
		<td colspan="7" style="font-weight:bold;"><?php echo Convert::convert_tanggal($tanggal_terima);?></td>		
	</tr>
	<tr>
		<td>Jumlah Contoh</td>
		<td>:</td>
		<td style="width:45px; text-align:center; font-weight:bold;"><?php echo $contoh_tanah;?><hr></td>		
		<td>Tanah</td>		
		<td style="width:45px; text-align:center; font-weight:bold;"><?php echo $contoh_tanaman;?><hr></td>		
		<td>Tanaman</td>	
		<td style="width:45px; text-align:center; font-weight:bold;"><?php echo $contoh_pupuk;?><hr></td>		
		<td>Pupuk</td>		
		<td style="width:45px; text-align:center; font-weight:bold;"><?php echo $contoh_air;?><hr></td>		
		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td style="width:45px;">Desa</td>
		<td>:</td>
		<td colspan="3"  style="font-weight:bold;"><?php echo $desa;?></td>		
		<td>Kec.</td>		
		<td>:</td>
		<td style="font-weight:bold;"><?php echo $kecamatan;?></td>		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td style="width:45px;">Kab.</td>
		<td>:</td>
		<td colspan="3"  style="font-weight:bold;"><?php echo $kabupaten;?></td>		
		<td>Prov.</td>		
		<td>:</td>
		<td  style="font-weight:bold;"><?php echo $provinsi;?></td>		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td style="width:45px;">GPS.</td>
		<td>:</td>
		<td colspan="3"  style="font-weight:bold;"><?php echo $koordinat;?></td>		
		<td></td>		
	</tr>
	<tr>
		<td>Nama Pengirim</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;"><?php echo $nama;?></td>		
	</tr>
	<tr>
		<td>Dari Instansi</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;"><?php echo $instansi;?></td>		
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;"><?php echo $alamat_instansi;?></td>		
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;"><?php echo $telp;?></td>		
	</tr>
	<tr>
		<td>Status Pembayaran</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;">
			
			<?php 
				if($status_kirim == "sudah dikirim"){
					echo "<span class=\"btn btn-success btn-md\" style=\"width:100%;\">Sudah Lengkap</span><br>";
				}else{
					echo "<span class=\"btn btn-danger btn-md\" style=\"width:100%;\">Belum Lengkap</span><br>";
				}
					
			?>
		
		</td>		
	</tr>
	<tr>
		<td>Status Kelengkapan Contoh</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;">
			
			<?php 
				if($status_bayar == "sudah dibayar"){
					echo "<span >Lunas</span><br>";
				}else{
					echo "<span >Belum Lunas</span><br>";
				}
					
			?>
		
		</td>		
	</tr>
</table>

<h4 style="text-align:center; margin-top:30px; margin-bottom:15px;">Daftar Pilihan Pengujian</h4>
<table cellspacing="0">
  <thead style="text-align:center;">
	<tr >
	  <th>No</th>
	  <th style="height:50px; vertical-align:middle; width: 150px;">Jenis<br/><small>Analisis</small></th>
	  <th style="width: 150px;">Tarif *<br/><small>(Rp./Contoh)</small></th>
	  <th style="width: 150px;">Jumlah<br/><small>Contoh</small></th>
	  <th style="width: 150px;">Biaya<br/><small>(Rp.)</small></th>
	</tr>
  </thead>
  <tbody style="text-align:center;">
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
		if(($result->num_rows)>0){
		
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
		}else{
			echo "<tr><td colspan='5' style='text-align:center;'>Tidak Ada Data Yang Terpilih</td></tr>";
		}
						
		
	?>
  </tbody>
</table>

<p style="margin-top:20px;">Keterangan :* Tarif berdasarkan PP 35/2016 tentang Tarif PNBP Kementrian Pertanian.</p>
<table style="margin-top:40px;">
	<tr>
		<td style="width:150px; text-align:center;">Pemohon</td>
		<td style="width:350px;"></td>
		<td style="width:150px;">Bogor, <?php echo Convert::convert_tanggal($tanggal_terima);?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Yang menerima/</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Petugas Pelayanan Jasa</td>
	</tr>
	<tr>
		<td style="height:20px;"></td>
		<td style="height:20px;"></td>
		<td style="height:40px;"></td>
	</tr>
	<tr>
		<td><hr></td>
		<td></td>
		<td><hr></td>
	</tr>
	<tr>
		<td style="text-align:center;"><?php echo $nama;?></td>
		<td></td>
		<td style="text-align:center;"><?php echo Session::get('namapengguna');?></td>
	</tr>
</table>
<?php
$html = ob_get_clean();
$html = "<page backtop='7mm' backbottom='7mm' backleft='10mm' backright='10mm' style='font-family: freeserif;'>".$html."</page>";
ob_end_clean();

require '../../pusatdata/html2pdf/html2pdf.class.php';
$css = '<style>'.file_get_contents('../../pusatdata/css/bootstrap.min.css').'</style>'; /// here call you external css file
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('PermohonanPenelitianBiologi_'.$nama.'.pdf');
?>
