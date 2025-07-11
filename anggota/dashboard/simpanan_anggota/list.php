<h3><i class="fa fa-angle-right"></i>Simpanan Wajib Anggota</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Data Simpanan Wajib Anggota</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Total</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;             
                  $id_anggota = $_SESSION['id_anggota'];   
                  $sql_simpanan_anggota = mysqli_query($con,"SELECT SUM(simpanan_anggota.jumlah) AS jumlah, anggota.id_anggota AS id_anggota, nama_lengkap AS nama_lengkap, nama_produk AS nama_produk FROM simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt ON simpanan_anggota.id_produk = produk_bmt.id_produk WHERE simpanan_anggota.id_anggota = '$id_anggota' AND produk_bmt.nama_produk='Simpanan Wajib Anggota' GROUP BY anggota.id_anggota  ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_simpanan_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td align="right"><?php echo 'Rp. '.number_format($data['jumlah']) ?></td>
                      <td>   
                      <a class="btn btn-warning btn-xs" href="?page=simpanan_anggota&action=detail&id_anggota=<?php echo $data['id_anggota'];?>" title="Detail">Detail</a>  
                      </a>
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