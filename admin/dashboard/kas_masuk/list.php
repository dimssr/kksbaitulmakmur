<h3><i class="fa fa-angle-right"></i> Kas Masuk Kopsyah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
      <?php if($_SESSION['level_admin']!="Kepala") { ?>
			<a href="?page=kas_masuk&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
      <?php }elseif ($_SESSION['level_admin']=="Kepala"){ ?>
      <div class="pull-right" style="margin-right: 5px">
          <a href="javascript:void(0)" onclick="$('#ubah_alamat').modal()" class="btn btn-primary btn-xs" title="Laporan Keuangan">Laporan Pemasukan</a><br>
      </div>
      <?php } ?>
          <h4><i class="fa fa-angle-right"></i> Data Kas Masuk</h4>          
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
                  $sql_kas_masuk = mysqli_query($con,"SELECT * FROM kas_bmt WHERE jenis_kas ='Masuk' ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_kas_masuk)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['keterangan'] ?></td>
                      <td><?php echo date('d-m-Y',strtotime($data['tgl_transaksi'])) ?></td>                      
                      <td class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_masuk'],3) ?></td>
                      <!--<td>
                      <a class="btn btn-warning btn-xs" href="?page=kas_masuk&action=edit&id_kas_bmt=<?php echo $data['id_kas_bmt'];?>" title="Edit Data">Edit</a> 
                      	<a class="btn btn-danger btn-xs" href="?page=kas_masuk&action=hapus&id_kas_bmt=<?php echo $data['id_kas_bmt'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a>
                      </td>-->
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
                    $sql_total = mysqli_query($con,"SELECT SUM(jumlah_masuk) AS jumlah_masuk FROM kas_bmt WHERE jenis_kas ='Masuk' ") or die (mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_total)){
                    ?>
                  <tr>
                      <th >Total Kas Masuk</th>
                      <th class="text-right"><?php echo 'Rp. '.number_format($data['jumlah_masuk'],3)  ?></th>
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
          <h4 class="modal-title">Laporan Pemasukkan</h4>
          </div>
          <div class="modal-body" style="height:400px;overflow:auto">
            <form action="<?php echo base_url() ?>/dashboard/kas_masuk/laporan_pemasukkan.php" target="_blank" class="form-group" method="post">
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
          <a href="<?php echo base_url() ?>/dashboard/kas_masuk/laporan_pemasukkan_all.php" target="_blank" class="btn btn-primary" title="Cetak Semua">Cetak Semua</a><br>
          </div>
        </div>
      </div>
    </div>

</div>