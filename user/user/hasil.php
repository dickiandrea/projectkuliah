<?php
include "koneksi.php";
$username = $_SESSION['user1'];

$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_array($sql) or die (mysqli_error($connect));

$kode_user = $data['kode_user'];

?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>No. Order</th>
                        <th>Nama Pengirim</th>
                        <th>Instansi</th>
                        <th>Jenis Analisis</th>
                        <th>Nomor Contoh</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        $query="select 
						
							a.tanggal_terima,
							a.contoh_tanah,
							a.kode_user,
							a.kode_order,
							a.kode_analisis,
							
							b.kode_user,
							b.nama,
							b.instansi,
							
							c.kaji_ulang,
							c.progres,
							c.nomer_contoh,
							
							d.kode_analisis,
							d.nama_analisis
							
                            from
							
							tborder as a
							
							inner join user as b
							
							inner join status as c 
							
							inner join jenis_analisis as d
							
                            where 
							
							a.kode_user=$kode_user and
							a.kode_user=b.kode_user and 
							c.kode_order=a.kode_order and
							c.kaji_ulang != '' and
							c.contoh != '' and
							c.bayar != '' and
							d.kode_analisis = a.kode_analisis
							
							order by a.kode_order asc";
							
							//var_dump($query); die();

                        $hasil=mysqli_query($connect, $query);
                        while
						($data=mysqli_fetch_array($hasil))
						{
							echo "<tr>                                                
                                <td>".$data['kode_order']."</td>
                                <td>".$data['nama']."</td>
                                <td>".$data['instansi']."</td>
                                <td>".$data['nama_analisis']."</td>
                                <td>".$data['nomer_contoh']."</td>";
							?>
                                <td>
                                    <div class="progress progress-striped active">
									
									<?php if($data['progres']<='25'){
									?>
									      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data['progres']; ?>%;">
                                          <?php echo $data['progres'];?>%
									<?php
									}
									else if($data['progres']=='50')
									{
									?>
									      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data['progres']; ?>%;">
                                          <?php echo $data['progres'];?>%
									<?php
									}
									else if($data['progres']<='99')
									{
									?>
									      <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data['progres']; ?>%;">
                                          <?php echo $data['progres'];?>%
									<?php
									}
									else
									{
									?>
									      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $data['progres']; ?>%;">
                                          <?php echo $data['progres'];?>%
									<?php
									}
									?>
                                          </div>
									</div>
                                </td>
                                </tr>
                                <?php
                            }
                        ?>
                </tbody>
            </table>
			<hr>
		<div class="col-lg-12"> 
			Data di atas merupakan tinjauan proses dari materi yang sedang diuji <br> Materi yang bisa dilakukan pengujian adalah Daftar Order yang sudah dibayar
			<h3>Keterangan</h3>
				<div class="alert alert-success">
					<strong>Selesai</strong> &nbsp; (Seluruh parameter telah selesai diuji)
				</div>
		
				<div class="alert alert-info">
					<strong>Hampir selesai</strong> &nbsp; (Pengujian tahap akhir)
				</div>
				
				<div class="alert alert-warning">
					<strong>Pertengahan</strong> &nbsp; (Setengah dari parameter telah selesai diuji)
				</div>

				<div class="alert alert-danger">
					<strong>Sedikit</strong> &nbsp; (Pengujian tahap awal)
				</div>
		</div>