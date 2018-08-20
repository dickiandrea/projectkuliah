<div class="container">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-md-offset-1">
				<form action="" method="post" enctype="multipart/form-data">
					<table width="1000px" cellpadding="3">
						<tr>
							<td colspan="2" align="center"> <h2>UPLOAD FILE PEMBAYARAN</h2> </td>
						</tr>
						<tr>
							<td width="10%"><b>Nama File</b></td>
							<td><input type="text" name="nama" size="40" required /></td>
						</tr>
						<tr>
							<td width="10%" ><b>Pilih File</b></td>
							<td><input type="file" name="file" required /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="upload" value="Upload" /></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</div>
            <?php
			include('koneksi.php');
			if(@$_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'jpg', 'jpeg', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
 
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
 
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 20044070){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							?><script language="JavaScript">alert('Upload file berhasil, terimakasih'); 
							document.location='?act=lihat_file'</script><?php
						}else{
							?><script language="JavaScript">alert('Gagal Mengupload File!');</script><?php
						}
					}else{
						?><script language="JavaScript">alert('Gagal! File terlalu besar'); </script><?php
					}
				}else{
					?><script language="JavaScript">alert('Gagal! Ekstensi file tidak diizinkan'); </script><?php
				}
			}
			?>