<?php
require_once "../pusatdata/core/init.php";

	if(Session::get('kode_akses') != "superadmin"){
	?>
	<script>document.location='index.php';alert('Maaf anda harus login dulu')</script>
	<?php
	}


	require_once '../pusatdata/template/header_admin.php';
?>
<div class="kiri">
	<?php require_once '../pusatdata/template/sideKiri_admin.php'; ?>
</div>
<div class="right_col" role="main">          
	<?php include"buka_halaman.php"; ?>	
</div>
<?php
require_once '../pusatdata/template/footer_admin.php';
?>
