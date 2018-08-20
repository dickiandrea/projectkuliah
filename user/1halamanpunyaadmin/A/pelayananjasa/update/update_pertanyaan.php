<?php
error_reporting(E_ALL);
$data = Input::get('set');
$kode = Input::get('kode_pertanyaan');

if(Input::get('tambah') == "update_pertanyaan"){
	$unik = Input::get('unik');
	//die($unik);die();

// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
  $result = $update->update('pertanyaan', "kode_pertanyaan='$unik'", array(
    'kode_pertanyaan' => Input::get('kodepertanyaan'),
    'kode_analisis' => Input::get('jenisanalisis'),
  	'isi_pertanyaan' => Input::get('pertanyaan'),
	'tarif' => Input::get('tarif')
  ));

  if($result){

    ?><script language="JavaScript">alert("Update data berhasil !");
    document.location='?page=lihat_pertanyaan'; </script><?php
  }else{
    ?><script language="JavaScript">alert("Update data gagal Bro !");
	document.location='?page=lihat_pertanyaan'; 
    </script><?php
  }

}


if($data == "delete"){
	
	$delete->delete("pertanyaan","kode_pertanyaan='$kode'");
	?>	<script language="JavaScript">
		document.location='?page=lihat_pertanyaan'; </script>
	<?php
	
}else{	
$kode = Input::get('kode_pertanyaan');
$data = "select * from pertanyaan where kode_pertanyaan='$kode'";
$result = $mysqli->query($data);
while($data = $result->fetch_assoc()){
	$kode_analisis = $data['kode_analisis'];
	$kode_pertanyaan = $data['kode_pertanyaan'];
	$kode_spermohonan = substr($kode_pertanyaan, 0, 1);
	$isi_pertanyaan = $data['isi_pertanyaan'];
	$tarif = $data['tarif'];
	
?>

<div id="tambah" class="modal" style="display:block;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Update Pertanyaan</h2>
				<a href="?page=lihat_pertanyaan"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >
				 
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Kode SPermohonan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="selectpicker" data-live-search="true" name="kode_spermohonan" id="kode_spermohonan" required="required">
						<?php
							$data = "select kode_sp, nama_sp from surat_permohonan";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								if($hasil['kode_sp'] == $kode_spermohonan)
								{
									echo "<option value='".$hasil['kode_sp']."' selected>".$hasil['kode_sp']."</option>";
								}else{
									echo "<option value='".$hasil['kode_sp']."'>".$hasil['kode_sp']."</option>";	
								}								
							}
						?>
						</select>						
					</div>
				  </div>				  
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenisanalisis">Jenis Analisis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="select" name="jenisanalisis" id="jenisanalisis" required="required">
						<?php
							$data = "select * from jenis_analisis";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								if($hasil['kode_analisis'] == $kode_analisis)
								{
									echo "<option value='".$hasil['kode_analisis']."' selected>".$hasil['nama_analisis']."</option>";
								}else{
									echo "<option value='".$hasil['kode_analisis']."'>".$hasil['nama_analisis']."</option>";	
								}								
							}
						?>
						</select>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepertanyaan">Kode Pertanyaan<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="kodepertanyaan" name="kodepertanyaan" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $kode_pertanyaan;?>">
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pertanyaan">Pertanyaan<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <textarea id="pertanyaan" class="form-control col-md-7 col-xs-12" rows="3" required="required" name="pertanyaan" ><?php echo $isi_pertanyaan;?></textarea>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tarif">Tarif<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="input-group">
					  <div class="input-group-addon"><i class="fa ">Rp.</i></div>
					  <input type="number" class="form-control" name="tarif" id="tarif" placeholder="Tarif" required="required" value="<?php echo $tarif;?>">
					  <div class="input-group-addon">.00</div>
					 <div>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="btn btn-primary" type="hidden" name="tambah" value="update_pertanyaan">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input class="btn btn-primary" type="hidden" name="unik" value="<?php echo $kode_pertanyaan;?>">
						<input type="submit" class="btn btn-default" name="ok" value="Update" id="tambah" >					
					</div>
				  </div>
				</form>	  
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>

</div>
<?php 
	}
}
?>