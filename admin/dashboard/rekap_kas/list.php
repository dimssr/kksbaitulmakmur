<?php 
$sql1=mysqli_query($con,"select SUM(jumlah_masuk) AS jumlah_masuk from kas_bmt") or die (mysqli_error($con));
$data1=mysqli_fetch_array($sql1);
$jumlah_masuk = $data1['jumlah_masuk'];

$sql2=mysqli_query($con,"select SUM(jumlah_keluar) AS jumlah_keluar from kas_bmt") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
$jumlah_keluar = $data2['jumlah_keluar'];

$saldo_akhir = $jumlah_masuk - $jumlah_keluar;

?>
<h3><i class="fa fa-angle-right"></i> Rekap Kas Kopsyah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
      <?php if ($_SESSION['level_admin']=="Kepala"){ ?>
          <div class="pull-right" style="margin-right: 5px">
              <a href="javascript:void(0)" onclick="$('#ubah_alamat').modal()" class="btn btn-primary btn-xs" title="Laporan Keuangan">Cetak Rekap Kas</a><br>
          </div>
          <?php } ?>   
          <h4><i class="fa fa-angle-right"></i> Data Rekap Kas Kopsyah</h4> 
                
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
                  <tr>
                          <td class="text-center" colspan="3"><strong>Saldo Sementara</strong></td>
                          <td class="text-center" colspan="2"><strong><?php echo 'Rp. '.number_format($saldo_akhir,3)  ?></strong></td>
                      </tr>
                  </tbody>
              </table>
             
              </section>
      </div><!-- /content-panel -->

	</div>
</div>		

<!--<div class="row mt">
  <div class="col-lg-12">
    <div class="content-panel">
              
              <section id="unseen">
                <table class="table table-striped">
                  <thead>                    
                  <tr>
                      <th class="text-center">Saldo Akhir</th>
                      <th class="text-center"><?php echo 'Rp. '.number_format($saldo_akhir)  ?></th>
                  </tr>
                  </thead>
                  
              </table>
             
              </section>
      </div>
  </div>
</div>-->

<div id="ubah_alamat" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cetak Rekap Kas</h4>
          </div>
          <div class="modal-body" style="height:400px;overflow:auto">
            <form action="<?php echo base_url() ?>/dashboard/rekap_kas/rekap_bulan.php" target="_blank" class="form-group" method="post">
                <div class="form-group">
                    <label for="tgl_awal">Tgl Awal</label>
                    <input type="date" name="tgl_awal" class="form-control" autofocus required>
                </div>
                 <div class="form-group">
                    <label for="tgl_akhir">Tgl Akhir</label>
                    <input type="date" name="tgl_akhir" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="cetak" value="Cetak" class="btn btn-success">
                </div>
            </form>
            <br><br>
          <hr>
          <a href="<?php echo base_url() ?>/dashboard/rekap_kas/rekap_all.php" target="_blank" class="btn btn-primary" title="Cetak Semua">Cetak Semua</a><br>
          </div>
        </div>
      </div>
    </div>