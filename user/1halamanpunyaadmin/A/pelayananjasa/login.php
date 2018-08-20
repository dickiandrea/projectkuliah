<?php

require_once "../pusatdata/core/init.php";

	if(!Session::exists('kode')){
	?>
	<script>document.location='index.php';alert('Maaf anda harus mem-purchase kode anda')</script>
	<?php
	}
	if(Session::exists('kode_akses'))
	{
		?><script language="javascript"> document.location='adminpage.php'	</script><?php
	}else{

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/logo/logo-simpel.png">
    <title>Login | SIMPEL - Balai Penelitian Tanah </title>

    <!-- Bootstrap -->
    <link href="../pusatdata/css/bootstrap.min.css" rel="stylesheet">
    <link href="../pusatdata/css/custom.min.css" rel="stylesheet">
    <link href="../pusatdata/css/simpel.css" rel="stylesheet">
    <link href="../pusatdata/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background: #F5F5F5;">
	<div class="login-form">
      <form action="" method="post">
        <div class="top">
          <img src="../images/logo/logo-simpel.png" alt="icon" class="icon" style="width:80%;margin-bottom:40px;">
          <h4>Login! Masukkan Data</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
            <i class="fa fa-key"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block" name="login" value="login">LOGIN</button>
        </div>
      </form>
      <div class="footer-links">
        <div class="col-xs-12 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>
	<p></p>
</body>
</html>

<?php
if(Input::get('login') == 'login'){

  $user = Input::get('username');
  $pass = Input::get('password');

		$query = "SELECT nama_admin, username, password FROM administrator where username='$user'";
		$result = $mysqli->query($query);
		if(($result->num_rows) > 0)
		{	
			while($data = $result->fetch_assoc()){
			  $password = $data['password'];
			  $nama_admin = $data['nama_admin'];
			}
			
			if(password_verify($pass, $password)){
				Session::set('username', $user);
				Session::set('password', $pass);
				Session::set('namapengguna', $nama_admin);
				Session::set('kode_akses', "superadmin");

				?>
					<script language="javascript" type="text/javascript">alert("Selamat Datang <?php echo $nama_admin; ?> di Halaman Admin");
					document.location='adminpage.php'	</script>
				<?php
	
			}else{					
				?>
				<script language="javascript" type="text/javascript">alert("Password anda salah!");
				</script>
				<?php
			}
			
		}else{
			?>
			<script language="javascript" type="text/javascript">alert("Username yang anda masukan salah!");
			</script>
			<?php
		}
		
	}
 } ?>
