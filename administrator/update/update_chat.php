 <?php
error_reporting(E_ALL); 
 if(Input::get('hapuschat')){
	$kode = Input::get('username');
	$user = Input::get('kode_user');
	
	$result = $update->update('chat', "username='$kode' or kode_user = '$user'", array(
		'tampil' => 'tidak'
	  ));
	?>	<script language="JavaScript">alert('Hapus chat berhasil :)');
		document.location='?page=pesan_chat'; </script>
	<?php
 }else if(Input::get('hapuschatadmin')){
	$pengirim = Input::get('pengirim');
	$penerima = Input::get('penerima');
	
	$result = $update->update('chatadmin', "penerima = '$penerima'", array(
		'tampil' => 'tidak'
	  ));
	?>	<script language="JavaScript">alert('Hapus chat berhasil :)');
		document.location='?page=admin_chat'; </script>
	<?php
 }
 
 ?>