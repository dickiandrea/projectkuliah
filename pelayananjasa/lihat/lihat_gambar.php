<?php
$alamat = Input::get('alamat');
$nama = Input::get('nama');
?>

<div id="tambah" class="modal" style="display:block;">
	<div id="laporan_penelitian" class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Gambar <?php echo $nama;?></h2>
				<a href="?page=pesan_chat"><span class="close" title="Close Modal"><i class="fa fa-close"></i></span></a> 
				<div class="clearfix"></div>				
			  </div>
			  
			  <div class="x_content" style="text-align:center;">	  
				  
					<center><img src="../user/user/files/<?php echo $alamat;?>" title="<?php echo $nama;?>" class="img-responsive img-rounded"></center>
					<h3 style="text-align:center;"><?php echo $nama;?></h3>

			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>

</div>

