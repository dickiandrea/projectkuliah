<?php
error_reporting(E_ALL);
$data = Input::get('set');
$kode = Input::get('kode_analisis');

if(Input::get('tambah') == "data_jenis_analisis"){
	$unik = Input::get('kode_analisis');
	//die($unik);die();

// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
  $result = $update->update('jenis_analisis', "kode_analisis='$unik'", array(
    'kode_analisis' => Input::get('kode_sp').Input::get('kodeanalisis'),
    'kode_sp' => Input::get('kode_sp'),
    'nama_analisis' => Input::get('namaanalisis'),
  	'keterangan' => Input::get('ketanalisis')
  ));

  if($result){

    ?><script language="JavaScript">alert("Update data berhasil !");
    document.location='?page=lihat_jenis_analisis'; </script><?php
  }else{
    ?><script language="JavaScript">alert("Update data gagal Bro !");
	document.location='?page=lihat_jenis_analisis'; 
    </script><?php
  }

}


if($data == "delete"){
	
	$delete->delete("jenis_analisis","kode_analisis='$kode'");
	?>	<script language="JavaScript">
		document.location='?page=lihat_jenis_analisis'; </script>
	<?php
	
}else{	
$kode = Input::get('kode_analisis');
$data = "select * from jenis_analisis where kode_analisis='$kode'";
$result = $mysqli->query($data);
while($data = $result->fetch_assoc()){
	$nama_analisis = $data['nama_analisis'];
	$kode_analisis = substr($data['kode_analisis'],1,5);
	$kode_sp = $data['kode_sp'];
	$keterangan = $data['keterangan'];
	
?>

<div id="tambah" class="modal" style="display:block;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Edit <small><b>Daftar Jenis Analisis</b></small></h2>
				<a href="?page=lihat_jenis_analisis"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  <div class="x_content">	  
				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodesp">Kode SPermohonan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="selectpicker" data-live-search="true" name="kode_sp">						
						<?php							
							$data = "select kode_sp, nama_sp from surat_permohonan";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								$kdsp = $hasil['kode_sp'];
								if($kdsp == $kode_sp){
									echo "<option selected value=\"".$hasil['kode_sp']."\">".$hasil['nama_sp']."</option>";
								}else{
									echo "<option value=\"".$hasil['kode_sp']."\">".$hasil['nama_sp']."</option>";
								}								
							}
						?>
						</select>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodeanalisis">Kode Analisis <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="kodeanalisis" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="kodeanalisis" placeholder="Masukan kode analisis" required="required" type="text" value="<?php echo $kode_analisis;?>">
					</div>
				  </div>				  
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaanalisis">Nama Analisis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="namaanalisis" name="namaanalisis" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nama_analisis?>">
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ketanalisis" ><span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <textarea id="ketanalisis" class="form-control col-md-7 col-xs-12" rows="3" required="required" placeholder="Masukan keterangan analisis" name="ketanalisis"><?php echo $keterangan;?></textarea>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="btn btn-primary" type="hidden" name="tambah" value="data_jenis_analisis">
						<input class="btn btn-primary" type="hidden" name="unik" value="<?php echo $kode_analisis; ?>">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input type="submit" class="btn btn-default" name="ok" value="Update" >					
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
}
?>