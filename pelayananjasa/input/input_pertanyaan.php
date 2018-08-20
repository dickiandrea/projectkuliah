<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if((Input::get('tambah')) == "data_pertanyaan")
{
	$jmlh_turunan = Input::get('jmlh-tbh-turunan');
	$kdarray= null;
	$isiarray= null;
	$tarifarray= null;
	$akhir = null;
	$update_profil = null;
	$kelompok = Input::get('kodepertanyaan');
	$analisis = Input::get('jenisanalisis');
	$cek = false;
	for($a=0;$a < $jmlh_turunan;$a++){
		$kd = "kd-p-turunan-".$a;
		$isi = "isi-kd-p-turunan-".$a;
		$tarif = "tarif-kd-p-turunan-".$a;
		$update_profil = $insert->tambah('pertanyaan',array(
			'kode_pertanyaan' => Input::get($kd),
			'kode_analisis' => $analisis,
			'isi_pertanyaan' => Input::get($isi),
			'tarif' => Input::get($tarif),
			'kelompok' => $kelompok
		));
		$cek = true;
	}		
		
		
	if($cek == true)
  {
    ?><script language="JavaScript">alert('Tambah Data Pertanyaan Berhasil!');
    document.location='?page=lihat_pertanyaan';</script><?php
  }else{
    ?><script language="JavaScript">alert('Gagal menambahkan data Pertanyaan baru. Silahkan Coba lagi!');document.location='?page=lihat_pertanyaan';</script><?php
  }
}else{
    ?><script language="JavaScript">alert('Tidak jadi menambahkan Data Pertanyaan!');document.location='?page=lihat_pertanyaan';</script><?php
 }
?>