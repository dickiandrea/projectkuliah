<?php
error_reporting(E_ALL);
//var_dump(Input::get('kwitansi'));
if(Input::get('kwitansi')){
	$kode = Input::get('kode_order');
	$kata = "select total_biaya from tborder where kode_order='$kode'";
	$result = $mysqli->query($kata);
	while($data = $result->fetch_assoc()){
		$tarif = $data['total_biaya'];
	}
?>


<div id="tambah" class="modal" style="display:block !important;">
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Print Per Periode</h2>
				<a href="?page=lihat_rekap_on_pengambilan"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="laporan/print_kwitansi.php" target="_blank" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >										
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Pengambil <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="nama" placeholder="Masukan nama" required="required" type="text">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tarif">Total Biaya<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="input-group">
						  <div class="input-group-addon"><i class="fa ">Rp.</i></div>
						  <input type="number" class="form-control" name="tarif" id="tarif" placeholder="Tarif" value="<?php echo $tarif;?>" readonly>
						  <div class="input-group-addon">.00</div>
						 </div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="penyebutan">penyebutan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <textarea id="penyebutan" class="form-control col-md-7 col-xs-12" rows="3" required="required" name="penyebutan" ></textarea>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="btn btn-primary" type="hidden" name="print" value="print">
							<input class="btn btn-primary" type="hidden" name="unik" value="<?php echo $kode;?>">
							<input type="submit" class="btn btn-default col-md-4" name="ok" value="Ambil Kwitansi" >					
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