<?php
include "koneksi.php";

$kode = $_GET['kode'];
@$edit = addslashes ($_POST['edit']);

$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$kode'");
while($hasil=mysqli_fetch_array($sql))
{
?>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<h4><font color="#23d96d">Edit Informasi Pribadi</font></h4>
			<hr>
			<div class="row">
				<div class="col-sm-8">
				<form method="post" action=""><br>
					
					<input type="hidden" value="<?php echo $hasil['kode_user']; ?>" name="kodenya">
					<input type="hidden" name="kode" class="form-control input-lg" value="<?php echo $hasil['kode_user']; ?>">
					
					<div class="form-group">
						<h4> <b> Username </b></h4>
                        <input type="text" name="username" class="form-control input-lg" value="<?php echo $hasil['username']; ?>">
					</div>

					<div class="form-group">
						<h4> <b> Nama </b></h4>
						<input type="text" name="nama" class="form-control input-lg" value="<?php echo $hasil['nama']; ?>">
					</div>
					
					<div class="form-group">
						<h4> <b> Instansi </b> </h4>
						<input type="text" name="instansi" class="form-control input-lg" value="<?php echo $hasil['instansi']; ?>">
					</div>
					
					<div class="form-group">
						<h4> <b> Alamat Instansi </b> </h4>
						<textarea name="alamat_instansi" class="form-control input-lg" tabindex="5" cols="5" rows="6" ><?php echo $hasil['alamat_instansi']; ?></textarea>
					</div>
					
					<div class="form-group">
						<h4> <b> Telepon </b> </h4>
						<input type="text" name="telp" class="form-control input-lg" value="<?php echo $hasil['telp']; ?>">
					</div>
			
					<div class="form-group">
						<h4> <b> Email </b></h4>
						<input type="email" name="email" class="form-control input-lg" value="<?php echo $hasil['email']; ?>">
					</div>
					
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<input type="submit" name="update" value="Update Data" class="btn btn-theme btn-block btn-lg">
						</div>
					</div>
				</div>
				</form>
				<div class="col-xs-12 col-md-3">
					<img src="img/s.png">
				</div>
			</div>
			<hr>
	</div>
</div>
</div>
<?php 
}

//Script Update nya
include "koneksi.php";
if(isset($_POST['update']))

{
	$kode 				= addslashes($_POST['kode']);
	$kodenya 			= addslashes($_POST['kodenya']);
	
	$username 			= addslashes($_POST['username']);
	$password 			= addslashes($_POST['password']);
	$nama 				= addslashes($_POST['nama']);
	$instansi 			= addslashes($_POST['instansi']);
	$alamat_instansi 	= addslashes($_POST['alamat_instansi']);
	$telp 				= addslashes($_POST['telp']);
	$email 				= addslashes($_POST['email']);

	$in = mysqli_query(
	$connect,
	"UPDATE user SET 
	kode_user='$kode',
	username='$username',
	nama='$nama',
	instansi='$instansi',
	alamat_instansi='$alamat_instansi',
	telp='$telp',
	email='$email'
	
	WHERE kode_user='$kode'"
	);
	
	if($in)
		{
		?>
		<script language="JavaScript">alert('Data berhasil di update'); 
		document.location='?view=profile'</script><?php
		}
		else
		{
		?><script language="JavaScript">alert('Ada kesalahan, Cek kembali!');</script><?php
		}
	}
?>