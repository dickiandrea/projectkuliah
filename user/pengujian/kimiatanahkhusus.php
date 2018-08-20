<script type="text/javascript">
			var vjml = 0;
			var temp = 0;
			function run(index)
			{
				var cb = document.getElementById("index"+index);
				var cb1 = document.getElementById("isi"+index);
				var cb2 = document.getElementById("tarif"+index);
				var no_c = document.getElementById("nocontoh"+index);
								
				if(document.getElementById("cekbox"+index).checked == true)
				{
					cb.disabled = false;
					cb1.disabled = false;
					cb2.disabled = false; 
					no_c.disabled = false;
				}
				else
				{
					var akhir = document.getElementById('akhir').value;
					var hitungcb = document.getElementById('coba'+index).value;
					vjml = akhir - hitungcb;
					//alert(hasilakhir);					
					document.getElementById('index'+index).value = 0;
					document.getElementById('akhir').value = vjml;
					
					document.getElementById('coba'+index).value = 0;
					
					cb.disabled = true;
					cb1.disabled = true;
					cb2.disabled = true;
					no_c.disabled = true; 
				}
			}
</script>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
			<form method="post" action="">
				<h2><font color="#23d96d">Permohonan Analisis Kimia Tanah Rutin</font></h2>
				<hr>
				<?php include "koneksi.php";
						$query_analisis = mysqli_query($connect, "SELECT* FROM jenis_analisis WHERE kode_analisis = 'KthK' ");
						$hasil = mysqli_fetch_array($query_analisis);
						{ ?>
						<input type="hidden" name="kode_analisis"  value="<?php echo $hasil['kode_analisis']; ?>" readonly>
						<h3> 1. Jenis Analisis : <font color="#23d96d">  <?php echo $hasil['nama_analisis']; ?> </font> </h3>
				<?php } ?>
				<hr>
					<h3>2. Biodata Pemohon</h3>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<?php include "koneksi.php";
						
						$username = $_SESSION['user1'];
						$ambil = mysqli_query($connect, "SELECT* FROM user WHERE username = '$username'");
						$hasil = mysqli_fetch_array($ambil);
						{
						?>						
						<input type="hidden" name="kode_user" value="<?php echo $hasil['kode_user'];?>" readonly>
						
						<div class="form-group">
							<b> Nama &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;   : </b>  <?php echo $hasil['nama'];?> 
						</div>
						
						<div class="form-group">
							<b> Instansi &#160;&#160;&#160;&#160;&#160; : </b>  <?php echo $hasil['instansi'];?>
						</div>
			
						<div class="form-group">
							<b> Alamat &#160;&#160;&#160;&#160;&#160;&#160;&#160; : </b> <?php echo $hasil['alamat_instansi'];?>
						</div>
			
						<div class="form-group">
							<b> Telepon &#160;&#160;&#160;&#160;&#160;  : </b>  <?php echo $hasil['telp'];?>
						</div>
			
						<div class="form-group">
							<b> Email &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;  : </b>  <?php echo $hasil['email'];?>
						</div>
						<?php } ?>
					</div>
				</div>
				<hr>
					<h3>3. Jumlah Contoh</h3>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<h4> <b>  Jumlah Contoh </b> </h4>
								<input type="number" name="contoh_tanah" class="form-control input-lg" placeholder="Masukkan jumlah contoh" required>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<h4> <b> Desa*</b> </h4>
							<input type="text" name="desa" class="form-control input-lg" placeholder="Masukkan desa" required>
						</div>
					</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<h4> <b> Kecamatan*</b> </h4>
							<input type="text" name="kecamatan" class="form-control input-lg" placeholder="Masukkan kecamatan" required>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<h4> <b> Kabupaten*</b> </h4>
							<input type="text" name="kabupaten" class="form-control input-lg" placeholder="Masukkan kabupaten" required>
						</div>
					</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<h4> <b> Provinsi*</b> </h4>
							<input type="provinsi" name="provinsi" class="form-control input-lg" placeholder="Masukkan provinsi" required>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<h4> <b> Koordinat*: </b> </h4>
							<input type="text" name="koordinat" class="form-control input-lg" placeholder="Longitude & Latitude (x,y)" required>
						</div>
					</div>
				</div>
				
				<hr>
				<h3>4. Parameter Penelitian Analisis Fisika Tanah</h3>
				<div class="row">
						<checkbox name="pertanyaan" value="">
						<table class="table" width="100%" cellpadding="2"  cellspacing="3" align="center">
							
							<tr>
								<td colspan="6">
									<b><font color="#ff0000"> Catatan : </font></b>
									<small>Isikan no contoh sesuai dengan yang dimiliki <br>
									Untuk mencantumkan nomor contoh secara acak, sambungkan dengan tanda (-)
									Contoh : 1-3-5-7-9 </small>
								</td>
							</tr>
							<tr>
								<td width="1%"><h4> <font color="#23d96d">  No </font></h4></td>
								<td width="2%"><h4> <font color="#23d96d">  Pilih* </font></h4></td>
								<td width="70%"><h4> <font color="#23d96d">  Jenis Analisis </font></h4></td>
								<td width="5%"><h4> <font color="#23d96d">  Tarif (Rp./Contoh) </font></h4></td>
								<td width="5%"><h4> <font color="#23d96d">  Jumlah Contoh* </font></h4></td>
								<td width="17%"><h4> <font color="#23d96d">  No Contoh* </font></h4></td>
							</tr>
							
							<?php include "koneksi.php";
							$banyaknya=1;
							$no=1;
							$tmp = "salah";
							$select = mysqli_query($connect, "SELECT* FROM pertanyaan WHERE kode_analisis = 'KthK'");
							while($hasil = mysqli_fetch_array($select))
							{
								if($tmp != $hasil['kelompok'])
								{
								?>
								<tr>
									<td> <?php echo $no; $no++;?></td>
									<td>
										<input type="checkbox" name="pertanyaan[]" value="<?php echo $hasil['kode_pertanyaan']; ?>" id="<?php echo "cekbox".$banyaknya; ?>" onclick="run(<?php echo $banyaknya; ?>);" />Pilih<br /><br />
									</td>
									
									<td>
										<input type="text" id="<?php echo "isi".$banyaknya; ?>" class="form-control input-lg" value="<?php echo $hasil['isi_pertanyaan']; ?>" readonly disabled>
									</td>
									
									<td>
										<input type="text" id="<?php echo "tarif".$banyaknya; ?>" class="form-control input-lg" value="<?php echo $hasil['tarif'];?>" readonly >
									</td>
									
									<td>
										<input type="number" name="<?php echo "contoh_".$hasil['kode_pertanyaan'];;?>" id="<?php echo "index".$banyaknya; ?>"value="" disabled onchange="total(<?php echo $hasil['tarif'];?>, <?php echo "'"."index".$banyaknya."'"; ?>, <?php echo "'"."coba".$banyaknya."'"; ?>);" class="form-control input-lg">
									</td>
									<td>
										<input type="text" name="<?php echo "nocontoh_".$hasil['kode_pertanyaan'];;?>" id="<?php echo "nocontoh".$banyaknya; ?>"value="-" disabled class="form-control input-lg">
									</td>
									
									<input type="hidden" name="coba" id="<?php echo "coba".$banyaknya; ?>" class="form-control input-lg" readonly>
								</tr>
								<?php
								$tmp = $hasil['kelompok'];
								}
								else
								{
								?>
								<tr>
									<td> &nbsp; </td>
									<td>
										<input type="checkbox" name="pertanyaan[]" value="<?php echo $hasil['kode_pertanyaan']; ?>" id="<?php echo "cekbox".$banyaknya; ?>" onclick="run(<?php echo $banyaknya; ?>);" />Pilih<br /><br />
									</td>
								
									<td>
										<input type="text" id="<?php echo "isi".$banyaknya; ?>" class="form-control input-lg" value="<?php echo $hasil['isi_pertanyaan']; ?>" readonly disabled>
									</td>
									
									<td>
										<input type="text" id="<?php echo "tarif".$banyaknya; ?>" class="form-control input-lg" value="<?php echo $hasil['tarif'];?>" readonly >
									</td>
								
									<td>
										<input type="number" name="<?php echo "contoh_".$hasil['kode_pertanyaan'];;?>" id="<?php echo "index".$banyaknya; ?>"value="" disabled onchange="total(<?php echo $hasil['tarif'];?>, <?php echo "'"."index".$banyaknya."'"; ?>, <?php echo "'"."coba".$banyaknya."'"; ?>);" class="form-control input-lg">
									</td>
									<td>
										<input type="text" name="<?php echo "nocontoh_".$hasil['kode_pertanyaan'];;?>" id="<?php echo "nocontoh".$banyaknya; ?>"value="-" disabled class="form-control input-lg">
									</td>
									
									<input type="hidden" name="coba" id="<?php echo "coba".$banyaknya; ?>" class="form-control input-lg" readonly>
								</tr>
							<?php
								}
							$banyaknya++;
							}
							?>
							
							<tr>
								<td colspan="3" align="right">
									<h4> TOTAL HARGA : </h4>
								</td>
								<td colspan="4">
									<input type="text" name="total_biaya" id="akhir" value="" onchange="total()" class="form-control input-lg" readonly>
								</td>
							</tr>
						</table>
						
						<hr>
							<h3>5. Metode Pembayaran | <small> Pilih Salah Satu* </small> </h3>
						<hr>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<h3> <b>
										<font color="#23d96d">
											<input type="radio" required name="metode_bayar" value="Langsung">
											1. Langsung
											</input>
										</font>
										</b>
									</h3>
									<h3>
										<small>
											1. Cetak Invoice Setelah kirim data <br><br>
											2. Bawa Form Invoice ke Balai Penelitian Tanah <br><br>
											3. Kemudian bayar langsung di Pelayanan Jasa Balai Penelitian Tanah
										</small>
										<h4>*Catatan : <font color="#ff0000"> Maksimal pembayaran h+3 </font> <br> <small> Setelah pengisian form ini </small> </h4>
									</h3>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<h3> <b> <font color="#23d96d">
									<input type="radio" required name="metode_bayar" value="Transfer"> 2. Transfer </input> &nbsp;
										</font> </b>
									</h3>

									<h3>
										Bank : Mandiri <br><br>
										No. Rek : <br><br>
										A/N : Balai Penelitian Tanah
									</h3>
									<h4>*Catatan : <font color="#ff0000"> Maksimal pembayaran h+3 </font> <br> <small> Setelah pengisian form ini </small> </h4>
									<hr>
									Setelah transfer, wajib mengirimkan foto struk transfer ke Pelayanan Jasa |
									<small> <b> Jika tidak, maka pembayaran tidak akan dikonfirmasi </b> </small>
								</div>
							</div>
							<input type="hidden" name="status_bayar" value="belum_dikonfirmasi">
						</div>
						<hr>
						
						<h3>6. Jenis Pengiriman Barang | <small> Pilih Salah Satu* </small>  </h3>
						<hr>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<h3>
										<input type="radio" required name="metode_kirim" value="Langsung">
										<font color="#23d96d"> 1. Langsung </font> </input> &nbsp;
									</h3>
									<h4>*Catatan : <font color="#ff0000"> Maksimal Pengiriman h+3 </font> </h4>
									Membawa barang yang akan diteliti ke Balai Penelitian Tanah,
								</div>
							</div>

							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<h3>
										<input type="radio" required name="metode_kirim" value="Paket">
										<font color="#23d96d"> 2. Paket</font> </input>
									</h3>

									<h4>*Catatan : <font color="#ff0000"> Maksimal Pengiriman h+3 </font> </h4>
									Setelah melakukan pembayaran, wajib mengirimkan foto <b> Struk Pengiriman </b> dan <b> No.Resi </b> ke Pelayanan Jasa
								</div>
							</div>
						</div>
						<hR>
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<div class="form-group">
									<h3> Tambah keterangan lain : </h3>
										<textarea name="keterangan" cols="20" rows="15" class="form-control input-lg"> </textarea>
								</div>
							</div>
						</div>
						
						<br> <hr> <br>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<h4> Keterangan : <b><font color="#ff0000">* (Wajib diisi!) </font></b> </h4>
								</div>
							</div>
							<div class="col-xs-8 col-sm-6 col-md-3">
								
							</div>
							<div class="col-xs-8 col-sm-8 col-md-3">
								<div class="form-group">
									<input type="submit" name="submit" value="Kirim Data" class="btn btn-theme btn-lg btn-block">
								</div>
							</div>
						</div>
					<hr>
					<a href="?view=pengujiankimia" class="btn btn-theme"> Kembali </a>
				</div>
			</form>
			<script type="text/javascript">
					
					function total(tarif, index, coba)
					{						
						// ini fungsi untuk mengambil nilai dari input index atau banyaknya contoh
						var nomer = document.getElementById(index).value;
						
						// ini untuk mengambil nilai tarif pada baris pertanyaan 
						var kurang = document.getElementById(coba).value;
						
						// ini untuk menghitung tarif dikali banyak contoh
						var hitung = tarif* nomer;
						
						//Untuk menguji coba proses penjumlahan
						//alert(vjml +"+("+  tarif +"*"+ nomer +")-"+ kurang);						
						
						//untuk menghitung nilai total
						vjml = vjml + hitung - kurang ;
						
						//untuk mengubah nilai input yg bernama id total
						document.getElementById('akhir').value = vjml;
						
						//ini untuk menyimpan data sementara, digunakan sewaktu mengedit data jumlah contoh
						document.getElementById(coba).value = hitung;
						
					}
		
			</script>
		</div>
	</div>
