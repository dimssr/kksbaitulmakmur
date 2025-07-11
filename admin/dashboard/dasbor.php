<?php 
$jml_anggota = mysqli_num_rows(mysqli_query($con, "select * from anggota"));
$jml_nasabah= mysqli_num_rows(mysqli_query($con, "select * from nasabah"));
$sql_masuk = mysqli_query($con,"SELECT SUM(jumlah_masuk) AS jumlah_masuk FROM kas_bmt WHERE jenis_kas ='Masuk' ") or die (mysqli_error($con));
$data = mysqli_fetch_array($sql_masuk);
$jumlah_masuk = $data['jumlah_masuk'];

$sql_keluar = mysqli_query($con,"SELECT SUM(jumlah_keluar) AS jumlah_keluar FROM kas_bmt WHERE jenis_kas ='Keluar' ") or die (mysqli_error($con));
$data = mysqli_fetch_array($sql_keluar);
$jumlah_keluar = $data['jumlah_keluar'];
$saldo_akhir = $jumlah_masuk - $jumlah_keluar;

$sql_wajib = mysqli_query($con,"SELECT SUM(simpanan_anggota.jumlah) AS jumlah_wajib, produk_bmt.nama_produk FROM simpanan_anggota INNER JOIN produk_bmt ON simpanan_anggota.id_produk = produk_bmt.id_produk  WHERE simpanan_anggota.id_produk = 7 ") or die (mysqli_error($con));
$data_wajib = mysqli_fetch_array($sql_wajib);
$jumlah_wajib = $data_wajib['jumlah_wajib'];

$sql_pokok = mysqli_query($con,"SELECT SUM(jumlah_pokok) AS jumlah_pokok FROM simpanan_pokok ") or die (mysqli_error($con));
$data_pokok = mysqli_fetch_array($sql_pokok);
$jumlah_pokok = $data_pokok['jumlah_pokok'];

?>
<h3><i class="fa fa-angle-right"></i> Halaman Dasbor</h3>
<div class="row mt">
	<div class="col-lg-12">
		<p>Selamat Datang <strong><?php echo $_SESSION['nama_admin'] ?></strong></p>
	</div>
</div>
<div class="row mt">
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-info" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-users"></i> Anggota<br><strong><?php echo $jml_anggota ?></strong> </h3>
			</div>	
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-warning" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-users"></i> Nasabah <br><strong><?php echo $jml_nasabah ?></strong></h3>
			</div>	
		</div>
	</div>
</div>
<div class="row mt">
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-success" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-download"></i> Kas Masuk <br><strong>Rp. <?php echo number_format($jumlah_masuk,3) ?></strong> </h3>
			</div>	
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-danger" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-upload"></i> Kas Keluar <br><strong>Rp. <?php echo number_format($jumlah_keluar,3) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>

<div class="row mt">
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert" style="width: 100% !important; background-color: blue; color: white">
				<h3 class="text-center"><i class="fa fa-money"></i> Simpanan Pokok <br><strong>Rp. <?php echo number_format($jumlah_pokok,3) ?></strong> </h3>
			</div>	
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert" style="width: 100% !important; background-color: coral; color: white">
				<h3 class="text-center"><i class="fa fa-money"></i> Simpanan Wajib <br><strong>Rp. <?php echo number_format($jumlah_wajib,3) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>

<div class="row mt">
	<div align="center">
		<div class="col-lg-12">		
			<div class="alert alert-info" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-money"></i> Saldo Sementara <br><strong>Rp. <?php echo number_format($saldo_akhir,3) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>
