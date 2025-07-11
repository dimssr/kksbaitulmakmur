<h3><i class="fa fa-angle-right"></i> Tabungan Nasabah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<a href="?page=tabungan_nasabah&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Buat Baru</a>
          <h4><i class="fa fa-angle-right"></i> Data Tabungan Nasabah</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>Rek. Tabungan</th>
                    <th>Nama</th>
                    <th>Produk Tabungan</th>
                    <th>Total</th>
                    <th width="19%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_tabungan_nasabah = mysqli_query($con,"SELECT * FROM tabungan_nasabah INNER JOIN nasabah on tabungan_nasabah.id_nasabah = nasabah.id_nasabah INNER JOIN produk_bmt on tabungan_nasabah.id_produk = produk_bmt.id_produk INNER JOIN total_tabungan_nasabah ON tabungan_nasabah.rek_tabungan = total_tabungan_nasabah.rek_tabungan GROUP BY tabungan_nasabah.rek_tabungan ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_tabungan_nasabah)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['rek_tabungan'] ?></td>
                      <td><?php echo $data['nm_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td><?php echo 'Rp. '.number_format($data['total']) ?></td>
                      <td>
                        <a class="btn btn-warning btn-xs" href="?page=tabungan_nasabah&action=detail&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Tambah">Detail</a>
                        <a class="btn btn-primary btn-xs" href="?page=tabungan_nasabah&action=tambah_tabungan&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Setor">Setor</a>
                        <a class="btn btn-success btn-xs" href="?page=tabungan_nasabah&action=tarik_tabungan&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Tarik">Tarik</a>                        
            	<a class="btn btn-danger btn-xs" href="?page=tabungan_nasabah&action=hapus&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
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