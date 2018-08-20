<?php
include "koneksi.php";

$kode = $_GET['kode'];
@$ganti = addslashes ($_POST['ganti']);

$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode'");
while($hasil=mysqli_fetch_array($sql))
{
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<h4><font color="#23d96d">Ganti Password</font></h4><hr>
			<div class="row">
				<div class="col-sm-6">
					
					<form method="post" action="">
						<input type="hidden" value="<?php echo $hasil['kode_user']; ?>" name="kodenya">
						<input type="hidden" name="kode" class="form-control input-lg" value="<?php echo $hasil['kode_user']; ?>">
						
						<div class="form-group">
							<h4> <b> Masukkan Password baru : </b></h4>
							<input type="password" name="password" class="form-control input-lg">
						</div>
						
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<input type="submit" name="update" value="Ganti Password" class="btn btn-theme btn-block btn-lg" onClick="return confirm('Password akan dirubah?');">
						</div>
					</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}

//Script Update nya
include "koneksi.php";
if(isset($_POST['update']))

{
	$kode 		= addslashes($_POST['kode']);
	$password 	= addslashes(password_hash($_POST['password'], PASSWORD_DEFAULT));

	$in = mysqli_query($connect,"UPDATE user SET password='$password' WHERE kode_user='$kode'");
	
	if($in)
		{
		?>
		<script language="JavaScript">alert('Password telah diubah'); 
		document.location='?view=profile'</script><?php
		}
		else
		{
		?><script language="JavaScript">alert('Ada kesalahan, Cek kembali!');</script><?php
		}
	}
?>