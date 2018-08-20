<?php
require_once '../pusatdata/core/init.php';
error_reporting(E_ALL);
		
	   
	   if(isset($_GET['kode']))
	   {
			$syarat = $_GET['kode'];
			$kata = "select kode_analisis, nama_analisis from jenis_analisis where kode_sp='$syarat'";

		   $result = $mysqli->query($kata);
		   echo "<option>-- Pilih analisis --</option>";
		   while($data = $result->fetch_assoc())
		   {
			   $kd = $data['kode_analisis'];
			   $nm = $data['nama_analisis'];
				echo "<option value=\"$kd\">$nm</option>";
		   }   
	   }
	   else if(isset($_GET['pertanyaan'])){
		   $syarat = $_GET['pertanyaan'];
		   $kata = "select distinct kelompok from pertanyaan where kode_analisis='$syarat'";

			$result = $mysqli->query($kata);
			$hasil = $result->num_rows;
			$hitung = $hasil + 1;
			echo $hitung;

	   }else if(isset($_GET['tambah'])){

		   $kata = "select count(kode_analisis) from pertanyaan";

			$result = $mysqli->query($kata);
			$hasil = $result->fetch_array()[0];
			$hitung = $hasil + 1;
			echo $hitung;
			
	   }else if(isset($_GET['filter_menggunakanbulan'])){
		   $bulan = $_GET['filter_menggunakanbulan'];
		   $sp = $_GET['filter_laporansp'];		   
		   if($sp == NULL){
				$query = "select 
					a.kode_order, a.tanggal_terima, b.nama, a.status_kirim, a.status_bayar, c.selesai, e.nama_sp, b.instansi, b.alamat_instansi, b.telp, c.pengambilan, c.kode_order, c.nomer_contoh
					from 
						tborder as a inner join user as b inner join status as c inner join jenis_analisis as d inner join surat_permohonan as e
					where 
						a.kode_user = b.kode_user and a.kode_order = c.kode_order and a.kode_analisis = d.kode_analisis and d.kode_sp = e.kode_sp and C.pengambilan != ''
						and a.tanggal_terima like '$bulan%'
					order  by a.kode_order";
		   }else{
			   $query = "select 
					a.kode_order, a.tanggal_terima, b.nama, a.status_kirim, a.status_bayar, c.selesai, e.nama_sp, b.instansi, b.alamat_instansi, b.telp, c.pengambilan, c.kode_order, c.nomer_contoh
					from 
						tborder as a inner join user as b inner join status as c inner join jenis_analisis as d inner join surat_permohonan as e
					where 
						a.kode_user = b.kode_user and a.kode_order = c.kode_order and a.kode_analisis = d.kode_analisis and d.kode_sp = e.kode_sp and C.pengambilan != ''
						and a.tanggal_terima like '$bulan%' and a.kode_analisis like '$sp%'
					order  by a.kode_order";
		   }
		   //var_dump($query);die();
			$result = $mysqli->query($query);
			//var_dump($result);die();
			if(($result->num_rows) > 0)
			{
				$no = 1;	
				while($data = $result->fetch_assoc())
				{
					echo "<tr>";
						echo "<td style='text-align:center;'>".$no."</td>";
						echo "<td >
							Nama : ".$data['nama']."<br>
							Instansi : ".$data['instansi']."<br>
							Telp : ".$data['telp']."
						 </td>";
						 echo "<td style=\"text-align:center;\">".Convert::convert_tanggal($data['tanggal_terima'])."</td>";
						 echo "<td style=\"text-align:center;\">".$data['nama_sp']."</td>";
						 echo "<td style=\"text-align:center;\">".$data['kode_order']." / ".$data['nomer_contoh']."</td>";
						 $pengambil = explode("&", $data['pengambilan']);
						 $nmpengambil = $pengambil[2];
						 $tglpengambil = $pengambil[0];
						 echo "<td >
							Tanggal : ".$tglpengambil."<br>
							Pengambil : ".$nmpengambil."<br>
						 </td>";
						 echo "<td style=\"text-align:center;\">
								<form action=\"laporan/print_kwitansi.php\" method=\"post\" target=\"_blank\">
									<input type=\"submit\" class=\"btn btn-info btn-sm\" value=\"Kwitansi\">
									<input type=\"hidden\" class=\"btn btn-info btn-sm\" name=\"unik\" value=\"".$data['kode_order']."\">
								</form>
								<form action=\"?page=lihat_detail_selesai\" method=\"post\" >
									<input type=\"submit\" class=\"btn btn-info btn-sm\" value=\"Lihat Detail\">
									<input type=\"hidden\" class=\"btn btn-info btn-sm\" name=\"kode_order\" value=\"".$data['kode_order']."\">
								</form>
							</td>";
					echo "</tr>";
					$no++;
				}
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }else if(isset($_GET['filter_menggunakanlaporansp'])){
		   $bulan = $_GET['filter_bulan'];
		   $sp = $_GET['filter_menggunakanlaporansp'];		   
		   if($sp == NULL){
				$query = "select 
					a.kode_order, a.tanggal_terima, b.nama, a.status_kirim, a.status_bayar, c.selesai, e.nama_sp, b.instansi, b.alamat_instansi, b.telp, c.pengambilan, c.kode_order, c.nomer_contoh
					from 
						tborder as a inner join user as b inner join status as c inner join jenis_analisis as d inner join surat_permohonan as e
					where 
						a.kode_user = b.kode_user and a.kode_order = c.kode_order and a.kode_analisis = d.kode_analisis and d.kode_sp = e.kode_sp and C.pengambilan != ''
						and a.tanggal_terima like '$bulan%'
					order  by a.kode_order";
		   }else{
			   $query = "select 
					a.kode_order, a.tanggal_terima, b.nama, a.status_kirim, a.status_bayar, c.selesai, e.nama_sp, b.instansi, b.alamat_instansi, b.telp, c.pengambilan, c.kode_order, c.nomer_contoh
					from 
						tborder as a inner join user as b inner join status as c inner join jenis_analisis as d inner join surat_permohonan as e
					where 
						a.kode_user = b.kode_user and a.kode_order = c.kode_order and a.kode_analisis = d.kode_analisis and d.kode_sp = e.kode_sp and C.pengambilan != ''
						and a.tanggal_terima like '$bulan%' and a.kode_analisis like '$sp%'
					order  by a.kode_order";
		   }
		   //var_dump($query);die();
			$result = $mysqli->query($query);
			//var_dump($result);die();
			if(($result->num_rows) > 0)
			{
				$no = 1;	
				while($data = $result->fetch_assoc())
				{
					echo "<tr>";
						echo "<td style='text-align:center;'>".$no."</td>";
						echo "<td >
							Nama : ".$data['nama']."<br>
							Instansi : ".$data['instansi']."<br>
							Telp : ".$data['telp']."
						 </td>";
						 echo "<td style=\"text-align:center;\">".Convert::convert_tanggal($data['tanggal_terima'])."</td>";
						 echo "<td style=\"text-align:center;\">".$data['nama_sp']."</td>";
						 echo "<td style=\"text-align:center;\">".$data['kode_order']." / ".$data['nomer_contoh']."</td>";
						 $pengambil = explode("&", $data['pengambilan']);
						 $nmpengambil = $pengambil[2];
						 $tglpengambil = $pengambil[0];
						 echo "<td >
							Tanggal : ".$tglpengambil."<br>
							Pengambil : ".$nmpengambil."<br>
						 </td>";
						 echo "<td style=\"text-align:center;\">
								<form action=\"laporan/print_kwitansi.php\" method=\"post\" target=\"_blank\">
									<input type=\"submit\" class=\"btn btn-info btn-sm\" value=\"Kwitansi\">
									<input type=\"hidden\" class=\"btn btn-info btn-sm\" name=\"unik\" value=\"".$data['kode_order']."\">
								</form>
								<form action=\"?page=lihat_detail_selesai\" method=\"post\" >
									<input type=\"submit\" class=\"btn btn-info btn-sm\" value=\"Lihat Detail\">
									<input type=\"hidden\" class=\"btn btn-info btn-sm\" name=\"kode_order\" value=\"".$data['kode_order']."\">
								</form>
							</td>";
					echo "</tr>";
					$no++;
				}
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }else if(isset($_GET['filter_sp'])){
		   $syarat = $_GET['filter_sp'];
		   $kata = "select kode_analisis, nama_analisis from jenis_analisis where kode_sp='$syarat'";

		   $result = $mysqli->query($kata);
		   echo "<option>-- Pilih analisis --</option>";
		   while($data = $result->fetch_assoc())
		   {
			   $kd = $data['kode_analisis'];
			   $nm = $data['nama_analisis'];
				echo "<option value=\"$kd\">$nm</option>";
		   }   
	   }else if(isset($_GET['filter_isi_sp'])){
		   $syarat = $_GET['filter_isi_sp'];
		   $query = "select a.kode_pertanyaan, a.kode_analisis, a.isi_pertanyaan,a.tarif, b.nama_analisis from pertanyaan as a inner join jenis_analisis as b where a.kode_analisis=b.kode_analisis and a.kode_analisis like '$syarat%'";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{
				echo "<tr>
						  <td></td>
						  <td>".$data['kode_pertanyaan']."</td>			  
						  <td>".$data['nama_analisis']."</td>			  
						  <td>".$data['isi_pertanyaan']."</td>
						  <td>Rp.".$data['tarif']."</td>
						  <td>
							<a href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=update\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
							<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=delete\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
						  </td>
					</tr>";
				}   
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }else if(isset($_GET['filter_isi_analisis'])){
		   $syarat = $_GET['filter_isi_analisis'];
		   $query = "select a.kode_pertanyaan, a.kode_analisis, a.isi_pertanyaan,a.tarif, b.nama_analisis from pertanyaan as a inner join jenis_analisis as b where a.kode_analisis=b.kode_analisis and a.kode_analisis like '%$syarat%'";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{
				echo "<tr>
						  <td></td>
						  <td>".$data['kode_pertanyaan']."</td>			  
						  <td>".$data['nama_analisis']."</td>			  
						  <td>".$data['isi_pertanyaan']."</td>
						  <td>Rp.".$data['tarif']."</td>
						  <td>
							<a href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=update\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
							<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=delete\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
						  </td>
					</tr>";
				}   
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }else if(isset($_GET['chat'])){
		   $syarat = $_GET['chat'];
		   $query = "
						select c.kode_user, a.nama, c.isi,  c.tanggal from user as a
						join 
							(SELECT kode_user, Max(tanggal) as tanggal
							FROM chat
							GROUP BY kode_user)
						b
						JOIN 
						chat as c
						on
						a.kode_user = b.kode_user and c.kode_user = a.kode_user and b.tanggal=c.tanggal and a.nama like '%$syarat%'
							";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{	$tgl = explode(" ", $data['tanggal']);
					$sekali = explode(" ",Convert::convert_tanggal($tgl[0]));
					$tglakhir = $sekali[0]." ".$sekali[1];
					?>						
						<li>
						  <a href="#" onclick="openchat(<?php echo $data['kode_user'];?>);" class="item clearfix">
							<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
							<span class="from"><?php echo $data['nama'];?></span>
							<p><?php echo substr($data['isi'],0, 20);?></p>
							<span class="date"><?php echo $tglakhir;?></span>
						  </a>
						</li>
					<?php
				}   
			}else{
				?>
				<li>
				  <a href="#" class="item clearfix">					
					<p>Tidak ada</p>					
				  </a>
				</li>
				<?php
			}
			
	   }else if(isset($_GET['isimedia'])){
		   $syarat = $_GET['isimedia'];
		   $query = "
						select * from download where kode_user = '$syarat';
						";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{	
					?>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<a href="?page=lihat_gambar&alamat=<?php echo $data['file']."&nama=".$data['nama_file'];?>">
							<img src="../user/user/files/<?php echo $data['file'];?>" title="<?php echo $data['nama_file'];?>" class="img-responsive img-rounded">
							<p style="text-align:center;"><?php echo $data['nama_file'];?></p>
						</a>
					</div>
					<?php
				}   
			}else{
				?>
					<p>Tidak ada</p>					
				<?php
			}
			
	   }else if(isset($_GET['isichat'])){
		   $syarat = $_GET['isichat'];
		   $result = $mysqli->query("update chat set tampil = 'ya' where kode_user='$syarat'");
		   $kata = "select username, nama, email, instansi from user where kode_user = '$syarat'";
		   $result = $mysqli->query($kata);
		   while($data = $result->fetch_assoc()){
			   $nama = $data['nama'];
			   $username = $data['username'];
			   $instansi = $data['instansi'];
			   $email = $data['email'];
		   }
			?>			
			
			<div class="title">
				<input type="hidden" name="kode_user" id="kode_useraktif" value="<?php echo $syarat;?>">
				<h1><?php echo strtoupper($nama);?><small> (<?php echo $email;?>)</small></h1>
				<p><b>Instansi:</b> <?php echo $instansi;?></p>
				  <div class="btn-group" role="group" aria-label="...">					
					<form method="post" action="?page=update_chat">
						<input type="hidden" name="username" id="kode_useraktif" value="<?php echo $username;?>">
						<input type="hidden" name="kode_user" id="kode_useraktif" value="<?php echo $syarat;?>">
						<input type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" name="hapuschat" class="btn btn-danger btn-sm" value="Hapus Chat">
					</form>
				  </div>
			 </div>			
			 <ul class="conv" style="overflow-y: scroll;min-height:1000px;max-height: 350px;" >
			 
			<?php
			$query = "
						select username, isi, tanggal from chat where kode_user = '$syarat' order by tanggal asc;
						";
			$tmpuser = "salah";
			$tmpadmin = "salah";
			$akhiradmin = "salah";
			$akhiruser = "salah";
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{	
					if($data['username'] != "admin"){
						if($akhiradmin == "sini"){
							$tmpuser = "salah";
							$akhiruser = "salah";
							echo "</li>";
						}
						
						if($data['username'] != $tmpadmin){
						?>
						<li class="kiri">
						  <img src="../images/logo/agro-inovasi.png" alt="balittanah" class="kiri-img img-circle">						  
						  <p><span class="ballon color1 "><?php echo $data['isi'];?></span></p>
						<?php		
							$tmpadmin = $data['username'];
							continue;						
						}else{
						?>
							<p><span class="ballon color1"><?php echo $data['isi'];?></span></p>
						<?php
							$akhiruser = "sini";
							continue;
						}						
						
					}else if($data['username'] == "admin"){
						if($akhiruser == "sini"){
							$tmpuser = "salah";
							$akhiruser = "salah";
							echo "</li>";
						}
						if($data['username'] != $tmpadmin){
						?>
						<li class="kanan">
						  <img src="../images/logo/balittanah.png" alt="balittanah" class="kanan-img img-circle pull-right">						  
						  <p><span class="ballon color2 "><?php echo $data['isi'];?></span></p>
						<?php		
							$tmpadmin = $data['username'];
							continue;						
						}else{
						?>
							<p><span class="ballon color2"><?php echo $data['isi'];?></span></p>
						<?php
							$akhiradmin = "sini";
							$tmpuser = "salah";
							$akhiradmin = "salah";
							$akhiruser = "salah";
							continue;
						}						
						
					}
					
				}
				//echo "</li>"
				?><li id="bawah"></li>
					</ul>
				  <div class="write">
						<textarea class="textarea form-control wysihtml5-textarea" id="isipesan" placeholder="Enter text ..."  style="height:100px; width:100%;"></textarea></p>
						<input type="reset" value="Reset" class="btn btn-primary" id="kirimisi"  onclick="resetchat();">
						<input type="submit" value="Kirim" class="btn btn-default" id="resetisi" onclick="kirimchat();">						
				  </div>				
				<?php
			}else{
				?>
				<li>
				  <a href="#" class="item clearfix">					
					<p>Tidak ada</p>					
				  </a>
				</li>
			</ul>	
				  <div class="write">					  
						<textarea class="textarea form-control wysihtml5-textarea" id="isipesan" placeholder="Enter text ..."  style="height:100px; width:100%;"></textarea>
						<input type="reset" value="Reset" class="btn btn-primary" id="kirimisi"  onclick="resetchat();">
						<input type="submit" value="Kirim" class="btn btn-default" id="resetisi" onclick="kirimchat();">						
				  </div>
				<?php
				
			}			
			
	   }else if(isset($_GET['kirimchatkode'])){
		   $syarat = $_GET['kirimchatkode'];
		   $isi = $_GET['kirimisichat'];
		   $kata = "insert into chat values ('', 'admin', 'balittanah','$syarat','$isi', now(),'ya')";
		   $result = $mysqli->query($kata);
			echo "<p>".$kata."</p>";
	   }else if(isset($_GET['chatadmin'])){
		   $syarat = $_GET['chatadmin'];
		   $query = "
						select a.kode_admin, a.nama_admin, a.email, b.isi, b.tanggal from admin as a
						inner join chatadmin as b
						where
						a.kode_akses != 'SAO' and a.kode_akses != 'PL' and a.kode_admin != penerima and a.nama_admin like '%$syarat%'
					";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{	$tgl = explode(" ", $data['tanggal']);
					$sekali = explode(" ",Convert::convert_tanggal($tgl[0]));
					$tglakhir = $sekali[0]." ".$sekali[1];
					?>						
						<li>
						  <a href="#" onclick="openchatadmin(<?php echo $data['kode_admin'];?>);" class="item clearfix">
							<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
							<span class="from"><?php echo $data['nama_admin'];?></span>
							<p><?php echo substr($data['isi'],0, 20);?></p>
							<span class="date"><?php echo $tglakhir;?></span>
						  </a>
						</li>
					<?php
				}   
			}else{
				?>
				<li>
				  <a href="#" class="item clearfix">					
					<p>Tidak ada</p>					
				  </a>
				</li>
				<?php
			}
			
	   }else if(isset($_GET['isichatadmin'])){
		   $syarat = $_GET['isichatadmin'];
		   $pengirim = $_GET['pengirim'];
		   $result = $mysqli->query("update chatadmin set tampil = 'ya' where penerima='$syarat'");
		   $kata = "select kode_admin, nama_admin, email from admin where kode_admin = '$syarat'";
		   $result = $mysqli->query($kata);
		   if($pengirim == "0"){
				?>
					<div class="title">
						<input type="hidden" name="kode_admin" id="kode_adminaktif" value="0">
						<h1>Balittanah<small> Balai Penelitian Tanah</small></h1>
						  <div class="btn-group" role="group" aria-label="...">	
							<form method="post" action="?page=update_chat">
								<input type="text" name="penerima"  value="<?php echo $syarat;?>">
								<input type="text" name="pengirim" id="kode_useraktif" value="<?php echo $pengirim;?>">
								<input type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" name="hapuschatadmin" class="btn btn-danger btn-sm" value="Hapus Chat">
							</form>
						  </div>
					 </div>   
				<?php			
		   }else{
			   if(($result->num_rows) > 0){
				while($data = $result->fetch_assoc()){
				   $nama = $data['nama_admin'];
				   $email = $data['email'];
				}
				?>			
				
					<div class="title">
						<input type="hidden" name="kode_admin" id="kode_adminaktif" value="<?php echo $syarat;?>">
						<h1><?php echo strtoupper($nama);?><small> (<?php echo $email;?>)</small></h1>
						  <div class="btn-group" role="group" aria-label="...">	
							<form method="post" action="?page=update_chat">
								<input type="text" name="penerima"  value="<?php echo $syarat;?>">
								<input type="text" name="pengirim" id="kode_useraktif" value="<?php echo $pengirim;?>">
								<input type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" name="hapuschatadmin" class="btn btn-danger btn-sm" value="Hapus Chat">
							</form>
						  </div>
					 </div>   
				<?php
			   }else{
				?>
					<div class="title">
						<input type="hidden" name="kode_admin" id="kode_adminaktif" value="0">
						<h1>Balittanah<small> Balai Penelitian Tanah</small></h1>
					 </div>   
				<?php			
			   }
		   }
		   
		   	?>	
			 <ul class="conv" style="overflow-y: scroll;min-height:200px;max-height: 350px;" >
			 
			<?php
			$query = "
						select pengirim, penerima, isi, tanggal from chatadmin where (pengirim = '$syarat' or pengirim = '$pengirim') and (penerima = '$syarat' or penerima ='$pengirim') order by tanggal asc
						";
			$tmpuser = "salah";
			$tmpadmin = "salah";
			$akhiradmin = "salah";
			$akhiruser = "salah";
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{	
					if($data['pengirim'] != $pengirim){
						if($akhiradmin == "sini"){
							$tmpuser = "salah";
							$akhiruser = "salah";
							echo "</li>";
						}
						
						if($data['pengirim'] != $tmpadmin){
						?>
						<li class="kiri">
						  <img src="../images/logo/agro-inovasi.png" alt="balittanah" class="kiri-img img-circle">						  
						  <p><span class="ballon color1 "><?php echo $data['isi'];?></span></p>
						<?php		
							$tmpadmin = $data['pengirim'];
							continue;						
						}else{
						?>
							<p><span class="ballon color1"><?php echo $data['isi'];?></span></p>
						<?php
							$akhiruser = "sini";
							continue;
						}						
						
					}else if($data['pengirim'] == $pengirim){
						if($akhiruser == "sini"){
							$tmpuser = "salah";
							$akhiruser = "salah";
							echo "</li>";
						}
						if($data['pengirim'] != $tmpadmin){
						?>
						<li class="kanan">
						  <img src="../images/logo/balittanah.png" alt="balittanah" class="kanan-img img-circle pull-right">						  
						  <p><span class="ballon color2 "><?php echo $data['isi'];?></span></p>
						<?php		
							$tmpadmin = $data['pengirim'];
							continue;						
						}else{
						?>
							<p><span class="ballon color2"><?php echo $data['isi'];?></span></p>
						<?php
							$akhiradmin = "sini";
							$tmpuser = "salah";
							$akhiradmin = "salah";
							$akhiruser = "salah";
							continue;
						}						
						
					}
					
				}
				//echo "</li>"
				?><li id="bawah"></li>
			</ul>
				<?php
			}else{
				?>
				<li>
				  <a href="#" class="item clearfix">					
					<p>Tidak ada</p>					
				  </a>
				</li>
			</ul>
			
			<?php
			}
		  ?>
		  
		  <div class="write">					  
				<textarea class="textarea form-control wysihtml5-textarea" id="isipesan" placeholder="Enter text ..."  style="height:100px; width:100%;"></textarea>
				<input type="reset" value="Reset" class="btn btn-primary" id="kirimisi"  onclick="resetchat();">
				<input type="submit" value="Kirim" class="btn btn-default" id="resetisi" onclick="kirimchatadmin();">						
		  </div>
		  
		  
				<?php
										
			
	   }else if(isset($_GET['penerimachatadmin'])){
		   $penerima = $_GET['penerimachatadmin'];
		   $pengirim = $_GET['pengirim'];
		   $isi = $_GET['kirimisichatadmin'];
		   $kata = "insert into chatadmin values ('', '$pengirim','$penerima','$isi', now(),'ya', '$pengirim$penerima')";
		   $result = $mysqli->query($kata);
			echo "<p>".$kata."</p>";
			
	   }else if(isset($_GET['grafik'])){
		   $kata = "
				select 
					dayname(tanggal_terima) as hari, 
					sum(if(kode_analisis like 'K%', 1, 0)) as kimia,
					sum(if(kode_analisis like 'B%', 1, 0)) as biologi,
					sum(if(kode_analisis like 'M%', 1, 0)) as mineralogi,
					sum(if(kode_analisis like 'F%', 1, 0)) as fisika
				from tborder 
				where week(tanggal_terima) = week(now())
				group by tanggal_terima order by tanggal_terima";
			$result = $mysqli->query($kata);
			$data = array();
			foreach($result as $row){
				$data[] = $row;
			}
			$result->close();$mysqli->close();
			print json_encode($data);
			
	   }
	   