</div>

<?php
include "koneksi.php";
if(isset($_POST['submit']))
		{
			$pertanyaan = $_POST['pertanyaan'];
			$pertanyaan_terpilih = "";
			foreach ($pertanyaan as $pilihan)
			{
				$pertanyaan_terpilih .= $pilihan . "&" . $_POST['contoh_'.$pilihan] . "&" . $_POST['nocontoh_'.$pilihan] . ", ";
			}
			
			/*Ini Kode Order
			$bulan = date('m');
			$tahun = substr(date('Y'), 2, 2);
			$cek_no_order = mysqli_query ($connect,"select kode_order from tborder");
			$hasil_no = mysqli_num_rows($cek_no_order);
			$urut = $hasil_no+1;			
			$kode_order = $tahun.'.'.$bulan.'.'.$urut;*/
			
			$tanggal_terima = date('Y-m-d');
			
			$kode_analisis = addslashes($_POST['kode_analisis']);
			$kode_user = addslashes($_POST['kode_user']);
			
			$contoh_tanah = addslashes($_POST['contoh_tanah']);
			
			$desa = addslashes($_POST['desa']);
			$kecamatan = addslashes($_POST['kecamatan']);
			$kabupaten = addslashes($_POST['kabupaten']);
			$provinsi = addslashes($_POST['provinsi']);
			$koordinat = addslashes($_POST['koordinat']);
			
			$total_biaya = addslashes($_POST['total_biaya']);
			
			$metode_bayar = addslashes($_POST['metode_bayar']);
			$status_bayar = "Belum Dibayar";
			
			$metode_kirim = addslashes($_POST['metode_kirim']);
			$status_kirim = "Belum Dikirim";
			
			$keterangan = addslashes($_POST['keterangan']);
			$status_penelitian = "Belum Diproses";

			$kodeorder = "Belum Ada Kode Order";
			
			$cek_id = mysqli_query ($connect,"select id from tborder");
			$idnya = mysqli_num_rows($cek_id);
			$hasilid = $idnya+1;
			
			$in = "insert into tborder values
			(
			
			'$hasilid',
			'$kodeorder',
			
			'$tanggal_terima',
			'$kode_analisis',
			'$kode_user',
			
			'$contoh_tanah',
			'0',
			'0',
			'0',
			'0',
			'0',
			'0',
			
			'$desa',
			'$kecamatan',
			'$kabupaten',
			'$provinsi',
			'$koordinat',
			
			'$pertanyaan_terpilih',
			
			'$total_biaya',
			'$metode_bayar',
			'$status_bayar',
			
			'$metode_kirim',
			'$status_kirim',
			
			'$keterangan'
			)";
			
			$sql = mysqli_query($connect,$in);
			if($sql)
			{
				$query_masukin = "insert into status (id_order) values('$hasilid')";
				$masukin_status = mysqli_query($connect,$query_masukin);
				
				if($masukin_status)
					{
						?>
						<script language="JavaScript"> alert('Pengujian Berhasil Ditambahkan');
						document.location='?view=lihat-tagihan';</script>
						<?php
					}
					else
					{
						?>
					<script language="JavaScript"> alert('WARNING!! Pengujian Gagal Ditambahkan');</script>
					<?php
					}
				
				?>
				<script language="JavaScript"> alert('Pengujian Berhasil Ditambahkan');
				document.location='?view=lihat-tagihan';</script>
				<?php
			}
			else
			{
				?>
				<script language="JavaScript"> alert('Data tidak lengkap, silahkan cek lagi');
				</script>
				<?php
			}
		}
	?>