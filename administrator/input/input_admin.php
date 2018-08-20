<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if(Input::get('tambah') == TRUE)
{
  $update_profil = $insert->tambah('admin',array(
    'nama_admin' => Input::get('nama'),
    'kode_akses' => Input::get('kode_akses'),
    'username' => Input::get('username'),
	'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT),
    'no_hp' => Input::get('phone'),
  	'email' => Input::get('email')
	));
		
	if($update_profil == true)
	{
		?><script language="JavaScript">alert('Tambah Data Pengguna Admin Berhasil!');
		document.location='?page=lihat_pengguna_admin';</script><?php
	}else{
		?><script language="JavaScript">alert('Gagal menambahkan data Pengguna Admin baru. Silahkan Coba lagi!');document.location='?page=lihat_pengguna_admin';</script><?php
	}
	
  
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Pengguna Baru!');document.location='?page=lihat_admin';</script><?php
 }
?>