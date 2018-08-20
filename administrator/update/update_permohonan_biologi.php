<?php
error_reporting(E_ALL);

$unik = Input::get('id_order');

if(Input::get('update') == "berikode"){				

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	$tahun = date('y');
	$query = "select count(*) as jumlah from status where kode_order like '$tahun%'";
	//var_dump($query);die();
	$result = $mysqli->query($query);
	$nourut = $result->fetch_assoc()['jumlah'];
	$nourut = $nourut + 1;
	$kode_order = date('y').".".date('m').".".$nourut;
	//var_dump($kode_order);die();
	
	$query = "
	select count(*) as baris, sum(a.contoh_tanah) as jumlah, d.nomer, a.kode_analisis as kode
	from tborder as a 
	join (select kode_analisis from tborder where id = '$unik')b join tborder as c
	join 
	(select max(z.nomer_contoh) as nomer from status as z inner join tborder as y where kode_analisis like 'B%')d
	join
	status as e
	on
	a.id = c.id and b.kode_analisis = a.kode_analisis and a.id = e.id_order ";
	//var_dump($query);die();
	
	$result = $mysqli->query($query);
		
	while($data = $result->fetch_assoc()){
		$nomer = $data['nomer'];
		$totaljumlah = $data['jumlah'];
		$kode_analisis = $data['kode'];
	}
	
	
	$kode_analisis = substr($kode_analisis, 1, 4);
	
	$penomoran = "B.".$kode_analisis.".".($nomer+1)."-".$totaljumlah;
	
	//var_dump($penomoran);die();
	
	$up = $update->update('status', "id_order='$unik'", array(
		'kode_order' => $kode_order,
		'nomer_contoh' => $penomoran
	  ));
	
	$down = $update->update('tborder', "id='$unik'", array(
		'kode_order' => $kode_order
	  ));
	  
	  
	$tambah = $insert->tambah('sericontoh',array(    
		'kode_order' => $kode_order
	));
	  
	  if($up == TRUE and $down == TRUE and $tambah == TRUE){

		?><script language="JavaScript">alert("Input kode order dan nomor contoh berhasil !");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal input kode order dan nomor contoh!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('bayar') == "belum"){				

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	

	  $up = $update->update('status', "id_order='$unik'", array(
		'bayar' => ""
	  ));

	  if($up == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Bayar Menjadi Belum!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Bayar Menjadi Belum!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('bayar') == "sudah"){

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $up = $update->update('status', "id_order='$unik'", array(
		'bayar' => Input::get('tanggal')
	  ));

	  if($up == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Bayar Menjadi Sudah!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Bayar Menjadi Sudah!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('sampel') == "belum"){

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $up = $update->update('status', "id_order='$unik'", array(
		'contoh' => Input::get('tanggal')
	  ));

	  if($up == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Sampel Menjadi Belum Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Sampel Menjadi Belum Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('sampel') == "lengkap"){

	// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
	  $up = $update->update('status', "id_order='$unik'", array(
		'contoh' => Input::get('tanggal')
	  ));

	  if($up == TRUE){

		?><script language="JavaScript">alert("Sukses Merubah Status Sampel Menjadi Sudah Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; </script><?php
	  }else{
		?><script language="JavaScript">alert("Gagal Merubah Status Sampel Menjadi Sudah Lengkap!");
		document.location='?page=lihat_permohonan_biologi'; 
		</script><?php
	  }

}else if(Input::get('update') == "bayar"){
	?>
	
<div class="modal" style="display:block !important;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Konfirmasi Pembayaran</h2>
				<a href="?page=lihat_permohonan_biologi"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >					
					
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Tanggal Konfirmasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>								
								<input type="text" name="tanggal" class="form-control"  />
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="bayar" value="sudah">
							<input class="btn btn-primary" type="hidden" name="kode_order" value="<?php echo $unik; ?>">
							<input type="submit" class="btn btn-default col-md-4" name="ok" value="Konfirmasi Pembayaran" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>

	<?php
	
}else if(Input::get('update') == "contoh"){
?>
<div class="modal" style="display:block !important;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Konfirmasi Kelengkapan Contoh</h2>
				<a href="?page=lihat_permohonan_biologi"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >					
					
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Tanggal Konfirmasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>								
								<input type="text" name="tanggal" class="form-control"  />
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="sampel" value="lengkap">
							<input class="btn btn-primary" type="hidden" name="kode_order" value="<?php echo $unik; ?>">
							<input type="submit" class="btn btn-default col-md-4" name="ok" value="Konfirmasi Kelengkapan" >					
						</div>
					</div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>
<?php
}
?>