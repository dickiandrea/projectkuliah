<?php
require_once "validasi_login.php";
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link rel="icon" type="../pusatdata/image/png" href="../pusatdata/images/balitbang.png">
  <title>SIMLAB</title>

  <!-- ========== Css Files ========== -->
  <link href="../pusatdata/css/root.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <!-- <div class="loading"><img src="../pusatdata/img/loading.gif" alt="loading-img"></div> -->
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo">LAB KIMIA</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->
    <!-- Start tombol logout --> 
	
        <div class="panel-body">
          <a id="button5" href="#" class="sidepanel-open-button" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-power-off"></i>
          </a>
          <script>
            document.querySelector('#button5').onclick = function(){
              swal({
                title: "Anda Yakin Keluar?",
                type: "warning", 
                showCancelButton: true, 
                confirmButtonColor: "#DD6B55", 
                confirmButtonText: "Keluar", 
                closeOnConfirm: false 
              },
              function(){
                  window.location = "../adminlab/logout.php"; 
              });
            };
          </script>
        </div>     
    <!-- End tombol logout -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
