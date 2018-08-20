<?php // jumlah data yang akan ditampilkan per halaman

$dataPerPage = 10;
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.

if(isset($_GET['page']))
{
$noPage = $_GET['page'];
}
else $noPage = 1;
// perhitungan offset
$offset = ($noPage - 1) * $dataPerPage;
// query SQL untuk menampilkan data perhalaman sesuai offset
$query = "SELECT * FROM download ORDER BY id DESC LIMIT $offset, $dataPerPage";
$result = mysql_query($query) or die('Error');
// menampilkan data
$no=1;
while($data = mysql_fetch_array($result))
{
$id = $data['id'];
						<?php 
	$no++;
}
?>
</table>
</p>
<?php
echo "<br><br> &nbsp; <hr>";
// mencari jumlah semua data
$query   = "SELECT COUNT(*) AS jumData FROM download";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);

$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous
if ($noPage > 1) echo  " <a href='".$_SERVER['PHP_SELF']."?act=lihat_file&page=".($noPage-1)."'>&lt;&lt; Prev</a>";
// memunculkan nomor halaman dan linknya
/*for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo " <a href='".$_SERVER['PHP_SELF']."?act=lihat_file&page=".$page."'>".$page."</a> ";
$showPage = $page;
}
}*/
// menampilkan link next
if ($noPage < $jumPage) echo "&nbsp; <a href='".$_SERVER['PHP_SELF']."?act=lihat_file&page=".($noPage+1)."'>Next &gt;&gt;</a>";
?>
<br><br>
</body>
</html>