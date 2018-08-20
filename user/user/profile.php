<div class="container">
	<div class="col-lg-12">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-3">
				<br>
				<img src="img/s.png">
			</div>
			<div class="col-lg-5">
			<h2><font color="#23d96d">PROFIL SAYA :</font></h2>
			<?php include "koneksi.php";
			//$id = $_GET['id'];
			
			$username = $_SESSION['user1'];
			$ambil = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
			$hasil = mysqli_fetch_array($ambil);{
			?>
			
			<hr>
			
			<div class="form-group">
				<b> Username &#160;  : </b> 
					<pre><?php echo $hasil['username'];?></pre>
			</div>

			<hr> 
			
			<div class="form-group">
				<b> Nama &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;   : </b>  <?php echo $hasil['nama'];?> 
			</div>
			
			<div class="form-group">
				<b> Instansi &#160;&#160;&#160;&#160;&#160; : </b>  <?php echo $hasil['instansi'];?>
			</div>
			
			<div class="form-group">
				<b> Alamat &#160;&#160;&#160;&#160;&#160;&#160;&#160; : </b> <br><br> <?php echo $hasil['alamat_instansi'];?>
			</div>
			
			<div class="form-group">
				<b> Telepon &#160;&#160;&#160;&#160;&#160;  : </b>  <?php echo $hasil['telp'];?>
			</div>
			
			<div class="form-group">
				<b> Email &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;  : </b>  <?php echo $hasil['email'];?>
			</div>
			
			<hr>
			
			<form method="post" action='?view=edit-profile&kode=<?php echo $hasil['kode_user']; ?>'>
			<input type='hidden' name='kode' value="<?php echo $hasil['kode_user'];?>"> <!-- Ini yang diambil -->	
			<input type="submit" name="edit" value="Edit Profile" class="btn btn-theme">
			</form>
			
			<form method="post" action='?view=gantipassword&kode=<?php echo $hasil['kode_user']; ?>'>
			<input type='hidden' name='kode' value="<?php echo $hasil['kode_user'];?>"> <!-- Ini yang diambil -->	
			<input type="submit" name="ganti" value="Ubah Password" class="btn btn-theme">
			</form>
			
			<?php } ?>
		</div>
	</div>
</div>