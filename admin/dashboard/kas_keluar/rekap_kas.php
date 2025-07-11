<?php 
$sql1=mysqli_query($con,"select SUM(jumlah_masuk) AS jumlah_masuk from kas_bmt") or die (mysqli_error($con));
$data1=mysqli_fetch_array($sql1);
$jumlah_masuk = $data1['jumlah_masuk'];

$sql2=mysqli_query($con,"select SUM(jumlah_keluar) AS jumlah_keluar from kas_bmt") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
$jumlah_keluar = $data2['jumlah_keluar'];

$saldo_akhir = $jumlah_masuk - $jumlah_keluar;

?>
<h3><i class="fa fa-angle-right"></i> Rekap Kas BMT</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Data Rekap Kas BMT</h4>          
              <section id="unseen">
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
                  </tbody>
              </table>
             
              </section>
      </div><!-- /content-panel -->

	</div>
</div>		

<div class="row mt">
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