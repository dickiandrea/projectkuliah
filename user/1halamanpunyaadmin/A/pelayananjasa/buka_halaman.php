<?php
error_reporting(0);
$page = $_GET['page'] ? $_GET['page'] : "";
switch ($page) {
case ''						          : include "home.php"; break;

//---------------------------- INPUT ---------------------------
case 'input_profil'			       	   : include "input/input_profil.php"; break;
case 'input_jenis_spermohonan'			       	   : include "input/input_jenis_spermohonan.php"; break;
case 'input_jenis_analisis'			       	   : include "input/input_jenis_analisis.php"; break;
case 'input_admin'			       	   : include "input/input_admin.php"; break;
case 'input_hak_akses'			       	   : include "input/input_hak_akses.php"; break;
case 'input_pertanyaan'			       	   : include "input/input_pertanyaan.php"; break;


// ---------------------------- LIHAT ------------------------------

case 'lihat_pengguna_peljas'	               	: include "lihat/lihat_pengguna_peljas.php"; break;
case 'lihat_pengguna_user'	               	: include "lihat/lihat_pengguna_user.php"; break;
case 'lihat_pengguna_lab'	               	: include "lihat/lihat_pengguna_lab.php"; break;
case 'lihat_hakakses'	               	: include "lihat/lihat_hakakses.php"; break;
case 'lihat_pertanyaan'	               	: include "lihat/lihat_pertanyaan.php"; break;
case 'lihat_jenis_spermohonan'	               	: include "lihat/lihat_jenis_spermohonan.php"; break;
case 'lihat_jenis_analisis'	               	: include "lihat/lihat_jenis_analisis.php"; break;
case 'lihat_permohonan_kimia'	               	: include "lihat/lihat_permohonan_kimia.php"; break;
case 'lihat_permohonan_fisika'	               	: include "lihat/lihat_permohonan_fisika.php"; break;
case 'lihat_permohonan_biologi'	               	: include "lihat/lihat_permohonan_biologi.php"; break;
case 'lihat_permohonan_mineralogi'	               	: include "lihat/lihat_permohonan_mineralogi.php"; break;
case 'lihat_permohonan_kimia_detail'	               	: include "lihat/lihat_permohonan_kimia_detail.php"; break;
case 'lihat_permohonan_biologi_detail'	               	: include "lihat/lihat_permohonan_biologi_detail.php"; break;
case 'lihat_permohonan_mineralogi_detail'	               	: include "lihat/lihat_permohonan_mineralogi_detail.php"; break;
case 'lihat_rekap_on_pengambilan'	               	: include "lihat/lihat_rekap_on_pengambilan.php"; break;
case 'lihat_rekap_selesai'	               	: include "lihat/lihat_rekap_selesai.php"; break;

//------------------------ UPDATE DIVISI --------------------------------
case 'update_jenis_spermohonan'			       	: include "update/update_jenis_spermohonan.php"; break;
case 'update_jenis_analisis'			       	: include "update/update_jenis_analisis.php"; break;
case 'update_admin_peljas'			       	: include "update/update_admin_peljas.php"; break;
case 'update_admin_lab'			       	: include "update/update_admin_lab.php"; break;
case 'update_hak_akses'			       	: include "update/update_hak_akses.php"; break;
case 'update_pertanyaan'			       	: include "update/update_pertanyaan.php"; break;
case 'update_permohonan_kimia'			       	: include "update/update_permohonan_kimia.php"; break;
case 'update_permohonan_fisika'			       	: include "update/update_permohonan_fisika.php"; break;
case 'update_permohonan_mineralogi'			       	: include "update/update_permohonan_mineralogi.php"; break;
case 'update_permohonan_biologi'			       	: include "update/update_permohonan_biologi.php"; break;


}
?>
