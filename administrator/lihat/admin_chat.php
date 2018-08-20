
<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  
	  <div class="x_content">

		<div class="container-mailbox">
			<!-- Start Mailbox Inbox -->
			<div class="col-lg-3 col-md-4 padding-0" style="padding-left:0px;margin-left:-20px;">
				<input type="text" name="penerimachat" id="penerimachatadmin" value="0">
				<input type="text" name="pengirim" id="pengirim" value="<?php echo Session::get('kode_admin');?>">
				<ul class="mailbox-inbox">					
					<li style="text-align:center;">
						<button style="margin-bottom:-10px;" class="btn btn-sm btn-info" type="button" disabled>+</button>
						<button style="margin-bottom:-10px;" onclick="document.getElementById('tambah').style.display='block'" class="btn btn-sm btn-info" type="button">Tambah Pesan</button>
					</li>
					<li class="search">
					  
						<input type="text" class="mailbox-search" id="mailboxsearch" placeholder="Search">
						<span class="searchbutton"><i class="fa fa-search"></i></span>
					  
					</li>
					<ul id="hcari-chat">
					<?php
					
					$syarat = Session::get('kode_admin');
					$kata = "
					select c.pengirim,c.penerima, a.nama_admin, a.email, c.isi,  b.tanggal, c.tampil from admin as a
							join 
								(SELECT pengirim, penerima, Max(tanggal) as tanggal
								FROM chatadmin where keterangan=concat(pengirim,penerima) or keterangan=concat(penerima,pengirim)
								GROUP BY penerima)
							b
							JOIN 
							chatadmin as c
							on
							b.penerima = a.kode_admin and c.pengirim = b.pengirim and b.tanggal=c.tanggal and (c.tampil = 'ya' or c.tampil = '')
							order by c.tampil
					";
					//var_dump($kata);die();
					$result = $mysqli->query($kata);					
					while($data = $result->fetch_assoc()){	
						$tgl = explode(" ", $data['tanggal']);
						$sekali = explode(" ",Convert::convert_tanggal($tgl[0]));
						$tglakhir = $sekali[0]." ".$sekali[1];
						if(($data['penerima'] == $syarat) and ($data['tampil'] != 'ya' or $data['tampil'] != '')){
						?>						
							<li style="background:#e6e6e6;">
							  <a href="#" onclick="openchatadmin(<?php echo $data['penerima'];?>);"  class="item clearfix">
								<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
								<span class="from"><?php echo $data['nama_admin'];?></span>
								
								<p><?php echo substr($data['isi'],0, 20);?></p>
								<span class="date"><?php echo $tglakhir;?></span>
							  </a>
							</li>
						<?php	
						}else{
						?>						
							<li>
							  <a href="#" onclick="openchatadmin(<?php echo $data['penerima'];?>);"  class="item clearfix">
								<img src="../images/logo/balittanah.png" alt="balittanah" class="img img-circle ">
								<span class="from"><?php echo $data['nama_admin'];?></span>
								
								<p><?php echo substr($data['isi'],0, 20);?></p>
								<span class="date"><?php echo $tglakhir;?></span>
							  </a>
							</li>
						<?php
						}						
					}
					?>
					</ul>
				</ul>
			</div>
			<!-- End Mailbox Inbox -->

			<!-- Start Chat -->			

					
			 
			 
			<div class="chat col-lg-9 col-md-8 padding-0" id="isichatadmin">
			
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
							$data = "select kode_admin, nama_admin from admin where kode_admin != '$syarat'";
							$result = $mysqli->query($data);
							while($hasil = $result->fetch_assoc()){
								echo "<option value='".$hasil['kode_admin']."'>".$hasil['nama_admin']."</option>";
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
						<input class="btn btn-primary" type="hidden" name="kirim" value="tambah_pesanadmin">
						<input class="btn btn-primary" type="reset" value="Reset">
						<input type="hidden" name="pengirim" id="pengirim" value="<?php echo $syarat;?>">
						<input type="submit" class="btn btn-default" name="ok" value="Kirim" id="tambah" >					
					</div>
				  </div>
				</form>	  
			  </div>
			</div>
		  </div>
	</div>
</div>