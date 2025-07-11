<?php 
include '../../config/config.php';

$id=mysqli_real_escape_string($con,$_GET['id']);
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$username = mysqli_real_escape_string($con,$_GET['admin']);

$sql1=mysqli_query($con,"select * from pembiayaan_anggota a inner join anggota b on a.id_anggota = b.id_anggota inner join produk_bmt c on a.id_produk = c.id_produk where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data1=mysqli_fetch_array($sql1);

$sql=mysqli_query($con,"select * from tr_pembiayaan_anggota a inner join pembiayaan_anggota b on a.id_pembiayaan = b.id_pembiayaan inner join anggota c on b.id_anggota = c.id_anggota inner join produk_bmt d on b.id_produk = d.id_produk where a.id_tr_pembiayaan = '$id'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);

$admin=mysqli_query($con,"select * from admin where username = '$username' ") or die (mysqli_error($con));
$dataadmin = mysqli_fetch_array($admin);

$sql2=mysqli_query($con,"select SUM(setor_bayar) AS setor_bayar from tr_pembiayaan_anggota WHERE id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
$setor_bayar = $data2['setor_bayar'];
$sisa = $data['total_bayar'] - $setor_bayar;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Datatables CSS -->
	<link href="../../assets/js/plugins/dataTables.bootstrap.min.js" rel="stylesheet">
	<style>
		#footer{
			margin-bottom : 0px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h4>Kwitansi Bukti Setoran Pembiayaan <br><?php echo $data['nama_produk'] ?></h4>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?php echo $data['nama_lengkap'] ?></td>
					</tr>
					<tr>
						<td>Jenis Pembiayaan</td>
						<td>:</td>
						<td><?php echo $data['nama_produk'] ?></td>
					</tr>
					<tr>
						<td>Jumlah Bayar</td>
						<td>:</td>
						<td><?php echo 'Rp.'. number_format($data['setor_bayar'],3) ?></td>
					</tr>
					<tr>
						<td>Tgl Setor</td>
						<td>:</td>
						<td><?php echo date('d-m-Y',strtotime($data['tgl_bayar'])) ?></td>
					</tr>
					<tr>
						<td>Setoran Bulan</td>
						<td>:</td>
						<td>
							<?php 
							$tgl_bayar = date('M',strtotime($data['tgl_bayar']));
							if($tgl_bayar === 'Jan' ) {
								$tanggal = 'Januari';
							} elseif($tgl_bayar === 'Feb') {
								$tanggal = 'Februari';
							} elseif($tgl_bayar === 'Mar') {
								$tanggal = 'Maret';
							} elseif($tgl_bayar === 'Apr') {
								$tanggal = 'April';
							} elseif($tgl_bayar === 'May') {
								$tanggal = 'Mei'; 
							} elseif($tgl_bayar === 'Jun') {
								$tanggal = 'Juni';
							} elseif($tgl_bayar === 'Jul') {
								$tanggal = 'Juli';
							} elseif($tgl_bayar === 'Aug') {
								$tanggal = 'Agustus';
							} elseif($tgl_bayar === 'Sep') {
								$tanggal = 'September';
							} elseif($tgl_bayar === 'Oct') {
								$tanggal = 'Oktober';
							} elseif($tgl_bayar === 'Nov') {
								$tanggal = 'November';
							} elseif($tgl_bayar === 'Dec') {
								$tanggal = 'Desembar';
							}
							?>  
							<?php echo $tanggal ?>  <?php echo date('Y',strtotime($data['tgl_bayar'])) ?>	
							
						</td>
					</tr>
					<tr>
						<td>Jumlah Pembiayaan</td>    
						<td>:</td>                                    
						<td><?php echo 'Rp. '.number_format($data['jumlah_pembiayaan'],3) ?></td>                                        
					</tr>
					<tr>
						<td>Sisa</td>
						<td>:</td>
						<td><?php echo 'Rp.'. number_format($sisa, 3) ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				Palembang, <?php echo date('d-m-Y',strtotime($data['tgl_bayar'])) ?>
				<br><br><br><br><br>


				


				<b><?php echo $dataadmin['nama_admin'] ?></b><br>
				<?php echo $dataadmin['level_admin'] ?> BMT
			</div>            
		</div>
	</div>



	<script>
		window.print()
	</script>
</body>
</html>