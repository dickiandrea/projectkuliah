<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-sm-offset-2 col-md-offset-3">
			<form method="post" action="ceklogin.php" class="register-form">
				<h2><font color="#23d96d">LOGIN!</font> <br></h2>
					<small> Untuk melanjutkan proses pelayanan jasa</small>
				<hr class="">

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Masukkan Username Anda"  required>
				</div>
				
				<div class="form-group">
					<input type="password" name="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Masukkan Password Anda" required>
				</div>
				<hr>
				
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<input type="submit" name="login" value="Masuk" class="btn btn-primary btn-block btn-lg" tabindex="7">
					</div>
					<div class="col-xs-12 col-md-6">
						Tidak punya akun?<br>
						<a href="?view=register">Daftar disini</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>