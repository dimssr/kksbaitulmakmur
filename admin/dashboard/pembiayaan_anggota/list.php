<h3><i class="fa fa-angle-right"></i> Pembiayaan Anggota</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
      <?php if($_SESSION['level_admin']!="Kepala") { ?> 
			<a href="?page=pembiayaan_anggota&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Buat Baru</a>
      <?php } ?>
       <a href="?page=pembiayaan_anggota&action=cek_blm_lunas" title="Cek" class="btn btn-success" style="margin-left: 5px">Cek yang Belum Lunas</a>
          <h4><i class="fa fa-angle-right"></i> Data Pembiayaan Anggota</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>Id Pembiayaan <br>Id Anggota</th>
                    <th>Nama</th>
                    <th width="35%">Jenis Pembiayaan</th>
                    <th class="text-right" width="18%">Jlh Pembiayaan<br>Total Bayar</th>
                    <th>Jangka Waktu</th>
                    <th width="18%" class="text-right">Bayar Per Bulan</th>
                    <th>Laba</th>
                    <th>Tgl Pembiayaan<br>Tgl Selesai</th>
                    <th width="18%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                  
                  $sql_pembiayaan_anggota = mysqli_query($con,"SELECT * FROM pembiayaan_anggota INNER JOIN anggota on pembiayaan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt on pembiayaan_anggota.id_produk = produk_bmt.id_produk ORDER BY pembiayaan_anggota.id_pembiayaan DESC") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_pembiayaan_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_pembiayaan'] ?><br><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td align="right"><strong><?php echo 'Rp. '.number_format($data['jumlah_pembiayaan'],3) ?>
                        <br>
                        <?php echo 'Rp. '.number_format($data['total_bayar'],3) ?>
                      </strong></td>

                      <td><?php echo $data['jangka_waktu'] ?> Bulan</td>

                      <td><strong><?php echo 'Rp. '.number_format($data['bayar_perbulan'],3) ?></strong></td>

                      <?php if($data['status_pembiayaan'] == "Lunas") { ?>
                      <td>
                        <?php $laba = $data['total_bayar'] - $data['jumlah_pembiayaan'] ?>
                        <?php echo 'Rp. ' .number_format($laba,3) ?>
                      </td>
                    <?php } else { ?>
                      <td>
                        0 
                      </td>
                    <?php } ?>
                    
                      <td><?php echo date('d-m-Y', strtotime($data['tgl_pembiayaan'])) ?><br><?php echo date('d-m-Y', strtotime($data['tgl_selesai'])) ?></td>
                      <td>
                        <a class="btn btn-warning btn-xs" href="?page=pembiayaan_anggota&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a>                        
                        <?php if($_SESSION['level_admin']!="Kepala") { ?> 
                        <?php if($data['status_pembiayaan']=="Lunas") { ?>
                        <button class="btn btn-success btn-xs">Lunas</button>
                        <?php } else { ?>
                        <a class="btn btn-primary btn-xs" href="?page=pembiayaan_anggota&action=setoran&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Tambah">Setor</a>

                        <?php } }?>
                        </td>
                  </tr>
                  <?php 
                  }
                  ?>
                  </tbody>
              </table>
              </section>

             <!-- <div class="row">
                <table class="table">
                  <tr>
                    <td>Jenis Pembiayaan</td>
                    <td>Total</td>
                    <td>Total Bayar</td>
                    <td>Status</td>
                  </tr>
                  <?php 
                  $no = 1;                  
                  $sql_pembiayaan_anggota = mysqli_query($con,"SELECT produk_bmt.nama_produk, SUM(jumlah_pembiayaan) AS total, SUM(total_bayar) AS total_bayar, pembiayaan_anggota.status_pembiayaan FROM pembiayaan_anggota INNER JOIN produk_bmt on pembiayaan_anggota.id_produk = produk_bmt.id_produk GROUP BY produk_bmt.nama_produk") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_pembiayaan_anggota)){
                  ?>
                  <tr>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['total'] ?></td>
                    <td><?php echo $data['total_bayar'] ?></td>
                    <td><?php echo $data['status_pembiayaan'] ?></td>
                  </tr>
                <?php } ?>
                </table>  
              </div>
      </div>  -->
  
      <!-- /content-panel -->

	</div>
</div>		