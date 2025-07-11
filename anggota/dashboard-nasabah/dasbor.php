<?php 
$id_nasabah = $_SESSION['id_nasabah'];
$sql_tabungan_nasabah = mysqli_query($con,"SELECT * FROM tabungan_nasabah INNER JOIN nasabah on tabungan_nasabah.id_nasabah = nasabah.id_nasabah INNER JOIN total_tabungan_nasabah ON tabungan_nasabah.rek_tabungan = total_tabungan_nasabah.rek_tabungan WHERE tabungan_nasabah.id_nasabah = '$id_nasabah' ") or die (mysqli_error($con));
$data = mysqli_fetch_array($sql_tabungan_nasabah);
$total_tabungan = $data['total'];

$sql_pembiayaan_nasabah = mysqli_query($con,"SELECT SUM(jumlah_pembiayaan) AS jumlah_pembiayaan FROM pembiayaan_nasabah INNER JOIN nasabah on pembiayaan_nasabah.id_nasabah = nasabah.id_nasabah WHERE pembiayaan_nasabah.id_nasabah = '$id_nasabah' ") or die (mysqli_error($con));
$data2 = mysqli_fetch_array($sql_pembiayaan_nasabah);
$total_pembiayaan = $data2['jumlah_pembiayaan'];

?>
<h3><i class="fa fa-angle-right"></i> Halaman Dasbor</h3>
<div class="row mt">
	<div class="col-lg-12">
		<p>Selamat Datang <strong><?php echo $_SESSION['nm_lengkap'] ?> | <?php echo $_SESSION['id_nasabah'] ?></strong></p>
	</div>
</div>
<div class="row mt">
	<div align="center">
		<div align="center">
			<div class="col-lg-6">		
				<div class="alert alert-success" style="width: 100% !important">
					<h3 class="text-center"><i class="fa fa-money"></i> Total Pembiayaan <br><strong>Rp. <?php echo number_format($total_pembiayaan) ?></strong> </h3>
				</div>	
			</div>
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-info" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-book"></i> Total Tabungan <br><strong>Rp. <?php echo number_format($total_tabungan) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>

