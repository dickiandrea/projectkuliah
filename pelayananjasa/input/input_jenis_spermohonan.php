<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if((Input::get('tambah')) == "data_spermohonan")
{
  $update_profil = $insert->tambah('surat_permohonan',array(
    'kode_sp' => Input::get('kodespermohonan'),
    'nama_sp' => Input::get('namaspermohonan'),
  	'keterangan' => Input::get('ketspermohonan')
	));
		
	if($update_profil == true)
  {
    ?><script language="JavaScript">alert('Tambah Data SPermohonan Berhasil!');
    document.location='?page=lihat_jenis_spermohonan';</script><?php
  }else{
    ?><script language="JavaScript">alert('Gagal menambahkan data SPermohonan baru. Silahkan Coba lagi!');document.location='?page=lihat_jenis_spermohonan';</script><?php
  }
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data SPermohonan!');document.location='?page=lihat_jenis_spermohonan';</script><?php
 }
?>