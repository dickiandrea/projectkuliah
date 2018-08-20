<?php
$host ="localhost"; 
$user = "root"; 
$password = ""; 
$database= "simpel"; 
 
$connect = mysqli_connect($host,$user,$password); 
  if (!$connect) 
  { 
    echo "acces denied"; 
  } 
  
// memilih databaase pda server 
mysqli_select_db($connect, $database)  
or die ( "Tidak ada database "); 
error_reporting();
?>