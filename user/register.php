<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<h2><font color="#23d96d">Daftarkan diri anda </font></h2>
			<hr>
			<div class="row">
			<form method="post" action="">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<h4> <b> Username </b> </h4>
                        <input type="text" name="username" class="form-control input-lg" placeholder="Masukkan username *" required>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<h4> <b> Password </b> </h4>
						<input type="password" name="password" class="form-control input-lg" placeholder="Masukkan password *" required>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<h4> <b> Nama </b> </h4>
				<input type="text" name="nama" class="form-control input-lg" placeholder="Masukkan nama *" required>
			</div>
			
			<div class="form-group">
				<h4> <b> Instansi </b> </h4>
				<input type="text" name="instansi" class="form-control input-lg" placeholder="Masukkan nama instansi *" required>
			</div>
			
			<div class="form-group">
				<h4> <b> Alamat Instansi </b> </h4>
				<textarea name="alamat_instansi" class="form-control input-lg" placeholder="Masukkan alamat instansi *" required cols="5" rows="6"></textarea>
			</div>
			
			<div class="form-group">
				<h4> <b> Telepon </b> </h4>
				<input type="text" name="telp" class="form-control input-lg" placeholder="Masukkan nomor telepon *" required>
			</div>			
			
			<div class="form-group">
				<h4> <b> Email </b></h4>
				<input type="email" name="email" class="form-control input-lg" placeholder="Masukkan email *" required>
			</div>
			<br>			
			<div class="row">
				<div class="col-xs-6 col-sm-7 col-md-7">
					 Dengan mendaftarkan <strong class="label label-primary"> Akun</strong> Anda telah menyetujui Syarat & Ketentuan yang berlaku
				</div>
				<div class="col-xs-3 col-sm-2 col-md-3">
					Keterangan : <b><font color="#ff0000"> *Wajib diisi! </font></b> <br>
				</div>
			</div>
			<hr><br>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<input type="submit" name="submit" value="Daftar" class="btn btn-theme btn-block btn-lg">
				</div>
			</form>
				<div class="col-xs-12 col-md-6">Sudah punya akun? <br>
				<a href="?view=login">Masuk</a></div>
			</div>
		</div>
	</div>
</div>

<?php
include "koneksi.php";

@$username = addslashes($_POST['username']);
@$password = addslashes(password_hash($_POST['password'], PASSWORD_DEFAULT));
@$nama = addslashes($_POST['nama']);
@$instansi = addslashes($_POST['instansi']);
@$alamat_instansi = addslashes($_POST['alamat_instansi']);
@$telp = addslashes($_POST['telp']);
@$email = addslashes($_POST['email']);

if(isset($_POST['submit']))
			{
				
				$sql=mysqli_query($connect,"insert into user values	('','$username','$password','$nama','$instansi','$alamat_instansi','$telp','$email')");
				if($sql){
				?>
				<script language="JavaScript"> alert('Registrasi Sukses! Silahkan Login');
				document.location='index.php?view=login';</script>
				<?php
				}
				else
				{
				?>
				<script language="JavaScript"> alert('Ada kesalahan, silahkan cek lagi');
				</script>
				<?php
				}
			}
?>