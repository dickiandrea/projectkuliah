<?php
require_once "../pusatdata/core/init.php";
//periksa apakah user telah login atau memiliki session
if(!Session::exists('pelayanan')) {
     ?> <script language='javascript'>alert('KELUAR');
	 document.location='index.php'</script>
<?php
}
else
{
session_unset($_SESSION['pelayanan']);
session_destroy();
?> <script language='javascript'>alert('Sampai jumpa lagi!!');
	 document.location='index.php'</script><?php
}
?>
