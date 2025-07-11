<h3><i class="fa fa-angle-right"></i> Kas Keluar Kopsyah</h3>
<div class="row mt">
  <div class="col-lg-12">
    <div class="content-panel">
      <?php if($_SESSION['level_admin']!="Kepala") { ?>
      <a href="?page=kas_keluar&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
      <?php }elseif ($_SESSION['level_admin']=="Kepala"){ ?>
      <div class="pull-right" style="margin-right: 5px">
          <a href="javascript:void(0)" onclick="$('#ubah_alamat').modal()" class="btn btn-primary btn-xs" title="Laporan Keuangan">Laporan Pengeluaran</a><br>
      </div>
      <?php } ?>
          <h4><i class="fa fa-angle-right"></i> Data Kas Keluar</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Penjelasan</th>
                      <th>Tgl Transaksi</th>
                      <th class="text-right">Jumlah</th>
                      <!-- <th width="10%">Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_kas_keluar = mysqli_query($con,"SELECT * FROM kas_bmt WHERE jenis_kas ='Keluar' ") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_kas_keluar)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['keterangan'] ?></td>
                      <td><?php echo date('d-m-Y',strtotime($data['tgl_transaksi'])) ?></td>                      
                      <td class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_keluar'],3) ?></td>                      
                  </tr>
                  <?php 
                  }
                  ?>
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
                <table class="table table-striped" id="Datatables">
                  <thead>
                     <?php 
                    $sql_total = mysqli_query($con,"SELECT SUM(jumlah_keluar) AS jumlah_keluar FROM kas_bmt WHERE jenis_kas ='Keluar' ") or die (mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_total)){
                    ?>
                  <tr>
                      <th >Total Kas Keluar</th>
                      <th class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_keluar'],3)  ?></th>
                  </tr>
                <?php } ?>
                  </thead>
                  
              </table>
             
              </section>
      </div><!-- /content-panel -->

  </div>

  <div id="ubah_alamat" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Laporan Pengeluaran</h4>
          </div>
          <div class="modal-body" style="height:400px;overflow:auto">
            <form action="<?php echo base_url() ?>/dashboard/kas_keluar/laporan_pengeluaran.php" target="_blank" class="form-group" method="post">
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
          <a href="<?php echo base_url() ?>/dashboard/kas_keluar/laporan_pengeluaran_all.php" target="_blank" class="btn btn-primary" title="Cetak Semua">Cetak Semua</a><br>
          </div>
        </div>
      </div>
    </div>
</div>