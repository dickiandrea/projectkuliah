<?php
error_reporting(E_ALL);
$data = Input::get('set');
$kode = Input::get('kode');

if(Input::get('tambah') == "update_hak_akses"){
	$unik = Input::get('unik');
	//die($unik);die();
// Keterangan update : ada 3 parameter; 1. Nama table, 2. Kondisi atau syarat, 3. isi menggunakan array	
  $result = $update->update("hak_akses", "kode_akses='$unik'", array(
    "kode_akses" => Input::get('kode_hakakses'),
    "jenis_akses" => Input::get('jenishakakses')
  ));

  if($result){

    ?><script language="JavaScript">alert("Update data berhasil !");
    document.location='?page=lihat_hakakses'; </script><?php
  }else{
    ?><script language="JavaScript">alert("Update data gagal Bro !");
	document.location='?page=lihat_hakakses'; 
    </script><?php
  }

}


if($data == "delete"){
	
	$delete->delete("hak_akses","kode_akses='$kode'");
	?>	<script language="JavaScript">
		document.location='?page=lihat_hakakses'; </script>
	<?php
	
}else{	

$kode_akses = Input::get('kode');
$data = "select * from hak_akses where kode_akses='$kode_akses'";
$result = $mysqli->query($data);
while($data = $result->fetch_assoc()){
	//var_dump($data);die();
	$kd = $data['kode_akses'];
	$jns = $data['jenis_akses'];
?>
<div id="tambah" class="modal" style="display:block;">
	<div class="row animate-zoom">	
		<div  style="max-width: 750px; min-width: 300px; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">			  
				<h2>Edit Hak Akses</h2>
				<a href="?page=lihat_hakakses"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="" method="post">
					<div class="form-group">
					  <label for="jenishakakses" class="form-label">Kode Hak Akses</label>
					  <input type="text" class="form-control form-control-line" id="jenishakakses" required="required" name="kode_hakakses" value="<?php echo $kd;?>">
					</div>
					<div class="form-group">
					  <label for="jenishakakses" class="form-label">Jenis Hak Akses</label>
					  <input type="text" class="form-control form-control-line" id="jenishakakses" required="required" name="jenishakakses" value="<?php echo $jns;?>">
					</div>
					<input class="btn btn-primary" type="hidden" name="tambah" value="update_hak_akses">
					<input class="btn btn-primary" type="hidden" name="unik" value="<?php echo $kd;?>">
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