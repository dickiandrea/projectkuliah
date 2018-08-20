<?php 
include "koneksi.php";

@$page=$_GET['view'];
if (!isset($page))$page=''; 
switch ($page) { 
case ''						: include "welcome.html"; break;
case 'welcome'				: include "welcome2.html"; break;
case 'cari'					: include "search.php"; break;

// MENU USER BIASA -------------------------------------------------------

case 'struktur'		: include "struktur.html"; break;
case 'kontak'		: include "kontak.html"; break;
case 'login'		: include "login.php"; break;
case 'register'		: include "register.php"; break;

// MENU PELAYANAN -------------------------------------------------------
case 'aturan'			: include "pelayanan/aturan.html"; break;
case 'jam-pelayanan'	: include "pelayanan/jampelayanan.html"; break;
case 'fasilitas'		: include "pelayanan/fasilitas.html"; break;
case 'kompetensi'		: include "pelayanan/kompetensi.html"; break;
case 'jaminan'			: include "pelayanan/jaminan.html"; break;
case 'pengaduan'		: include "pelayanan/pengaduan.html"; break;


// MENU SIMULASI -------------------------------------------------------
case 'simulasi'		: include "simulasi/pilihsimulasi.php"; break;
case 'simulasi-biologi'		: include "simulasi/simulasibiologi.php"; break;
case 'simulasi-fisika'		: include "simulasi/simulasifisika.php"; break;
case 'simulasi-mineralogi'		: include "simulasi/simulasimineralogi.php"; break;
case 'simulasi-kimia-rutin'		: include "simulasi/simulasikimiarutin.php"; break;
case 'simulasi-kimia-khusus'		: include "simulasi/simulasikimiakhusus.php"; break;
case 'simulasi-kimia-organik'		: include "simulasi/simulasikimiaorganik.php"; break;
case 'simulasi-kimia-anorganik'		: include "simulasi/simulasikimiaanorganik.php"; break;
case 'simulasi-kimia-tanaman'		: include "simulasi/simulasikimiatanaman.php"; break;


// MENU USER SUDAH LOGIN -------------------------------------------------------
case 'pengujian'			: include "user/pengujian.php"; break;
case 'lihat-progress'				: include "user/hasil.php"; break;

// TAGIHAN & PRINT --------------------------------------------------------------
case 'lihat-tagihan'		: include "user/lihat_tagihan.php"; break;
case 'tagihan-detail'		: include "user/lihat_tagihan_detail.php"; break;
case 'invoice'				: include "user/invoice.php"; break;

// PROFIL ------------------------------------------------------------------------
case 'profile'				: include "user/profile.php"; break;
case 'edit-profile'			: include "user/editprofile.php"; break;
case 'gantipassword'		: include "user/gantipassword.php"; break;

// PEMBAYARAN -------------------
case 'pembayaran'			: include "user/pembayaran.php"; break;
case 'transaksi'			: include "user/transaksi.php"; break;
case 'chat'					: include "user/chat.php"; break;

//PENGUJIAN ----------------------------------------------------------------------
case 'pengujiankimia'					: include "pengujian/pengujiankimia.php"; break;
case 'kimia-tanah-rutin'				: include "pengujian/kimiatanahrutin.php"; break;
case 'kimia-tanah-khusus'				: include "pengujian/kimiatanahkhusus.php"; break;
case 'kimia-tanaman-dan-air'			: include "pengujian/kimiatanamandanair.php"; break;
case 'kimia-pupuk-organik'				: include "pengujian/kimiapupukorganik.php"; break;
case 'kimia-pupuk-anorganik'			: include "pengujian/kimiapupukanorganik.php"; break;
case 'pengujian-mineralogi'				: include "pengujian/mineralogi.php"; break;
case 'pengujian-fisika'					: include "pengujian/fisika.php"; break;
case 'pengujian-biologi'				: include "pengujian/biologi.php"; break;

}
?> 