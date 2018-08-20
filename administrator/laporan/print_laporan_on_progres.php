<?php require_once "../../pusatdata/core/init-print.php";

$tanggal_awal = Input::get('awal');
$tanggal_akhir = Input::get('akhir');

$kata = "
		select 
			a.kode_order, a.tanggal_terima,a.kode_user, a.kode_analisis, a.contoh_tanah, a.total_biaya,
			a.contoh_tanaman, a.contoh_pupuk, a.contoh_air, a.contoh_ring, a.contoh_bulk, a.desa ,a.metode_kirim,
			a.kecamatan, a.kabupaten, a.provinsi, a.koordinat, a.pertanyaan, a.total_biaya, a.status_bayar, d.nama_sp, b.nama_analisis,
			a.status_kirim, b.nama_analisis, c.nama, c.instansi, c.alamat_instansi, c.telp, e.contoh, e.bayar, e.pengambilan, e.selesai, e.progres
		from 
			tborder as a inner join jenis_analisis as b inner join user as c inner join surat_permohonan as d inner join status as e 
		where 
			a.kode_order = e.kode_order and a.kode_analisis = b.kode_analisis and c.kode_user = a.kode_user and 
			b.kode_sp =d.kode_sp and a.tanggal_terima and e.pengambilan ='' and e.contoh != '' and e.bayar != '' 
			and e.selesai ='' or (e.selesai >= now()) between '$tanggal_awal' and '$tanggal_akhir'
		order by 
			a.tanggal_terima asc
	";
ob_start();

?>
<div style="sans-serif;text-overflow:ellipsis;">	

	<table style="text-align:center; vertical-align:center;">
		<tr>
			<td style="width:250px;"><img src="../../images/logo/balittanah.png" title="Logo Balittanah" style="height:90px;"></td>
			<td style="width:520px;">
				<h4 style="margin-bottom:0px;text-align:center;margin-top:15px;">BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN</h4>
				<h5 style="margin-bottom:0px;text-align:center;margin-top:5px;">LABORATORIUM PENGUJI BALAI PENELITIAN TANAH</h5>
				<h6 style="margin-bottom:10px;text-align:center;margin-top:5px;">
					Jl. Tentara Pelajar No.12, Kampus Penelitian Pertanian Cimanggu Bogor 16114<br>
					Telp/Fax. (0251) 8322933, email: balittanah@litbangpertanian.go.id
				</h6>
			</td>
			<td style="width:250px;"><img src="../../images/logo/agro-inovasi.png" title="Logo Agro Inovasi" style="height:90px;"></td>
		</tr>
	</table>
	<hr style="margin-top:5px;">
	<h4 style="margin-bottom:0px;text-align:center;">REKAP DATA ON PROGRES PENELITIAN</h4>
	<h5 style="margin-bottom:25px;margin-top:5px;text-align:center;">Periode <?php echo Convert::convert_tanggal($tanggal_awal)." Sampai ".Convert::convert_tanggal($tanggal_akhir);?></h5>
	<table cellspacing="0" border="1px">
		<thead style="vertical-align:middle;text-align: center;">
			<tr>
				<th rowspan="2" style="width:30px;">No</th>
				<th rowspan="2" style="width:245px;">Pemohon</th>
				<th rowspan="2" style="width:80px;">Tanggal<br><small>Terima</small></th>
				<th rowspan="2" style="width:80px;">Cara<br><small>Pengiriman<br>Contoh</small></th>
				<th colspan="6">Contoh Analisis</th>
				<th rowspan="2" style="width:100px;">Nama<br><small>Analisis</small></th>
				<th colspan="2">Biaya Analisis</th>
				<th rowspan="2" style="width:70px;">Nomor<br><small>SP/LHP</small></th>
				<th rowspan="2" style="width:120px;">Tanggal<br><small>Selesai</small></th>
			</tr>
			<tr>
				<th style="width:20px;"><small>Th</small></th>
				<th style="width:20px;"><small>Ta</small></th>
				<th style="width:20px;"><small>Ai</small></th>
				<th style="width:20px;"><small>Pu</small></th>
				<th style="width:20px;"><small>Bu</small></th>
				<th style="width:20px;"><small>Ri</small></th>
				<th style="width:70px;"><small>Total</small></th>
				<th style="width:70px;"><small>Status</small></th>
			</tr>
		</thead>
		<tbody>
			<?php
			//var_dump($kata);die();
				$result = $mysqli->query($kata);
				$no = 1;
				if(($result->num_rows)>0){					
					while($data = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$no."</td>";
						echo "<td>".$data['nama']."<br>".$data['instansi']."<br><small>".$data['alamat_instansi']."</small></td>";
						echo "<td  style='text-align:center;vertical-align:middle;'>".$data['tanggal_terima']."</td>";
						echo "<td  style='text-align:center;vertical-align:middle;'>".$data['metode_kirim']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_tanah']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_tanaman']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_air']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_pupuk']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_bulk']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['contoh_ring']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['nama_sp']."<br>".$data['nama_analisis']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>Rp. <br>".$data['total_biaya']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>Lunas tgl<br>".$data['bayar']."</td>";
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['kode_order']."</td>";				
						echo "<td style='text-align:center;vertical-align:middle;'>".$data['selesai']."</td>";				
									
						
						echo "</tr>";
						$no++;
					}
				}else{
					echo "<tr><td colspan='14' style=\"text-align:center;\">Tidak Ada Data</td></tr>";
				}
			?>
		</tbody>
	</table>
	<p>Note :* Laporan ini di buat sebagai bukti pertanggung jawaban penelitian di Balai Penelitian Tanah.</p>
	<table style="margin-top:40px;">		
		<tr>
			<td style="width:700px;"></td>
			<td style="width:200px;text-align:center;">Pengesah Laporan/<br>Petugas Pelayanan Jasa<br><br><br><br><hr><?php echo Session::get('namapengguna');?></td>
		</tr>
	</table>
</div>
<?php
$html = ob_get_clean();
$html = "<page backtop='7mm' backbottom='7mm' backleft='5mm' backright='5mm' style='font-family: freeserif;'>".$html."</page>";
?>
	
<?php
require '../../pusatdata/html2pdf/html2pdf.class.php';

$pdf = new HTML2PDF('L','A4','en');
$pdf->WriteHTML($html);
ob_end_clean();
$pdf->Output('LaporanPenelitianBiologiPeriode_'.Convert::convert_tanggal($tanggal_awal).'-'.Convert::convert_tanggal($tanggal_akhir).'.pdf');
?>
