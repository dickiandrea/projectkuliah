<div class="page-title">
  <div class="title_left">
	<h3>Daftar Jenis<small> Hak Akses</small></h3>
  </div>  
</div>
		  
<div class="clearfix"></div>  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<div class="col-md-4" style="margin: 10px 0px;"><button onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info " type="button">Tambah Hak Akses</button></div>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  
	  <div class="x_content">		
		<p>Berikut ini adalah daftar hak akses yang ada pada sistem pelayanan jasa balai penelitian.</p>

		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%;"></th>
			  <th >Kode<br/><small> Hak Akses</small></th>
			  <th >Jenis<br/><small> Hak Akses</small></th>
			  <th >Edit</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				$query = "select * from hak_akses";
				$result = $mysqli->query($query);
				while($data = $result->fetch_assoc())
				{
					echo "<tr>
							  <td></td>
							  <td>".$data['kode_akses']."</td>			  
							  <td>".$data['jenis_akses']."</td>
							  <td>
								<a href=\"?page=update_hak_akses&kode=".$data['kode_akses']."&set=update\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-pencil\"></i> Edit </a>
								<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_hak_akses&kode=".$data['kode_akses']."&set=delete\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i> Delete </a>
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
		<div  style="max-width: 750px; min-width: 300px; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Daftar Hak Akses</h2>
				<span onclick="document.getElementById('tambah').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  <div class="x_content">	  
				<form action="?page=input_hak_akses" method="post">
					<div class="form-group">
					  <label for="jenishakakses" class="form-label">Kode Hak Akses</label>
					  <input type="text" class="form-control form-control-line" id="jenishakakses" required="required" name="kode_hakakses">
					</div>
					<div class="form-group">
					  <label for="jenishakakses" class="form-label">Jenis Hak Akses</label>
					  <input type="text" class="form-control form-control-line" id="jenishakakses" required="required" name="jenishakakses">
					</div>
					<input class="btn btn-primary" type="hidden" name="tambah" value="data_hak_akses">
					<input class="btn btn-primary" type="reset" value="Reset">
					<input type="submit" class="btn btn-default" name="ok" value="Tambah" >					
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>