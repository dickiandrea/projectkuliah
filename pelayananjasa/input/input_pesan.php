<?php
require_once "../pusatdata/core/init.php";
error_reporting(E_ALL);

if(Input::get('kirim') == "tambah_pesan")
{
  //$kata = "insert into chat values ('', 'admin', 'balittanah','$syarat','$isi', now(),'ya')";

  $tanggal = $mysqli->query("select now()")->fetch_array()[0];
  
  $kirimpesan = $insert->tambah('chat',array(
    'username' => 'admin',
    'instansi' => 'balittanah',
    'kode_user' => Input::get('penerima'),
    'isi' => Input::get('isipesan'),
    'tanggal' => $tanggal,
  	'tampil' => 'ya'
	));
		
	if($kirimpesan == true)
	{
		?><script language="JavaScript">alert('Kirim Pesan Berhasil!');
				document.location='?page=pesan_chat';</script><?php
				
	}else{
		?><script language="JavaScript">alert('Gagal mengirim pesan baru. Silahkan Coba lagi!');document.location='?page=pesan_chat';</script><?php
	}
	
  
}else if(Input::get('kirim') == "tambah_pesanadmin")
{
  //$kata = "insert into chat values ('', 'admin', 'balittanah','$syarat','$isi', now(),'ya')";

  $tanggal = $mysqli->query("select now()")->fetch_array()[0];
  
  $kirimpesan = $insert->tambah('chatadmin',array(
    'pengirim' => Input::get('pengirim'),
    'penerima' => Input::get('penerima'),
    'isi' => Input::get('isipesan'),
    'tanggal' => $tanggal,
  	'tampil' => 'ya',
  	'keterangan' => 'administrator'
	));
		
	if($kirimpesan == true)
	{
		?><script language="JavaScript">alert('Kirim Pesan Berhasil!');
				document.location='?page=admin_chat';</script><?php
				
	}else{
		?><script language="JavaScript">alert('Gagal mengirim pesan baru. Silahkan Coba lagi!');document.location='?page=admin_chat';</script><?php
	}
	

}else if(Input::get('kirim') == "tambah_pesanadminpeljas")
{
  //$kata = "insert into chat values ('', 'admin', 'balittanah','$syarat','$isi', now(),'ya')";

  $tanggal = $mysqli->query("select now()")->fetch_array()[0];
  
  $kirimpesan = $insert->tambah('chatadmin',array(
    'pengirim' => Input::get('pengirim'),
    'penerima' => Input::get('penerima'),
    'isi' => Input::get('isipesan'),
    'tanggal' => $tanggal,
  	'tampil' => 'ya',
  	'keterangan' => 'peljas'
	));
		
	if($kirimpesan == true)
	{
		?><script language="JavaScript">alert('Kirim Pesan Berhasil!');
				document.location='?page=peljas_chat';</script><?php
				
	}else{
		?><script language="JavaScript">alert('Gagal mengirim pesan baru. Silahkan Coba lagi!');document.location='?page=peljas_chat';</script><?php
	}
	

}
?>