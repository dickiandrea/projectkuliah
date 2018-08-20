<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if(isset(Input::get('tambah')))
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
		if(Input::get('tambah') == "data_admin_peljas"){
			if($update_profil == true)
			{
				?><script language="JavaScript">alert('Tambah Data Pengguna Pelayanan Jasa Berhasil!');
				document.location='?page=lihat_pengguna_peljas';</script><?php
			}else{
				?><script language="JavaScript">alert('Gagal menambahkan data Pengguna Pelayanan Jasa baru. Silahkan Coba lagi!');document.location='?page=lihat_pengguna_peljas';</script><?php
			}
		}
		else if(Input::get('tambah') == "data_admin_lab"){
			if($update_profil == true)
			{
				?><script language="JavaScript">alert('Tambah Data Pengguna Laboratorium Berhasil!');
				document.location='?page=lihat_pengguna_lab';</script><?php
			}else{
				?><script language="JavaScript">alert('Gagal menambahkan data Pengguna Laboratorium baru. Silahkan Coba lagi!');document.location='?page=lihat_pengguna_lab';</script><?php
			}
		}
	}
	
  
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Pengguna Baru!');document.location='?page=lihat_pengguna_peljas';</script><?php
 }
?>