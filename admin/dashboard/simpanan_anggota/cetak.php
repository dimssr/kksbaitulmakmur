<?php

include '../../config/config.php';

$id_anggota=mysqli_real_escape_string($con,$_GET['id_anggota']);
$sql=mysqli_query($con,"select SUM(simpanan_anggota.jumlah) AS jumlah, anggota.id_anggota AS id_anggota, anggota.nama_lengkap AS nama_lengkap from simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota WHERE simpanan_anggota.id_anggota = '$id_anggota' AND simpanan_anggota.id_produk = '7' ") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);
$total_simpanan = $data['jumlah'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Simpanan Wajib <?php echo $data['nama_lengkap']  ?></title>
	<!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h3><i class="fa fa-angle-right"></i> Detail Simpanan Wajib</h3>

	<!-- BASIC FORM ELELEMNTS -->
	<hr>
	<div class="row mt">
		<div class="col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Anggota</th>
						<th>Nama</th>
						<th>Priode Bulan</th>
						<th>Tgl Setor</th>
						<th class="text-right">Nominal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$sql=mysqli_query($con,"select * from simpanan_anggota a inner join anggota b on a.id_anggota = b.id_anggota  where a.id_anggota = '$id_anggota' AND a.id_produk = '7' ORDER BY Tglsetor DESC ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql)){

						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data['id_anggota'] ?></td>
							<td><?php echo $data['nama_lengkap'] ?></td>
							<td><?php echo $data['periode_bulan'] ?></td>
							<td><?php echo date('d-m-Y', strtotime($data['Tglsetor'])) ?></td>
							<td class="text-right"><?php echo 'Rp.'. number_format($data['jumlah']) ?></td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="5" align="center"><strong>Total</strong></td>
						<td class="text-right"><strong><?php echo 'Rp.'. number_format($total_simpanan) ?></strong></td>
					</tr>
				</tbody>
			</table>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->

	<script>
		window.print()
	</script>
</body>
</html>