
<div class="page-title">
  <div class="title_left">
	<h3>Data Lampiran<small> Pertanyaan Penelitian</small></h3>
  </div>
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<div class="col-md-4" style="margin: 10px 0px;"><button onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info" type="button">Tambah Pertanyaan</button></div>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  
	  <div class="x_content">		
		<p>Berikut ini adalah daftar data lampiran pertanyaan analisis.</p>
		<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
			<p>Filter  :
			<select class="selectpicker" data-live-search="true" name="filter_permohonan" id="filter_permohonan" required>
				<option value="">Pilih Permohonan</option>
				<?php
					$data = "select kode_sp, nama_sp from surat_permohonan";
					$result = $mysqli->query($data);
					while($hasil = $result->fetch_assoc()){
						echo "<option value='".$hasil['kode_sp']."'>".$hasil['nama_sp']."</option>";
					}
				?>
			</select>						
			<select class="select" name="filter_analisis" id="filter_analisis" required>
			<option value="">Pilih Analisis</option>
			<?php
				$data = "select kode_analisis, nama_analisis from jenis_analisis";
				$result = $mysqli->query($data);
				while($hasil = $result->fetch_assoc()){
					echo "<option value='".$hasil['kode_analisis']."'>".$hasil['nama_analisis']."</option>";
				}
			?>
			</select>
			</p>
		</div>

		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th>Kode<br/><small>Pertanyaan</small></th>
			  <th>Nama<br/><small>Analisis</small></th>
			  <th style="width: 45%; max-width: 150px !important;">Pertanyaan</th>
			  <th style="width: 10%; max-width: 150px;">Tarif</th>
			  <th style="width: 10%; max-width: 150px;">Tombol</th>
			</tr>
		  </thead>
		  <tbody id="hasilfilter">
			<?php
				$query = "select a.kode_pertanyaan, a.kode_analisis, a.isi_pertanyaan,a.tarif, b.nama_analisis from pertanyaan as a inner join jenis_analisis as b where a.kode_analisis=b.kode_analisis";				
				$result = $mysqli->query($query);
				while($data = $result->fetch_assoc())
				{
				echo "<tr>
						  <td></td>
						  <td>".$data['kode_pertanyaan']."</td>			  
						  <td>".$data['nama_analisis']."</td>			  
						  <td>".$data['isi_pertanyaan']."</td>
						  <td>Rp.".$data['tarif']."</td>
						  <td>
							<a href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=update\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-pencil\"></i> Edit </a>
							<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=delete\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i> Delete </a>
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
				<h2>Tambah Jenis Analisis</h2>
				<span onclick="document.getElementById('tambah').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="?page=input_pertanyaan" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >
				 
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_spermohonan">Kode SPermohonan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="selectpicker" data-live-search="true" name="kode_spermohonan" id="kode_spermohonan" required>
						<option value="">Pilih SPermohonan</option>
						<?php
							$data = "select kode_sp, nama_sp from surat_permohonan";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								echo "<option value='".$hasil['kode_sp']."'>".$hasil['nama_sp']."</option>";
							}
						?>
						</select>						
					</div>
					
				  </div>				  
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenisanalisis">Jenis Analisis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="select" name="jenisanalisis" id="jenisanalisis" required>
						<option >Pilih Analisis</option>
						<?php					   
							$data = "select * from jenis_analisis";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								echo "<option value='".$hasil['kode_analisis']."'>".$hasil['nama_analisis']."</option>";
							}
						?>
						</select>
					</div>
				  </div>
				  <div class="item form-group" id="tambah-turunan">
					<label class="control-label col-md-3 col-sm-3 col-xs-10" for="kodepertanyaan">Kelompok Pertanyaan<span class="required">*</span>
					</label>
					<div class="col-md-5 col-sm-5 col-xs-8">
					  <input type="text" id="kodepertanyaan" class="form-control col-md-7 col-xs-10" placeholder="Kode Kelompok Pertanyaan" name="kodepertanyaan" readonly>					  
					</div>
					<div class="col-md-1 col-sm-1 col-xs-2">					  
						<span class="btn btn-info" id="tbh-turunan">+</span> 					  
					</div>
					<div class="col-md-1 col-sm-1 col-xs-2">					  
						<span class="btn btn-danger" id="kurang-turunan">-</span> 					  
					</div>
					<div class="col-md-1 col-sm-1 col-xs-2">
					  <input type="hidden" id="jmlh-tbh-turunan" name="jmlh-tbh-turunan" class="form-control col-md-1 col-xs-2" value="0">
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="btn btn-primary" type="hidden" name="tambah" value="data_pertanyaan">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input type="submit" class="btn btn-default" name="ok" value="Tambah" id="tambah" >					
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
