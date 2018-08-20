<?php
require_once '../pusatdata/core/init.php';
error_reporting(E_ALL);
		
	   
	   if(isset($_GET['kode']))
	   {
			$syarat = $_GET['kode'];
			$kata = "select kode_analisis, nama_analisis from jenis_analisis where kode_sp='$syarat'";

		   $result = $mysqli->query($kata);
		   echo "<option>-- Pilih analisis --</option>";
		   while($data = $result->fetch_assoc())
		   {
			   $kd = $data['kode_analisis'];
			   $nm = $data['nama_analisis'];
				echo "<option value=\"$kd\">$nm</option>";
		   }   
	   }
	   else if(isset($_GET['pertanyaan'])){
		   $syarat = $_GET['pertanyaan'];
		   $kata = "select distinct kelompok from pertanyaan where kode_analisis='$syarat'";

			$result = $mysqli->query($kata);
			$hasil = $result->num_rows;
			$hitung = $hasil + 1;
			echo $hitung;

	   }else if(isset($_GET['tambah'])){

		   $kata = "select count(kode_analisis) from pertanyaan";

			$result = $mysqli->query($kata);
			$hasil = $result->fetch_array()[0];
			$hitung = $hasil + 1;
			echo $hitung;
			
	   }else if(isset($_GET['filter_sp'])){
		   $syarat = $_GET['filter_sp'];
		   $kata = "select kode_analisis, nama_analisis from jenis_analisis where kode_sp='$syarat'";

		   $result = $mysqli->query($kata);
		   echo "<option>-- Pilih analisis --</option>";
		   while($data = $result->fetch_assoc())
		   {
			   $kd = $data['kode_analisis'];
			   $nm = $data['nama_analisis'];
				echo "<option value=\"$kd\">$nm</option>";
		   }   
	   }else if(isset($_GET['filter_isi_sp'])){
		   $syarat = $_GET['filter_isi_sp'];
		   $query = "select a.kode_pertanyaan, a.kode_analisis, a.isi_pertanyaan,a.tarif, b.nama_analisis from pertanyaan as a inner join jenis_analisis as b where a.kode_analisis=b.kode_analisis and a.kode_analisis like '$syarat%'";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{
				echo "<tr>
						  <td></td>
						  <td>".$data['kode_pertanyaan']."</td>			  
						  <td>".$data['nama_analisis']."</td>			  
						  <td>".$data['isi_pertanyaan']."</td>
						  <td>Rp.".$data['tarif']."</td>
						  <td>
							<a href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=update\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
							<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=delete\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
						  </td>
					</tr>";
				}   
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }else if(isset($_GET['filter_isi_analisis'])){
		   $syarat = $_GET['filter_isi_analisis'];
		   $query = "select a.kode_pertanyaan, a.kode_analisis, a.isi_pertanyaan,a.tarif, b.nama_analisis from pertanyaan as a inner join jenis_analisis as b where a.kode_analisis=b.kode_analisis and a.kode_analisis like '%$syarat%'";				
			$result = $mysqli->query($query);
			if($result->num_rows > 0)
			{
				while($data = $result->fetch_assoc())
				{
				echo "<tr>
						  <td></td>
						  <td>".$data['kode_pertanyaan']."</td>			  
						  <td>".$data['nama_analisis']."</td>			  
						  <td>".$data['isi_pertanyaan']."</td>
						  <td>Rp.".$data['tarif']."</td>
						  <td>
							<a href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=update\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
							<a onclick=\"return confirm('Apakah anda yakin ingin menghapus ini?');\" href=\"?page=update_pertanyaan&kode_pertanyaan=".$data['kode_pertanyaan']."&set=delete\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
						  </td>
					</tr>";
				}   
			}else{
				echo "<tr><td></td><td colspan=\"5\" align=\"center\">Tidak ada data</td></tr>";
			}
			
	   }
	   
    
?>