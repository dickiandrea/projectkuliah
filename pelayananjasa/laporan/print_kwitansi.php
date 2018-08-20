
<?php require_once "../../pusatdata/core/init-print.php";

$syarat = Input::get('unik');
if(Input::get('print') == 'print' ){
	
	$namapengambil = Input::get('nama');
	$penyebutan = Input::get('penyebutan');	
	$tanggal_sekarang = Date('Y-m-d');

	$result = $update->update('status', "kode_order='$syarat'", array(
		'pengambilan' => $tanggal_sekarang."&".$penyebutan."&".$namapengambil
	  ));
}

  
$kata = "
		select a.kode_order, a.tanggal_terima,a.kode_user, a.kode_analisis, a.total_biaya, a.status_bayar,
		a.status_kirim, b.nama_analisis, c.nama, c.instansi, c.alamat_instansi, c.telp, d.nama_sp, e.pengambilan
        from 
        	tborder as a inner join jenis_analisis as b inner join user as c inner join surat_permohonan as d inner join status as e
        where 
        	a.kode_analisis = b.kode_analisis and c.kode_user = a.kode_user and b.kode_sp = d.kode_sp and a.kode_order = '$syarat' and a.kode_order = e.kode_order
	";
var_dump($kata);
$result = $mysqli->query($kata);
while($data = $result->fetch_assoc()){
	$kode_order = $data['kode_order'];
	$tanggal_terima = $data['tanggal_terima'];
	$kode_user = $data['kode_user'];
	$total_biaya = $data['total_biaya'];
	$status_kirim = $data['status_kirim'];
	$status_bayar = $data['status_bayar'];
	$nama_analisis = $data['nama_analisis'];
	$nama = $data['nama'];
	$instansi = $data['instansi'];
	$alamat_instansi = $data['alamat_instansi'];
	$telp = $data['telp'];
	$nama_sp = $data['nama_sp'];
	$datapengambilan = explode("&", $data['pengambilan']);
	$tanggalambil = $datapengambilan[0];
	$namapengambil = $datapengambilan[2];
	$penyebutan = $datapengambilan[1];
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
<h4 style="text-align:center;margin-bottom:0px;">KWITANSI</h4>
<h5 style="text-align:center;margin-top:0px;margin-bottom:20px;">No. Order : <b style="color:#34495e;"><?php echo substr($kode_order, 8, 6);?></b>/LP Balittanah/<b style="color:#34495e;"><?php echo substr($kode_order, 5, 2);?></b>/20<b style="color:#34495e;"><?php echo substr($kode_order, 2, 2);?></b></h5>
<table>
	<tr>
		<td colspan="3" style="font-weight:bold; height: 30px;">Informasi Pemohon</td>				
		<td colspan="6"></td>
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
		<td>Tanggal Permohonan</td>
		<td>:</td>
		<td colspan="7" style="font-weight:bold;"><?php echo Convert::convert_tanggal($tanggal_terima);?></td>		
	</tr>
</table>

<table>
	<tr>
		<td colspan="3" style="font-weight:bold; height: 30px;">Informasi Pengambilan</td>				
		<td colspan="6"></td>
	</tr>
	
	<tr>
		<td>Nama Pengambil</td>
		<td>:</td>
		<td colspan="7"  style="font-weight:bold;"><?php echo $namapengambil;?></td>		
	</tr>
	<tr>
		<td>Tanggal Pengambilan</td>
		<td>:</td>
		<td colspan="7" style="font-weight:bold;"><?php echo Convert::convert_tanggal($tanggalambil);?></td>		
	</tr>
	<tr>
		<td>Biaya Nominal</td>
		<td>:</td>
		<td colspan="7" style="font-weight:bold;"><?php echo "Rp. ".$total_biaya.",-00";?></td>		
	</tr>
	<tr>
		<td>Biaya Terbilang</td>
		<td>:</td>
		<td colspan="7" style="font-weight:bold;font-style:italic;"><?php echo '"'.$penyebutan.'"';?></td>		
	</tr>
</table>


<table style="margin-top:40px;">
	<tr>
		<td style="width:150px; text-align:center;"></td>
		<td style="width:350px;"></td>
		<td style="width:150px;">Bogor, <?php echo Convert::convert_tanggal($tanggalambil);?></td>
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
		<td></td>
		<td></td>
		<td><hr></td>
	</tr>
	<tr>
		<td style="text-align:center;"></td>
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
$pdf->Output('Kwitansi_'.$syarat.'_'.$nama.'.pdf');
?>
