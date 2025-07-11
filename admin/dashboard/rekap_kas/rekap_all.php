<?php 
include_once('../../config/config.php');

$sqlMax = mysqli_query($con, "SELECT MIN(tgl_transaksi) as tgl_awal FROM kas_bmt") or die (mysqli_error($con));
$data = mysqli_fetch_array($sqlMax);

$sqlMin = mysqli_query($con, "SELECT MAX(tgl_transaksi) as tgl_akhir FROM kas_bmt") or die (mysqli_error($con));
$data1 = mysqli_fetch_array($sqlMin);

$tgl1 = $data['tgl_awal'];
$tglawal= date('d F Y', strtotime($tgl1));

$tgl2 = $data1['tgl_akhir'];
$tglakhir= date('d F Y', strtotime($tgl2));

$sql1=mysqli_query($con,"select SUM(jumlah_masuk) AS jumlah_masuk from kas_bmt ") or die (mysqli_error($con));
$data1=mysqli_fetch_array($sql1);
$jumlah_masuk = $data1['jumlah_masuk'];

$sql2=mysqli_query($con,"select SUM(jumlah_keluar) AS jumlah_keluar from kas_bmt ") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
$jumlah_keluar = $data2['jumlah_keluar'];

$saldo_akhir = $jumlah_masuk - $jumlah_keluar;
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
		<h3 align="center">Laporan Rekap KAS<br>
		<p align="center"><?php echo $tglawal ?> s/d <?php echo $tglakhir ?></p>
		<br><br>
	</div>
	<div class="row">
	    <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
  	                  <th>No</th>
                      <th>Penjelasan</th>
                      <th>Tgl Transaksi</th>
                      <th class="text-right">Jumlah Masuk</th>
                      <th class="text-right">Jumlah Keluar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_kas = mysqli_query($con,"SELECT * FROM kas_bmt ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_kas)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['keterangan'] ?></td>
                      <td><?php echo date('d-m-Y',strtotime($data['tgl_transaksi'])) ?></td>                      
                      <td class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_masuk'],3) ?></td>
                      <td class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_keluar'],3) ?></td>
                      
                  </tr>
                  <?php 
                  }
                  ?>

                  <tr>
                    <td colspan="3" class="text-center"><strong>Total</strong></td>
                    <td class="text-right"><strong><?php echo 'Rp. '.number_format($jumlah_masuk,3) ?></strong></td>
                    <td class="text-right"><strong><?php echo 'Rp. '.number_format($jumlah_keluar,3) ?></strong></td>
                  </tr>
                   <tr>
		                      <td class="text-center" colspan="3"><strong>Saldo Sementara</strong></td>
		                      <td class="text-center" colspan="2"><strong><?php echo 'Rp. '.number_format($saldo_akhir,3)  ?></strong></td>
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


