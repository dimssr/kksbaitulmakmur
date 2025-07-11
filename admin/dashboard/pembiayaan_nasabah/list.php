<h3><i class="fa fa-angle-right"></i> Pembiayaan Nasabah</h3>
<div class="row mt">
  <div class="col-lg-12">
    <div class="content-panel">
      <?php if($_SESSION['level_admin']!="Kepala") { ?> 
      <a href="?page=pembiayaan_nasabah&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Buat Baru</a>
      <?php } ?>
       <a href="?page=pembiayaan_nasabah&action=cek_blm_lunas" title="Cek" class="btn btn-success" style="margin-left: 5px">Cek yang Belum Lunas</a>
          <h4><i class="fa fa-angle-right"></i> Data Pembiayaan Nasabah</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Pembiayaan <br>Id Nasabah</th>
                    <th>Nama</th>
                    <th width="35%">Jenis Pembiayaan</th>
                    <th class="text-right" width="18%">Jlh Pembiayaan</th>
                    <th>Jangka Waktu</th>
                    <th width="18%" class="text-right">Bayar Per Bulan</th>
                    <th>Tgl Pembiayaan<br>Tgl Selesai</th>
                    <th width="18%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                  
                  $sql_pembiayaan_nasabah = mysqli_query($con,"SELECT * FROM pembiayaan_nasabah INNER JOIN nasabah on pembiayaan_nasabah.id_nasabah = nasabah.id_nasabah INNER JOIN produk_bmt on pembiayaan_nasabah.id_produk = produk_bmt.id_produk ORDER BY id_pembiayaan DESC") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_pembiayaan_nasabah)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_pembiayaan'] ?><br><?php echo $data['id_nasabah'] ?></td>
                      <td><?php echo $data['nm_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td align="right"><strong><?php echo 'Rp. '.number_format($data['jumlah_pembiayaan'],3) ?></strong></td>
                      <td><?php echo $data['jangka_waktu'] ?> Bulan</td>
                      <td><strong><?php echo 'Rp. '.number_format($data['bayar_perbulan'],3) ?></strong></td>
                      <td><?php echo date('d-m-Y', strtotime($data['tgl_pembiayaan'])) ?><br><?php echo date('d-m-Y', strtotime($data['tgl_selesai'])) ?></td>
                      <td>
                        <a class="btn btn-warning btn-xs" href="?page=pembiayaan_nasabah&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a>                        
                        <?php if($_SESSION['level_admin']!="Kepala") { ?> 
                        <?php if($data['status_pembayaran']=="Lunas") { ?>
                        <button class="btn btn-success btn-xs">Lunas</button>
                        <?php } else { ?>
                        <a class="btn btn-primary btn-xs" href="?page=pembiayaan_nasabah&action=setoran&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Tambah">Setor</a>

                        <?php } }?>
                        </td>
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