<script type="text/javascript">
			var vjml = 0;
			var temp = 0;
			function run(index)
			{
				var cb = document.getElementById("index"+index);
				var cb1 = document.getElementById("isi"+index);
				var cb2 = document.getElementById("tarif"+index);
								
				if(document.getElementById("cekbox"+index).checked == true)
				{
					cb.disabled = false;
					cb1.disabled = false;
					cb2.disabled = false; 
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
				}
			}
</script>
<div class="container">
	<div class="row">
		<div class="col-xs-10 col-md-10 col-md-offset-1">
			<h3>Simulasi Analisis Uji Kimia Tanah Khusus</h3>
				<div class="row">
					<div class="col-lg-12">
						<checkbox name="pertanyaan" value="">
						<table class="table" width="1000px" cellpadding="2"  cellspacing="3" align="center">
							<tr>
								<td width="2%"><h4> <font color="#23d96d">  No </font></h4></td>
								<td width="2%"><h4> <font color="#23d96d">  Pilih* </font></h4></td>
								<td width="50%"><h4> <font color="#23d96d">  Jenis Analisis </font></h4></td>
								<td width="10%"><h4> <font color="#23d96d">  Tarif (Rp./Contoh) </font></h4></td>
								<td width="13%"><h4> <font color="#23d96d">  Jumlah Contoh* </font></h4></td>
							</tr>
							<?php
							include "koneksi.php";
							$banyaknya=1;
							$no=1;
							$select = mysqli_query($connect, "SELECT* FROM pertanyaan WHERE kode_analisis = 'KPa'");
							while($hasil = mysqli_fetch_array($select))
							{
							
							?>
							<tr>
								<td> <?php echo $no; $no++; ?></td>
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
									<input type="number" name="banyaknya" id="<?php echo "index".$banyaknya; ?>"value="" disabled onchange="total(<?php echo $hasil['tarif'];?>, <?php echo "'"."index".$banyaknya."'"; ?>, <?php echo "'"."coba".$banyaknya."'"; ?>);" class="form-control input-lg">
								</td>
									<input type="hidden" name="coba" id="<?php echo "coba".$banyaknya; ?>" class="form-control input-lg" readonly>
							</tr>
							<?php
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
							<tr>
								<td colspan="7" align="right">
									<a href="?view=simulasi" class="btn btn-theme"> Kembali </a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
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