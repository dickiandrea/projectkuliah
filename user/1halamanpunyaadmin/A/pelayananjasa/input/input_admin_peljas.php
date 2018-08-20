<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if((Input::get('tambah')) == "data_admin")
{
  $update_profil = $insert->tambah('amdin',array(
    'nama_admin' => Input::get('nama'),
    'kode_akses' => Input::get('kode_akses'),
    'username' => Input::get('username'),
    'password' => Input::get('password'),
  	'email' => Input::get('email')
	));
		
	if($update_profil == true)
  {
    ?><script language="JavaScript">alert('Tambah Data Jenis Analisis Berhasil!');
    document.location='?page=lihat_pengguna_peljas';</script><?php
  }else{
    ?><script language="JavaScript">alert('Gagal menambahkan data Jenis Analisis baru. Silahkan Coba lagi!');document.location='?page=lihat_pengguna_peljas';</script><?php
  }
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Jenis Analisis!');document.location='?page=lihat_jenis_analisis';</script><?php
 }
?>