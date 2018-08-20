<?php include "koneksi.php";
	$username = $_SESSION['user1'];
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
	$hasil = mysqli_fetch_array($sql) or die (mysqli_error($connect));
		$nama = $hasil['nama'];
		$instansi = $hasil['instansi'];
		$user = $hasil['kode_user'];
?>

<h3>Download File Bukti Transaksi</h3> <hr>
<?php
		$no=1;
		$ambil = mysqli_query($connect,"SELECT * FROM download WHERE kode_user='$user' ORDER BY tanggal_upload desc");
		while($data = mysqli_fetch_array($ambil))
		{
		$id2 = $data['id'];
			echo ' <h3> '.$no.' <a target=_blank href="../user/user/files/'.$data['file'].'"> &nbsp; Nama File : '.$data['nama_file'].' </a> '
			?>&nbsp; <a href='user/delete.php?iddownload=<?php echo $id2;?>' class="btn btn-theme" data-confirm="Are you sure?" onClick="return confirm('Data akan dihapus?');"> Hapus </a>
			</h3>
			<?php
			$no++;
		}
	?>
