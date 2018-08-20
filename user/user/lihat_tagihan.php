<?php
include "koneksi.php";
$username = $_SESSION['user1'];
$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
$kode_user = $data['kode_user'];
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			 <h2><center>Daftar Pengujian Saya</center></h2> <br>
			 <table class="table tale-striped table-bordered dt-responsive nowrap">
					<tr>
						<td  align="center" width="2%"><b>No</b></td>
						<td  align="center" width="10%"><b>Jenis Analisis</b></td>
						<td  align="center" width="7%"><b>Total Biaya</b></td>
						<td  align="center" width="10%"><b>Jenis Pembayaran</b></td>
						<td  align="center" width="10%"><b>Status Pembayaran</b></td>
						<td  align="center" width="10%"><b>Jenis Pengiriman</b></td>
						<td  align="center" width="10%"><b>Status Pengiriman</b></td>
						<td  align="center" width="10%"><b>Kode Order</b></td>
						<td  align="center" width="7%"><b>Tindakan</b></td>
					</tr>
				<?php
					$no=1;
					$sql = mysqli_query($connect, "SELECT * FROM tborder WHERE kode_user='$kode_user' ORDER BY tanggal_terima ASC");
					while($hasil = mysqli_fetch_array($sql))
						{
						
						$kode_analisis = $hasil['kode_analisis'];
						$id_order = $hasil['id'];
						
						$query = mysqli_query($connect, "SELECT * FROM jenis_analisis WHERE kode_analisis='$kode_analisis'");
						$data = mysqli_fetch_array($query) or die (mysqli_error($connect));
						
						$nama_analisis = $data['nama_analisis'];
						
						$querystatus = mysqli_query($connect, "SELECT * FROM status WHERE id_order='$id_order'");
						$datastatus = mysqli_fetch_array($querystatus) or die (mysqli_error($connect));
						
						$statusbayar = $datastatus['bayar'];
						$statuskirim = $datastatus['contoh'];
						
						?>
						<tr>
						<td align="center" width="1%"> 
							<?php echo $no; $no++;?>
						</td>
						
						<td align="center" width="12%">
							<?php echo $nama_analisis;?>
						</td>
						
						<td align="center" width="12%">
							Rp <?php echo $hasil['total_biaya'];?> ,-
						</td>
						
						<td align="center" width="10%">
							<?php echo $hasil['metode_bayar'];?>
						</td>
						
						<?php if($statusbayar=='')
								{
									?>
									<td  align="center" width="12%"> <font color="#ee0000"><b> Belum Dibayar </b></font> </td>
									<?php
								}
								else
								{
									?>
									<td  align="center" width="12%"> <font color="#00dd00"><b> <?php echo $statusbayar;?> </b></font> </td>
									<?php
								}
						
						?>
						
						<td  align="center" width="10%"> <?php echo $hasil['metode_kirim'];?></td>
						
						<?php if($statuskirim=='')
								{
									?>
									<td  align="center" width="12%"> <font color="#ee0000"><b> Belum Dikirim </b></font> </td>
									<?php
								}
								else
								{
									?>
									<td  align="center" width="12%"> <font color="#00dd00"><b> <?php echo $statuskirim;?> </b></font> </td>
									<?php
								}
						
						?>
						
						
						<?php if($hasil['kode_order']=='Belum Ada Kode Order')
								{
									?>
									<td  align="center" width="12%"> <font color="#ee0000"><b> <?php echo $hasil['kode_order'];?> </b></font> </td>
									<?php
								}
								else
								{
									?>
									<td  align="center" width="12%"> <font color="#00dd00"><b> <?php echo $hasil['kode_order'];?>  </b></font> </td>
									<?php
								}
						
						?>
						
						
						
						<td  align="center">
							<form method="post" action='?view=tagihan-detail&id=<?php echo $hasil['id']; ?>'><br>
								<input type='hidden' name='kode' value="<?php echo $hasil['id'];?>"> <!-- Ini yang diambil -->	
								<input type="submit" name="id" value="Lihat Detail" class="btn btn-theme">
							</form>
						</td>
					</tr>
						<?php 
						}
						?>
			</table>
		</div>
	</div>
	<hr>
	<h4>
		Ketentuan Pengujian :
	</h4>
	<h5>
		Pengujian akan dilakukan setelah konsumen melakukan pembayaran dan mengkonfirmasi kepada Admin Pelayanan Jasa
	</h5>
	<hr>
	<h5>
		Cara melakukan pembayaran dan konfirmasi : <br><br>
		1). Bayar tagihan melalui transfer atau datang ke Balai Penelitian tanah<br><br>
		2). Bagi yang transfer harap meng-Upload foto bukti pembayaran ke <a href="userpage.php?view=transaksi" target=_blank> sini </a> <br><br>
		3). Konfirmasi pembayaran melalui chat kepada admin di <a href="userpage.php?view=chat" target=_blank> sini </a>
		<hr>
	</h5>
</div>