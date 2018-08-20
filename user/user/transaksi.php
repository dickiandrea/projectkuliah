<?php 
	include "koneksi.php";
	$username = $_SESSION['user1'];
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
	$hasil = mysqli_fetch_array($sql) or die (mysqli_error($connect));
	
	$nama = $hasil['nama'];
	$instansi = $hasil['instansi'];
	$user = $hasil['kode_user'];
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
		<?php  include "upload.php"; ?>
			<hr>
		</div>
		<div class="col-lg-10">
			<?php  include "download.php"; ?>
		</div>
	</div>
</div>