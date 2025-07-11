<h3><i class="fa fa-angle-right"></i> Simpanan Produk Kopsyah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
      <?php
       $sql = mysqli_query($con, "SELECT * FROM simpanan_utama") or die (mysqli_error($con));
       if(mysqli_num_rows($sql) <= 0){
       ?>
			<a href="?page=simpanan_utama&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
      <?php } ?>
          <h4><i class="fa fa-angle-right"></i> Data Simpanan Produk</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                      <th>Total Simpanan</th>
                      <th>Penjelasan</th>
                      <!-- <th width="10%">Opsi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_simpanan_utama = mysqli_query($con,"SELECT * FROM simpanan_utama") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_simpanan_utama)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo 'Rp. '.number_format($data['total_simpanan']) ?></td>
                      <td><?php echo $data['keterangan'] ?></td>
                      <!--<td>
                      <a class="btn btn-warning btn-xs" href="?page=simpanan_utama&action=edit&id_simpanan_utama=<?php echo $data['id_simpanan_utama'];?>" title="Edit Data">Edit</a> 
                      	<a class="btn btn-danger btn-xs" href="?page=simpanan_utama&action=hapus&id_simpanan_utama=<?php echo $data['id_simpanan_utama'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a>
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