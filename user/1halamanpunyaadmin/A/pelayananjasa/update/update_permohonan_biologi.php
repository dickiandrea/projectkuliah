<?php
error_reporting(E_ALL);

if(Input::get('bayar') == "belum"){
		$unik = Input::get('kode_order');
		//die($unik);die();

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $result = $update->update('tborder', "kode_order='$unik'", array(
		'status_bayar' => "belum dibayar"
	  ));

	  $up = $update->update('status', "kode_order='$unik'", array(
		'bayar' => ""
	  ));

	  if(($result && $up ) == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Bayar Menjadi Belum!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Bayar Menjadi Belum!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('bayar') == "sudah"){
		$unik = Input::get('kode_order');
		//die($unik);die();

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $result = $update->update('tborder', "kode_order='$unik'", array(
		'status_bayar' => "sudah dibayar"
	  ));
	  
	  $up = $update->update('status', "kode_order='$unik'", array(
		'bayar' => Input::get('tanggal')
	  ));

	  if(($result && $up ) == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Bayar Menjadi Sudah!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Bayar Menjadi Sudah!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('sampel') == "belum"){
		$unik = Input::get('kode_order');
		//die($unik);die();

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $result = $update->update('tborder', "kode_order='$unik'", array(
		'status_kirim' => "belum dikirim"
	  ));
	  
	  $up = $update->update('status', "kode_order='$unik'", array(
		'contoh' => Input::get('tanggal')
	  ));

	  if(($result && $up ) == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Sampel Menjadi Belum Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Sampel Menjadi Belum Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('sampel') == "lengkap"){
		$unik = Input::get('kode_order');
		//die($unik);die();

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $result = $update->update('tborder', "kode_order='$unik'", array(
		'status_kirim' => "sudah dikirim"
	  ));

	  $up = $update->update('status', "kode_order='$unik'", array(
		'contoh' => Input::get('tanggal')
	  ));

	  if(($result && $up ) == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Sampel Menjadi Sudah Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Sampel Menjadi Sudah Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}