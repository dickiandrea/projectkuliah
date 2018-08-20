<?php
require_once '../pusatdata/core/init.php';
error_reporting(E_ALL);


if(Session::exists('user_admin'))
{
	?><script language="javascript"> document.location='adminpage.php'	</script><?php
}
else if(Session::exists('kode'))
{
	?><script language="javascript"> document.location='login.php'	</script><?php
}
else{

if(isset($_POST['purchase']))
{
	$kode = $_POST['kode'];

		if($kode == "dickiandrea")
		{
				Session::set('kode',$kode);
			  ?><script language="JavaScript">alert('Silahkan login');
				document.location='login.php'</script><?php
		}else{
			?><script language="JavaScript">alert('Data yang anda masukan salah');
			document.location='index.php'</script><?php
		}
}
else
{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/logo/logo-simpel.png">
    <title>Purchase Code | SIMPEL - Balai Penelitian Tanah </title>

    <!-- Bootstrap -->
    <link href="../pusatdata/css/bootstrap.min.css" rel="stylesheet">
    <link href="../pusatdata/css/custom.min.css" rel="stylesheet">
    <link href="../pusatdata/css/simpel.css" rel="stylesheet">
	
</head>
<body class="login">
  <div class="login_wrapper">
	<div class="animate form login_form">
	  <section class="login_content">
	  <img src="../images/logo/logo-simpel.png" style="width: 90%; margin-bottom: 40px;"/>
		<form action="" method="post">		
			<h1>Purchase Code</h1>
			<input type="password" class="form-control" name="kode" placeholder="Insert code" required="" />
			<button type="submit" name="purchase" class="btn btn-default btn-block">Purchase</button>
			<p><br><br>Wajib mem-<strong>purchase kode administrator</strong> apabila ingin masuk ke halaman login administrator</p>
		</form>
	  </section>
	</div>

  </div>
</body>
</html>
<?php }} ?>
