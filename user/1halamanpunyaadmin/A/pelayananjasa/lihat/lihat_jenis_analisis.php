
<div class="page-title">
  <div class="title_left">
	<h3>Data Lampiran<small> Jenis Analisis</small></h3>
  </div>
  
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<div class="col-md-4" style="margin: 10px 0px;"><button onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info " type="button">Tambah Jenis Analisis</button></div>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  
	  <div class="x_content">		
		<p>Berikut ini adalah daftar data lampiran Analisis Penelitian. Data ini menjadi dasar data poin-poin penelitian untuk diberikan kepada pihak lab agar mereka bisa meneliti sesuai dengan apa yang diminta.</p>

		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th >Kode<br/><small>Analisis</small></th>
			  <th >Nama<br/><small>SPermohonan</small></th>
			  <th style="width: 25%;">Nama Analisis</th>
			  <th style="width: 40%;">Keterangan</th>
			  <th style="width: 10%;">Tombol</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				$query = "select a.kode_analisis, a.kode_sp, a.nama_analisis, a.keterangan, b.nama_sp from jenis_analisis as a inner join surat_permohonan as b where a.kode_sp = b.kode_sp";
				$result = $mysqli->query($query);
				while($data = $result->fetch_assoc())
				{
					echo "<tr>
							  <td></td>
							  <td>".$data['kode_analisis']."</td>			  
							  <td>".$data['nama_sp']."</td>			  
							  <td>".$data['nama_analisis']."</td>
							  <td>".$data['keterangan']."</td>
							  <td>
								<a href=\"?page=update_jenis_analisis&kode_analisis=".$data['kode_analisis']."&set=update\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
								<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_jenis_analisis&kode_analisis=".$data['kode_analisis']."&set=delete\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
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
				<form action="?page=input_jenis_analisis" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >				
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodesp">Kode SPermohonan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="selectpicker" data-live-search="true" name="kode_sp">
							<option value="">Pilih disini</option>
						<?php
							require_once "../pusatdata/core/init.php";
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
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodeanalisis">Kode Analisis <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="kodeanalisis" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" name="kodeanalisis" placeholder="Masukan kode analisis" required="required" type="text">
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaanalisis">Nama Analisis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="namaanalisis" name="namaanalisis" required="required" class="form-control col-md-7 col-xs-12">
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ketanalisis">Keterangan<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <textarea id="ketanalisis" class="form-control col-md-7 col-xs-12" rows="3" required="required" placeholder="Masukan keterangan analisis" name="ketanalisis"></textarea>
					</div>
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="btn btn-primary" type="hidden" name="tambah" value="data_jenis_analisis">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input type="submit" class="btn btn-default" name="ok" value="Tambah" >					
					</div>
				  </div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>
