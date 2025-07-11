<h3><i class="fa fa-angle-right"></i> Admin/User</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<a href="?page=admin-user&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
          <h4><i class="fa fa-angle-right"></i> Data Admin/User</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                      <th>Nama</th>
                      <th>No Hp</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th width="10%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_admin = mysqli_query($con,"SELECT * FROM admin ORDER BY id_admin ASC") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_admin)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['nama_admin'] ?></td>
                      <td><?php echo $data['no_hp'] ?></td>
                      <td><?php echo $data['username'] ?></td>
                      <td><?php echo $data['level_admin'] ?></td>
                      <td><a class="btn btn-warning btn-xs" href="?page=admin-user&action=edit&id_admin=<?php echo $data['id_admin'];?>" title="Edit Data">Edit</a> 
            	<a class="btn btn-danger btn-xs" href="?page=admin-user&action=hapus&id_admin=<?php echo $data['id_admin'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
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