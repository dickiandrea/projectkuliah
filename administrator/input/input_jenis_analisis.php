<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if((Input::get('tambah')) == "data_jenis_analisis")
{
  $update_profil = $insert->tambah('jenis_analisis',array(
    'kode_analisis' => Input::get('kode_sp').Input::get('kodeanalisis'),
    'kode_sp' => Input::get('kode_sp'),
    'nama_analisis' => Input::get('namaanalisis'),
  	'keterangan' => Input::get('ketanalisis')
	));
		
	if($update_profil == true)
  {
    ?><script language="JavaScript">alert('Tambah Data Jenis Analisis Berhasil!');
    document.location='?page=lihat_jenis_analisis';</script><?php
  }else{
    ?><script language="JavaScript">alert('Gagal menambahkan data Jenis Analisis baru. Silahkan Coba lagi!');document.location='?page=lihat_jenis_analisis';</script><?php
  }
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Jenis Analisis!');document.location='?page=lihat_jenis_analisis';</script><?php
 }
?>