<?php 
session_start();
if(!isset($_SESSION['user1']) && !isset($_SESSION['pass1'])){
	?>
	<script>document.location='index.php?view=login';alert('Akses ditolak! Anda harus login dulu')</script>
	<?php
}
else
{
include "koneksi.php";
$username = $_SESSION['user1'];
$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));
$uname = $data['username'];
?>

<html>
<head>
<meta charset="utf-8">
<title>SIMPEL BALITTANAH </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- ICON TITLE -->
	<link rel="icon" href="img/s.png"/>
	
<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

<script src="jquery-1.3.2.min.js"></script>
<script>
 $(document).ready(function() {
 	 $("#responsecontainer").load("response.php");
   var refreshId = setInterval(function() 
      {
      $("#responsecontainer").load('response.php?randval='+ Math.random());
      }, 1000);
                               });
</script>

</head>
<body>

<div id="wrapper">
	<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li>SISTEM INFORMASI PELAYANAN JASA <br>
								LABORATORIUM PENGUJI BALAI PENELITIAN TANAH</li>
							</ul>
						</div>
						<div class="col-md-6">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Masukkan kata yang akan dicari ..." type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<!-- span class="sb-icon-search" title="Click to start searching"></span -->
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/simpel2.png" alt="" width="230" height="51" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
							<a href="?view=welcome">HALAMAN AWAL</a>
						</li>
						
						<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
							PENGUJIAN
							<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="?view=pengujian">TAMBAH PENGUJIAN</a></li>
								<li><a href="?view=lihat-tagihan">DAFTAR PENGUJIAN SAYA</a></li>
								<li><a href="?view=lihat-progress">TRACKING PROGRES</a></li>
                            </ul>
                        </li>
						
						<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
							TRANSAKSI
							<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="?view=chat">KIRIM PESAN</a></li>
								<li><a href="?view=transaksi">UPLOAD BUKTI PEMBAYARAN</a></li>
                            </ul>
                        </li>                       
					
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">INFORMASI <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="?view=kontak">HUBUNGI KAMI</a></li>
                                <li><a href="?view=struktur">STRUKTUR ORGANISASI</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown"><a class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">PELAYANAN <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="?view=aturan">STANDAR PELAYANAN PENGUJIAN</a></li>
								<li><a href="?view=jam-pelayanan">JAM PELAYANAN</a></li>
                                <li><a href="?view=simulasi">BIAYA / TARIF PENGUJIAN</a></li>
                                <li><a href="?view=fasilitas">FASILITAS PELAYANAN</a></li>
                                <li><a href="?view=kompetensi">JUMLAH PELAKSANA</a></li>
                                <li><a href="?view=jaminan">JAMINAN PELAYANAN</a></li>
                                <li><a href="?view=pengaduan">PENANGANAN PENGADUAN</a></li>
                            </ul>
						</li>
						
						<li class="dropdown">
                            <a class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">PROFIL SAYA <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="?view=profile">LIHAT PROFILE</a></li>
								<li><a href="logout.php" onClick="return confirm('Anda yakin ingin keluar?');">LOGOUT</a></li>
                            </ul>
                        </li>                        
                        
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	
	<section id="content">
		<?php include "openpage.php"; ?>
	</section>
	
	<!-- FOOTER BAWAH -->
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Alamat Lengkap</h4>
					<address>
					<strong>Jl. Tentara Pelajar</strong><br>
					 No. 12 Cimanggu, Bogor<Br>
					 Indonesia, 16114<br>
					 </address>
					<p>
						<i class="icon-phone"></i> Telepon :(0251) 833-6757 <br>
						<i class="icon-phone"></i> Fax : (0251) 8322-933 / 8321-608 <br><br>
						<i class="icon-phone"></i> Email : <br>
						<i class="icon-envelope-alt"></i> balittanah@litbang.pertanian.go.id <br>
						<i class="icon-envelope-alt"></i>pelayananbalittanah@gmail.com
					</p>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Informasi Publik</h4>
					<ul class="link-list">
						<li><a href="?view=kontak">HUBUNGI KAMI</a></li>
						<li><a href="?view=struktur">STRUKTUR ORGANISASI</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="widget">
					<h4>Informasi Pelayanan</h4>
					<ul class="link-list">
						<li><a href="?view=aturan">STANDAR PELAYANAN PENGUJIAN</a></li>
						<li><a href="?view=jam-pelayanan">JAM PELAYANAN</a></li>
                        <li><a href="?view=simulasi">BIAYA / TARIF PENGUJIAN</a></li>
                        <li><a href="?view=fasilitas">FASILITAS PELAYANAN</a></li>
                        <li><a href="?view=kompetensi">JUMLAH PELAKSANA</a></li>
                        <li><a href="?view=jaminan">JAMINAN PELAYANAN</a></li>
                        <li><a href="?view=pengaduan">PENANGANAN PENGADUAN</a></li>
						<hr>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Moto Balittanah</h4>
					<p>"KAMI UTAMAKAN PROFESIONALISME UNTUK PELAYANAN TERBAIK"</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Sailor Theme - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
	
</body>
</html>

<?php } ?>