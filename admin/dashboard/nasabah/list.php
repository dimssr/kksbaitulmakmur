<h3><i class="fa fa-angle-right"></i> Nasabah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<a href="?page=nasabah&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
          <h4><i class="fa fa-angle-right"></i> Data Nasabah</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>ID Nasabah</th>
                    <th>Nama Lengkap<br><small>Nama Panggilan</small></th>
                    <th>No Hp</th>
                    <th>Jenis Kelamin</th>
                    <th width="10%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_nasabah = mysqli_query($con,"SELECT * FROM nasabah ORDER BY id_nasabah ASC") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_nasabah)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_nasabah'] ?></td>
                      <td><?php echo $data['nm_lengkap'] ?><br><small><?php echo $data['nm_panggilan'] ?></small></td>
                      <td><?php echo $data['nohp'] ?></td>
                      <td><?php echo $data['j_kelamin'] ?></td>
                      <td><a class="btn btn-warning btn-xs" href="?page=nasabah&action=edit&id_nasabah=<?php echo $data['id_nasabah'];?>" title="Edit Data">Edit</a> 
            	<a class="btn btn-danger btn-xs" href="?page=nasabah&action=hapus&id_nasabah=<?php echo $data['id_nasabah'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
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