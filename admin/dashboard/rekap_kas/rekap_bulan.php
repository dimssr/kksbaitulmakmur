<?php 
include_once('../../config/config.php');

$tgl_awal = trim(mysqli_real_escape_string($con, @$_POST['tgl_awal']));
$tgl_akhir = trim(mysqli_real_escape_string($con, @$_POST['tgl_akhir']));
$tglawal= date('d F Y', strtotime($tgl_awal));
$tglakhir= date('d F Y', strtotime($tgl_akhir));

$sql1=mysqli_query($con,"select SUM(jumlah_masuk) AS jumlah_masuk from kas_bmt WHERE tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'") or die (mysqli_error($con));
$data1=mysqli_fetch_array($sql1);
$jumlah_masuk = $data1['jumlah_masuk'];

$sql2=mysqli_query($con,"select SUM(jumlah_keluar) AS jumlah_keluar from kas_bmt WHERE tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'") or die (mysqli_error($con));
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
                  $sql_kas = mysqli_query($con,"SELECT * FROM kas_bmt WHERE tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'") or die (mysqli_error($con));
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
                  </tbody>
              </table>
	</div>	
	<div class="row">
		<div class="col-lg-12">
		    <div class="content-panel">
		              
		              <section id="unseen">
		                <table class="table table-striped">
		                  <thead>                    
		                  <tr>
		                      <th class="text-center">Saldo Akhir</th>
		                      <th class="text-center"><?php echo 'Rp. '.number_format($saldo_akhir,3)  ?></th>
		                  </tr>
		                  </thead>
		                  
		              </table>
		             
		              </section>
		      </div><!-- /content-panel -->
	  </div>		
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


