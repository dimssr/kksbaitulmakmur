<?php 
include_once('../../config/config.php');

$priode_bulan = trim(mysqli_real_escape_string($con, @$_POST['priode_bulan']));
$priode_tahun = trim(mysqli_real_escape_string($con, @$_POST['priode_tahun']));

$sql_simpanan_anggota = mysqli_query($con,"SELECT * FROM simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt ON simpanan_anggota.id_produk = produk_bmt.id_produk  WHERE produk_bmt.nama_produk = 'Simpanan Pokok' AND  simpanan_anggota.periode_bulan ='$priode_bulan' AND simpanan_anggota.periode_tahun = '$priode_tahun' ORDER BY simpanan_anggota.Tglsetor DESC  ") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql_simpanan_anggota);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simpanan Pokok Anggota</title>
	<!-- Bootstrap core CSS -->
	<link href="../../assets/css/bootstrap.css" rel="stylesheet">
	<!-- Datatables CSS -->
	<link href="../../assets/css/datatables.min.css" rel="stylesheet">
	<!--external css-->
	<link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />        
	<!-- Custom styles for this template -->
	<link href="../../assets/css/style.css" rel="stylesheet">
	<link href="../../assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
	<h4><i class="fa fa-angle-right"></i> Data Simpanan Pokok Anggota</h4>
	<table class="table table-bordered table-striped" id="Datatables">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Anggota</th>
				<th>Nama</th>
				<th>Tgl</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;                
			$sql_simpanan_anggota = mysqli_query($con,"SELECT * FROM simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt ON simpanan_anggota.id_produk = produk_bmt.id_produk WHERE produk_bmt.id_produk = 7 AND  simpanan_anggota.periode_bulan ='$priode_bulan' AND simpanan_anggota.periode_tahun = '$priode_tahun' ORDER BY simpanan_anggota.Tglsetor DESC  ") or die (mysqli_error($con));
			while($data = mysqli_fetch_array($sql_simpanan_anggota)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_anggota'] ?></td>
					<td><?php echo $data['nama_lengkap'] ?></td>
					<td><?php echo date('d-M-Y', strtotime($data['Tglsetor'])) ?></td>
					<td align="right"><?php echo 'Rp. '.number_format($data['jumlah']) ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<script>
		window.print()
	</script>
</body>
</html>