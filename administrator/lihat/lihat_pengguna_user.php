 
 <div class="page-title">
  <div class="title_left">
	<h3>Daftar Pengguna <small> Pelanggan Umum</small></h3>
  </div>

</div>

<div class="clearfix"></div>
<div class="row"> 
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<a class="collapse-link btn btn-info">Daftarkan Pelanggan</a>		
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>		  
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content" style="display:none;">

	  <form class="form-horizontal form-label-left" novalidate="" action="?page=input_pelanggan" method="post">
		  <span class="section">Masukan Data Anda!</span>

		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Perwakilan <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" placeholder="Masukan nama" required="required" type="text">
			</div>
		  </div>
		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Instansi <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input id="instansi" class="form-control col-md-7 col-xs-12" name="instansi" placeholder="Masukan nama" required="required" type="text">
			</div>
		  </div>
		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat Instansi <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input id="alamat_instansi" class="form-control col-md-7 col-xs-12" name="alamat_instansi" placeholder="Masukan nama" required="required" type="text">
			</div>
		  </div>
		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
			</div>
		  </div>
		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
			</div>
		  </div>
		  <div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Username <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input type="text" id="username" name="username" data-validate-length-range="6" required="required" class="form-control col-md-7 col-xs-12">
			</div>
		  </div>
		  <div class="item form-group">
			<label for="password" class="control-label col-md-3">Password</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
			</div>
		  </div>
		  <div class="item form-group">
			<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
			</div>
		  </div>
		  <div class="ln_solid"></div>
		  <div class="form-group">
			<div class="col-md-6 col-md-offset-3">
				<input class="btn btn-primary" type="hidden" name="tambah" value="data_admin_peljas">
				<input class="btn btn-primary" type="reset" value="Reset">
				<input type="submit" class="btn btn-default" name="ok" value="Tambah" >					
			</div>
		  </div>
		</form>

	  </div>
	</div>
  </div>
 </div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>Daftar Pengguna</h2>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">

		<p>Berikut ini adalah daftar pengguna halaman admin pelayanan jasa yang merupakan karyawan Balai Penelitian Tanah di bagian pelayanan jasa.</p>

		<!-- start project list -->
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		  <thead>
			<tr>
			  <th style="width: 1%">#</th>
			  <th style="width: 30%">Nama<br><small>Perwakilan</small></th>
			  <th style="width: 20%">Nama<br><small>Instansi</small></th>			  
			  <th style="width: 20%">Alamat<br><small>Instansi</small></th>			  
			  <th>No. Telp</th>
			  <th>Email</th>
			  <th style="width: 20%">#Edit</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				$query = "select * from user";
				$result = $mysqli->query($query);
				while($data = $result->fetch_assoc())
				{
					echo "<tr>
							  <td></td>
							  <td>".$data['nama']."</td>			  
							  <td>".$data['instansi']."</td>
							  <td>".$data['alamat_instansi']."</td>
							  <td>".$data['telp']."</td>
							  <td>".$data['email']."</td>
							  <td>
								<a href=\"?page=update_user&kode_user=".$data['kode_user']."&set=update\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-pencil\"></i> Edit </a>
								<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_user&kode_user=".$data['kode_user']."&set=delete\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i> Delete </a>
							  </td>
						</tr>";
				}
			?>
		  </tbody>
		</table>
		<!-- end project list -->

	  </div>
	</div>
  </div>
 </div>