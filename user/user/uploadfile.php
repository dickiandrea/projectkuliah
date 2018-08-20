<?php
	include "../koneksi.php";
	$ambilkode = $_POST['kode'];
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE kode_user='$ambilkode' ");
	$hasil = mysqli_fetch_array($sql) or die (mysqli_error($connect));
	
	$kodeuser = $hasil['kode_user'];
	
	if(@$_POST['upload'])
		{
		
			//file upload.php 
			$fileName = $_FILES['picture']['name'];
			$fileSize = $_FILES['picture']['size'];
			$fileType = $_FILES['picture']['type'];
			$fileError = $_FILES['picture']['error'];
			
			$nama			= $_POST['nama'];
			$tgl			= date("Y-m-d");
 			
			if($fileSize > 0 || $fileError == 0)
			{
				if (!($fileType == "image/jpg" OR $fileType == "image/jpeg" OR $fileType == "image/png"))
					{
						?><script language="JavaScript">alert('File harus berupa .jpg / .jpeg / .png ');
						document.location='../userpage.php?view=transaksi'</script><?php
					}
					else
					{
						if ($fileSize > 25000000)
						{
							?><script language="JavaScript">alert('File terlalu besar!');
							document.location='../userpage.php?view=transaksi'</script><?php
						}
						
						else
						{
							$move = move_uploaded_file($_FILES['picture']['tmp_name'], 'files/'.$fileName);
							if($move)
								{
									$in = mysqli_query($connect,"INSERT INTO download VALUES('','$kodeuser', '$tgl', '$nama', '$fileType', '$fileSize', '$fileName')");
									if($in)
									{
										?><script language="JavaScript">alert('Upload file berhasil, terimakasih'); 
										document.location='../userpage.php?view=transaksi'</script><?php
									}
									else
									{
										?><script language="JavaScript">alert('Data Kurang Lengkap!');</script><?php
									}
								}
						}
					}
			}
			else
			{
				$fileError; ?><script language="JavaScript">alert('Gagal Mengupload File!');</script><?php
			}
		}
?>