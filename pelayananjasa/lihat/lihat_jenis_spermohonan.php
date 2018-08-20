
<div class="page-title">
  <div class="title_left">
	<h3>Data Lampiran<small> Surat Permohonan Pengujian</small></h3>
  </div>  
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<div class="col-md-4" style="margin: 10px 0px;"><button onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info " type="button">Tambah SPermohonan</button></div>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  
	  <div class="x_content">		
		<p>Berikut ini adalah daftar data lampiran surat permohonan pengujian. Data ini menjadi dasar tujuan pengiriman data transaksi ke laboratorium untuk di teliti.</p>

		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th >Kode<br/><small>SPermohonan</small></th>
			  <th style="width: 25%;">Nama SPermohonan</th>
			  <th style="width: 40%;">Keterangan</th>
			  <th style="width: 10%;">Tombol</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				$query = "select * from surat_permohonan";
				$result = $mysqli->query($query);
				while($data = $result->fetch_assoc())
				{
					echo "<tr>
							  <td></td>
							  <td>".$data['kode_sp']."</td>			  
							  <td>".$data['nama_sp']."</td>
							  <td>".$data['keterangan']."</td>
							  <td>
								<a href=\"?page=update_jenis_spermohonan&kode_sp=".$data['kode_sp']."&set=update\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-pencil\"></i> Edit </a>
								<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_jenis_spermohonan&kode_sp=".$data['kode_sp']."&set=delete\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i> Delete </a>
							  </td>
						</tr>";
				}
			?>
		  </tbody>
		</table>
		
	  </div>
	</div>
  </div>
 </div>

<!-- The Modal (contains the Sign Up form) -->
<div id="tambah" class="modal" >
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Tambah SPermohonan</h2>
				<span onclick="document.getElementById('tambah').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  <div class="x_content">	  
				<form action="?page=input_jenis_spermohonan" method="post" enctype="multipart/form-data" class="control-line">
					<div class="item form-group">
					  <label for="kodespermohonan" class="form-label">Kode SPermohonan</label>
					  <input type="text" class="form-control form-control-line" id="kodespermohonan" data-validate-length-range="1-1"   required="required" placeholder="Masukan nama SPermohonan" name="kodespermohonan"/>
					</div>
					<div class="item form-group">
					  <label for="namaspermohonan" class="form-label">Nama SPermohonan</label>
					  <input type="text" class="form-control form-control-line" id="namaspermohonan" required="required" placeholder="Masukan nama SPermohonan" name="namaspermohonan"/>
					</div>
					<div class="item form-group">
					  <label class="form-label">Keterangan</label>
					  <textarea class="form-control form-control-line" rows="3" required="required" placeholder="Masukan keterangan SPermohonan" name="ketspermohonan"></textarea>
					</div>
					<input class="btn btn-primary" type="hidden" name="tambah" value="data_spermohonan">
					<input class="btn btn-primary" type="reset" value="Reset">
					<input type="submit" class="btn btn-default" name="ok" value="Tambah" >					
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>
