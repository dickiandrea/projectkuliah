<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  
	  <div class="x_content">

		<div class="container-mailbox">
			<!-- Start Mailbox Inbox -->
			<div class="col-lg-3 col-md-4 padding-0" style="padding-left:0px;margin-left:-20px;">				
				<input type="text" id="kode_refresh" value="0">		asdfasdf		
				<ul class="mailbox-inbox">					
					<li style="text-align:center;">
						<button style="margin-bottom:-10px;" class="btn btn-sm btn-info" type="button" disabled>+</button>
						<button style="margin-bottom:-10px;" onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info" type="button">Tambah Pesan</button>
					</li>
					<li class="search">
					  
						<input type="text" class="mailbox-search" id="mailboxsearch" placeholder="Search">
						<span class="searchbutton"><i class="fa fa-search"></i></span>					  
					</li>
					<li>	
						<ul id="hcari-chat">
						<?php
						$kata = "
							select c.kode_user, a.nama, c.isi,  c.tanggal, c.tampil from user as a
							join 
								(SELECT kode_user, Max(tanggal) as tanggal
								FROM chat
								GROUP BY kode_user)
							b
							JOIN 
							chat as c
							on
							a.kode_user = b.kode_user and c.kode_user = a.kode_user and b.tanggal=c.tanggal and ( c.tampil = '' or c.tampil = 'ya')
							order by c.tampil
							";
						$result = $mysqli->query($kata);					
						while($data = $result->fetch_assoc()){	
							$tgl = explode(" ", $data['tanggal']);
							$sekali = explode(" ",Convert::convert_tanggal($tgl[0]));
							$tglakhir = $sekali[0]." ".$sekali[1];
							if($data['tampil'] != 'ya'){
							?>						
								<li style="background:#e6e6e6;">
								  <a href="#" onclick="openchat(<?php echo $data['kode_user'];?>);"  class="item clearfix">
									<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
									<span class="from"><?php echo $data['nama'];?></span>
									<p><?php echo substr($data['isi'],0, 20);?></p>
									<span class="date"><?php echo $tglakhir;?></span>
								  </a>
								</li>
							<?php	
							}else{
							?>						
								<li>
								  <a href="#" onclick="openchat(<?php echo $data['kode_user'];?>);"  class="item clearfix">
									<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
									<span class="from"><?php echo $data['nama'];?></span>
									<p><?php echo substr($data['isi'],0, 20);?></p>
									<span class="date"><?php echo $tglakhir;?></span>
								  </a>
								</li>
							<?php
							}						
						}
						?>
						</ul>
					</li>
				</ul>
			</div>
			<!-- End Mailbox Inbox -->

			<!-- Start Chat -->			
			
			<div class="col-md-9 col-sm-8 col-xs-12" style="padding-left:0px !important; float: right;">
				<div class="x_panel">
				  <div class="x_title">
					<a class="collapse-link btn btn-info" >Media</a>		
					<ul class="nav navbar-right panel_toolbox">
					  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					  </li>		  
					  <li><a class="close-link"><i class="fa fa-close"></i></a>
					  </li>
					</ul>					
					<div class="clearfix"></div>
				  </div>				  
				  <div class="x_content" style="display:none;" id="isimedia">

				  </div>
				</div>
			</div>
			 
			 
			<div class="chat col-lg-9 col-md-8 padding-0" id="isichat">
			
				<div style="text-align:center;padding:60px 0px;">
					<img src="../images/logo/balittanah.png" alt="balittanah" class="img-circle " style="width: 100px;">
					<br> Selamat Datang di Chatting Room
				</div>
				


			  <!-- End Conv -->


			</div>
			<!-- End Chat -->

		</div>
  <!-- End Mailbox Container -->

	  </div>
	</div>
  </div>
 </div>
 
 <div id="tambah" class="modal" >
	<div class="row animate-zoom">
		<div  style="width: 80%; margin:auto !important;">
			<div class="x_panel">
			  <div class="x_title">
				<h2>Tambah Pesan</h2>
				<span onclick="document.getElementById('tambah').style.display='none';" class="close" title="Close Modal"><i class="fa fa-close"></i></span> 
				<div class="clearfix"></div>
			  </div>
			  
			  <div class="x_content">	  
				<form action="?page=input_pesan" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="" >
				 
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerima">Penerima <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="selectpicker" data-live-search="true" name="penerima" id="penerima" required>
						<option value="">Pilih Penerima</option>
						<?php
							$data = "select kode_user, instansi, nama from user";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								echo "<option value='".$hasil['kode_user']."'>".$hasil['nama']." | ".$hasil['instansi']."</option>";
							}
						?>
						</select>						
					</div>
					
				  </div>
				  <div class="item form-group" id="tambah-isipesan">
					
				  </div>
				  <div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12"></span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="btn btn-primary" type="hidden" name="kirim" value="tambah_pesan">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input type="submit" class="btn btn-default" name="ok" value="Kirim" id="tambah" >					
					</div>
				  </div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>