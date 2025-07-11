<h3><i class="fa fa-angle-right"></i>Simpanan Pokok Anggota</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<!-- <a href="?page=simpanan_pokok&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a> -->
          <h4><i class="fa fa-angle-right"></i> Data Simpanan Pokok Anggota</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Tgl</th>
                    <th>Total</th>
                    <?php if($_SESSION['level_admin']!="Kepala") { ?>  
                    <th>Opsi</th>
                    <?php } ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                
                  $sql_simpanan_pokok = mysqli_query($con,"SELECT * FROM simpanan_pokok INNER JOIN anggota on simpanan_pokok.id_anggota = anggota.id_anggota ORDER BY id_simpanan_pokok  ") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_simpanan_pokok)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                      <td><?php echo date('d-M-Y', strtotime($data['tglsetor'])) ?></td>
                      <td align="right"><?php echo 'Rp. '.number_format($data['jumlah_pokok']) ?></td>
                      <?php if($_SESSION['level_admin']!="Kepala") { ?> 
                      <td>
                    	<a class="btn btn-danger btn-xs" href="?page=simpanan_pokok&action=hapus&id_anggota=<?php echo $data['id_anggota'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
                      <?php } ?>
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