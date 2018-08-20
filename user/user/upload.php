<?php 
$username = $_SESSION['user1'];
$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
$kode_user = $data['kode_user'];
?>
<h3>Upload File Bukti Transaksi</h3><hr>
	
	<form name="form_upload" method="post" action="user/uploadfile.php" enctype="multipart/form-data">
		<table align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
			<tr>
				<td width="40%" align="right"><b>Nama File</b></td>
				<td><b>:</b></td>
				<td height="40px">
					<input type="text" name="nama" size="40" required />
				</td>
			</tr>
			<tr>
				<td width="40%" align="right"><b>Pilih File</b></td>
				<td><b>:</b></td>
				<td height="40px">
					 <input type="file" name="picture" />
				</td>
			</tr>
			<tr>
               	<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>
					<input class="btn btn-theme" type="submit" name="upload" value="Upload"/>
					<input type='hidden' name='kode' value="<?php echo $kode_user;?>">
				</td>
            </tr>
		</table>
	</form>