<?php 
session_start();

include "koneksi.php"; 
if(isset($_POST['login']))
{ 
	$username = $_POST['username']; 
	$pass = $_POST['password'];
	
  	$sql = mysqli_query($connect,"SELECT * FROM user WHERE username='$username'");
	$num = mysqli_num_rows($sql);
	
	if($num==1)
	{
		while($hasil=mysqli_fetch_array($sql))
		{
			
		$username = addslashes($hasil['username']);
		$password=  addslashes($hasil['password']);
		$nama = addslashes($hasil['nama']);
		
			if(password_verify($pass, $password))
			{
			$_SESSION['user1'] = $username;
			$_SESSION['pass1'] = $password;
			
			?><script language="JavaScript">alert('Selamat  <?php echo $nama ?>  di halaman User'); 
			document.location='userpage.php?view=pengujian'</script><?php
			
			}
			else
			{
				?><script language="JavaScript">alert('Username atau Password salah'); 
				document.location='index.php?view=login'</script><?php
			}
		}
	}
	else
	{
		?><script language="JavaScript">alert('Username atau Password salah'); 
		document.location='index.php?view=login'</script><?php
	} 
}
?>