<?php
include "../koneksi.php";
@$idchat = $_GET['id'];
$delete = mysqli_query($connect,"DELETE FROM chat WHERE id='$idchat'");

	if ($delete)
	{
	?>
		<script language="JavaScript">alert('Hapus Berhasil!');
		document.location='../userpage.php?view=transaksi'
		</script>
	<?php
	}
	else {
	?>
	<script language="JavaScript">alert('Gagal!');</script> <?php
	}

@$id = $_GET['iddownload'];
$hapusfile = mysqli_query($connect,"DELETE FROM download WHERE id='$id'");

	if ($hapusfile)
	{
	?>
		<script language="JavaScript">alert('Hapus Berhasil!');
		document.location='../userpage.php?view=transaksi'
		</script>
	<?php
	}
	else {
	?>
	<script language="JavaScript">alert('Gagal!');</script> <?php
	}

	?>

	