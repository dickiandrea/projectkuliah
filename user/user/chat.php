<?php include "koneksi.php";
	$username = $_SESSION['user1'];
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
	$hasil = mysqli_fetch_array($sql) or die (mysqli_error($connect));
	
	$nama = $hasil['nama'];
	$instansi = $hasil['instansi'];
	$user = $hasil['kode_user'];
	$usernameku = $hasil['username'];
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<h3 align="center"> <font color="#23d96d"> Riwayat Percakapan Anda</font> </h3>
				<div style="width:100%; height:550px; border-radius:15px; padding:30px; margin-bottom:40px; margin-top:25px; overflow-y:scroll; border:1px solid #ddd;">
					<?php
						$ambil = mysqli_query($connect,"SELECT * FROM chat WHERE kode_user=$user ORDER BY tanggal asc");
						while($tampil=mysqli_fetch_array($ambil))
						{
						$idchat = $tampil['id'];
						$username = $tampil['username'];
					
						if($username!='admin')
						{
						?>
						<div style="background:#07a957; width:50%; border-radius:35px; padding: 0 25px 0 30px; margin-bottom:15px; margin-left:50%;">
							<table width='100%'>
								<tr>
									<td colspan="3"><br>
										<h4 align="right">
											<font color="#fff"> <?php echo $tampil['isi'];?> </font>
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h6 align="right">
											<small>
												<font color="#fff"> Terkirim : <?php echo $tampil['tanggal'];?> </font>
											</small>
										</h6>
									</td>
								</tr>
								
								<!-- <tr>
									<a href='user/delete.php?id=<php echo $idchat;?>' class="btn btn-theme" onClick="return confirm('Data akan dihapus?');"> Hapus </a>
								</tr> -->
							</table>
						</div>						
						<?php
						}
						else
						{
						?>
						<div style="background:#23d96d; width:50%; color:#fff; border-radius:35px; padding: 0 25px 0 30px; margin-bottom:15px;">
							<table width='100%'>
								<tr>
									<td colspan="3"><br>
										<h4 align="left">
											<font color="#fff"><?php echo $tampil['isi'];?></font>
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h6 align="left">
											<small> 
												<font color="#fff"> Dibalas :  <?php echo $tampil['tanggal'];?> / ADMIN </font>
											</small>
										</h6>
									</td>
								</tr>
							
								<!-- <tr>
									<a href='user/delete.php?id=<php echo $idchat;?>' class="btn btn-theme" onClick="return confirm('Data akan dihapus?');"> Hapus </a>
								</tr> -->
							</table>
						</div>
						<?php
						}
					}
				?>
			</div>
			<hr>
		<div class="row">
			<div class="col-lg-12">
				<h3 align="center">
					<font color="#23d96d">
						<b>
							Tuliskan pesan anda pada kolom yang tersedia
						</b>
					</font>
				</h3>
				<form method='post' action='' enctype="multipart/form-data">
						
						<label>Username :</label>
							<input class="form-control input-lg" name="username" type="text" readonly size="20" maxlength="30" value="<?php echo $usernameku; ?>"> <br>
						
						<label>Instansi	:</label>
							<input class="form-control input-lg" name="instansi" type="text"readonly size="20" maxlength="30" value="<?php echo $instansi; ?>">
						
						<br>
						<label>Pesan</label><br>
							<textarea name="isi" required cols="80" rows="7" id="member-text" ></textarea>
						<br><br>
						<input name="kode_user" type="hidden" value="<?php echo $hasil['kode_user']; ?>">
						<input class="btn btn-medium btn-theme" type="submit" name="submit" value="Kirim">
				</form>
			</div>
		</div>
				
				<?php
					if(isset($_POST['submit']))
					{
						$username = addslashes($_POST['username']);
						$isi = addslashes(strip_tags($_POST['isi']));
						$user = addslashes($_POST['kode_user']);
						
						if (empty($isi))
						{
				?>
						<script language="JavaScript">
							alert('Text harus diisi');
						</script>
				<?php
						}
						
						if(!empty($isi))
						{
							$sql	= mysqli_query($connect,"INSERT INTO chat VALUES ('','$username','$instansi','$user','$isi',NOW(), '')");
				?>
						<script language="JavaScript"> alert ('Terkirim!!');
							document.location='?view=chat';
						</script>
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</div>