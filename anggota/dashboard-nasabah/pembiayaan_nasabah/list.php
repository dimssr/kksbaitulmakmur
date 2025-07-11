<h3><i class="fa fa-angle-right"></i> Pembiayaan Nasabah</h3>
<div class="row mt">
	<div class="col-lg-12">
	<div class="content-panel">		
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
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                  
                  $sql_pembiayaan_nasabah = mysqli_query($con,"SELECT * FROM pembiayaan_nasabah INNER JOIN nasabah on pembiayaan_nasabah.id_nasabah = nasabah.id_nasabah") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_pembiayaan_nasabah)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_pembiayaan'] ?><br><?php echo $data['id_nasabah'] ?></td>
                      <td><?php echo $data['nm_lengkap'] ?></td>
                      <td><?php echo $data['jenis_pembiayaan'] ?></td>
                      <td align="right"><strong><?php echo 'Rp. '.number_format($data['jumlah_pembiayaan'],2) ?></strong></td>
                      <td><?php echo $data['jangka_waktu'] ?> Bulan</td>
                      <td><strong><?php echo 'Rp. '.number_format($data['bayar_perbulan']) ?></strong></td>
                      <td><?php echo date('d-m-Y', strtotime($data['tgl_pembiayaan'])) ?><br><?php echo date('d-m-Y', strtotime($data['tgl_selesai'])) ?></td>
                      <td>
                        <?php if($data['status_pembayaran'] == 'Lunas') { ?>
                        <a class="btn btn-warning btn-xs" href="?page=pembiayaan_nasabah&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a>
                        <?php } else { ?>
                        <a class="btn btn-danger btn-xs" href="?page=pembiayaan_nasabah&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a>
                        <?php } ?>                       
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