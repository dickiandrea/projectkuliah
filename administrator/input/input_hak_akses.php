<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if((Input::get('tambah')) == "data_hak_akses")
{
  $update_profil = $insert->tambah('hak_akses',array(
    'kode_akses' => Input::get('kode_hakakses'),
    'jenis_akses' => Input::get('jenishakakses'),
	));
		
	if($update_profil == true)
  {
    ?><script language="JavaScript">alert('Tambah Data Hak Akses Berhasil!');
    document.location='?page=lihat_hakakses';</script><?php
  }else{
    ?><script language="JavaScript">alert('Gagal menambahkan data Hak Akses baru. Silahkan Coba lagi!');document.location='?page=lihat_hakakses';</script><?php
  }
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Hak Akses!');document.location='?page=lihat_hakakses';</script><?php
 }
?>