<?php
error_reporting(E_ALL);
$data = Input::get('set');
$kode = Input::get('kode_sp');

if(Input::get('tambah') == "update_data_spermohonan"){
	$unik = Input::get('kode_sp');
	//die($unik);die();
// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
  $result = $update->update("surat_permohonan", "kode_sp='$unik'", array(
    "kode_sp" => Input::get('kodespermohonan'),
    "nama_sp" => Input::get('namaspermohonan'),
    "keterangan" => Input::get('ketspermohonan')
  ));

  if($result){

    ?><script language="JavaScript">alert("Update data berhasil !");
    document.location='?page=lihat_jenis_spermohonan'; </script><?php
  }else{
    ?><script language="JavaScript">alert("Update data gagal Bro !");
	document.location='?page=lihat_jenis_spermohonan'; 
    </script><?php
  }

}


if($data == "delete"){
	
	$delete->delete("surat_permohonan","kode_sp='$kode'");
	?>	<script language="JavaScript">
		document.location='?page=lihat_jenis_spermohonan'; </script>
	<?php
	
}else{	

$data = "select * from surat_permohonan";
$result = $mysqli->query($data);
while($data = $result->fetch_assoc()){
	
?>

<div id="tambah" class="modal" style="display:block;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Edit <small><b>Jenis Pengujian</b></small></h2>
				<a href="?page=lihat_jenis_spermohonan"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  <div class="x_content">	  
				<form action="" method="post" enctype="multipart/form-data" >
					<div class="item form-group">
					  <label for="kodespermohonan" class="form-label">Kode SPermohonan</label>
					  <input type="text" class="form-control form-control-line" id="kodespermohonan" data-validate-length-range="1-1" required="required" name="kodespermohonan" value="<?php echo $data['kode_sp'];?>"/>
					</div>
					<div class="item form-group">
					  <label for="namaspermohonan" class="form-label">Nama SPermohonan</label>
					  <input type="text" class="form-control form-control-line" id="namaspermohonan" required="required" name="namaspermohonan" value="<?php echo $data['nama_sp'];?>"/>
					</div>
					<div class="item form-group">
					  <label class="form-label">Keterangan</label>
					  <textarea class="form-control form-control-line" rows="3" required="required" name="ketspermohonan"><?php echo $data['keterangan'];?></textarea>
					</div>
					<input class="btn btn-primary" type="hidden" name="tambah" value="update_data_spermohonan">
					<input class="btn btn-primary" type="hidden" name="unik" value="<?php echo $data['kode_sp']; ?>">
					<input class="btn btn-primary" type="reset" value="Reset">
					<input type="submit" class="btn btn-default" name="ok" value="Update" >					
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