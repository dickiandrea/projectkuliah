<?php
require_once "../pusatdata/core/init.php";

if(!Session::exists('pelayanan')){
?>
	<script>document.location='index.php';alert('Maaf anda harus login dulu. ');</script>
<?php
}
require_once '../pusatdata/template/header_peljas.php';
?>
<div class="kiri">
	<?php require_once '../pusatdata/template/sideKiri_peljas.php'; ?>
</div>
<div class="right_col" role="main">          
	<?php include"buka_halaman.php"; ?>	
</div>
<?php
require_once '../pusatdata/template/footer_peljas.php';


?>