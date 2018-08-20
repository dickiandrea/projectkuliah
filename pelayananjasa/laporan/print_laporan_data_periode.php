<?php require_once "../../pusatdata/core/init-print.php";

$jenis = Input::get('print');
$tanggal = Input::get('daterange');
$tanggal = explode("-", $tanggal);

$_awal = explode("/", $tanggal[0]);
$tanggal_awal = rtrim($_awal[2]," ")."-".$_awal[0]."-".$_awal[1];

$_akhir = explode("/", $tanggal[1]);
$tanggal_akhir = rtrim($_akhir[2]," ")."-".ltrim($_akhir[0]," ")."-".$_akhir[1];

if($jenis == "kimia"){	
	header("location:print_laporan_kimia_periode.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "fisika"){
	header("location:print_laporan_fisika_periode.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "biologi"){
	header("location:print_laporan_biologi_periode.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "mineralogi"){
	header("location:print_laporan_meneralogi_periode.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "rekaponprogres"){
	header("location:print_laporan_on_progres.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "rekaponpengambilan"){
	header("location:print_laporan_on_pengambilan.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}else if($jenis == "rekaponselesai"){
	header("location:print_laporan_on_selesai.php?awal=$tanggal_awal&akhir=$tanggal_akhir");
}

?>