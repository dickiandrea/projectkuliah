<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if(Input::get('tambah') == TRUE)
{
  $update_profil = $insert->tambah('user',array(
    'nama' => Input::get('nama'),
    'username' => Input::get('username'),
    'instansi' => Input::get('instansi'),
    'alamat_instansi' => Input::get('alamat_instansi'),
	'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT),
    'telp' => Input::get('phone'),
  	'email' => Input::get('email')
	));
		
	if($update_profil == true)
	{
		?><script language="JavaScript">alert('Tambah Data Pelanggan Berhasil!');
				document.location='?page=lihat_pengguna_user';</script><?php
				
	}else{
		?><script language="JavaScript">alert('Gagal menambahkan data Pelanggan Baru. Silahkan Coba lagi!');document.location='?page=lihat_pengguna_user';</script><?php
	}
	
  
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Pelanggan Baru!');document.location='?page=lihat_pengguna_user';</script><?php
 }
?>