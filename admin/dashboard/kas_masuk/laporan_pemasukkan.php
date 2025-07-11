<?php 
include_once('../../config/config.php');

$tgl_awal = trim(mysqli_real_escape_string($con, @$_POST['tgl_awal']));
$tgl_akhir = trim(mysqli_real_escape_string($con, @$_POST['tgl_akhir']));
$tglawal= date('d F Y', strtotime($tgl_awal));
$tglakhir= date('d F Y', strtotime($tgl_akhir));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Datatables CSS -->
    <link href="../../assets/css/datatables.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />        
    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet">
	<style>
	    #footer{
	        margin-bottom : 0px;
	    }
	</style>
</head>
<body>
<div class="container">	
	<hr style="border:0; border-top: 3px double #8c8c8c;">
	<div class="row">
		<h3 align="center">Laporan Pemasukan<br>
		<p align="center"><?php echo $tglawal ?> s/d <?php echo $tglakhir ?></p>
		<br><br>
	</div>
	<div class="row">
	    <table class="table table-hover" border="">
					<thead>
						<tr>
							<th>No</th>
							<th>Keterangan</th>
							<th>Tgl Pembayaran</th>
							<th>Nominal</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						$sql1 = mysqli_query($con, "SELECT * FROM kas_bmt WHERE tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir' and jenis_kas = 'Masuk' ORDER BY tgl_transaksi ASC") or die (mysqli_error($con));
							while($data = mysqli_fetch_array($sql1)){ 
							$tgl_transaksi = $data['tgl_transaksi'];
                            $tglbayar= date('d F Y', strtotime($tgl_transaksi));
							?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$data['keterangan'];?></td>
								<td><?=$tglbayar;?></td>
								<td><?='Rp.'.number_format($data['jumlah_masuk'],0,',','.') ?></td>
							</tr>
							<?php
							}
						?>
						<tr>
						    <td></td>
							<td colspan="2"><strong>Total Pemasukan</strong></td>
							
							<?php 
								$sql = mysqli_query($con, "SELECT SUM(jumlah_masuk) as Total FROM kas_bmt WHERE tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir' and jenis_kas = 'Masuk'") or die (mysqli_error($con));
								$data = mysqli_fetch_array($sql)
							?>
							<td><strong><?php echo 'Rp.'.number_format($data['Total'],0,',','.') ?></strong></td>
						</tr>
					</tbody>
				</table>
	</div>		
	<hr>
	<div class="row">
		
	</div>
	<div class="row footer">
		<hr style="border: 0; border-top: 1px solid #8c8c8c;">
	</div>
</div>

<script language="javascript">
window.print()
</script>
</body>
</html>


