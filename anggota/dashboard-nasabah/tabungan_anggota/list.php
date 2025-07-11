<h3><i class="fa fa-angle-right"></i> Tabungan Anggota</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<a href="?page=tabungan_anggota&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Buat Baru</a>
          <h4><i class="fa fa-angle-right"></i> Data Tabungan Anggota</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>Rek. Tabungan</th>
                    <th>Nama</th>
                    <th>Produk Tabungan</th>
                    <th>Total</th>
                    <th width="20%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  // $sql_tabungan_anggota = mysqli_query($con,"SELECT SUM(tabungan_anggota.nominal) AS nominal, anggota.nama_lengkap AS nama_lengkap, tabungan_anggota.id_tabungan, tabungan_anggota.rek_tabungan AS rek_tabungan, produk_bmt.nama_produk FROM tabungan_anggota INNER JOIN anggota on tabungan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt on tabungan_anggota.id_produk = produk_bmt.id_produk GROUP BY tabungan_anggota.rek_tabungan ") or die (mysqli_error($con));
                  
                  $sql_tabungan_anggota = mysqli_query($con,"SELECT * FROM tabungan_anggota INNER JOIN anggota on tabungan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt on tabungan_anggota.id_produk = produk_bmt.id_produk INNER JOIN total_tabungan_anggota ON tabungan_anggota.rek_tabungan = total_tabungan_anggota.rek_tabungan GROUP BY tabungan_anggota.rek_tabungan  ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_tabungan_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['rek_tabungan'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td align="right"s><?php echo 'Rp. '.number_format($data['total_simpanan']) ?></td>
                      <td>
                        <a class="btn btn-warning btn-xs" href="?page=tabungan_anggota&action=detail&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Detail">Detail</a>
                        <a class="btn btn-primary btn-xs" href="?page=tabungan_anggota&action=tambah_tabungan&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Tambah">Setor</a>
                        <a class="btn btn-success btn-xs" href="?page=tabungan_anggota&action=tarik_tabungan&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Tarik">Tarik</a>                       
            	<a class="btn btn-danger btn-xs" href="?page=tabungan_anggota&action=hapus&rek_tabungan=<?php echo $data['rek_tabungan'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
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