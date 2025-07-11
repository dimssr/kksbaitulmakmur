<h3><i class="fa fa-angle-right"></i> Anggota Kopsyah</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<a href="?page=anggota&action=tambah" title="Tambah" class="btn btn-primary" style="margin-left: 5px">Tambah</a>
          <h4><i class="fa fa-angle-right"></i> Data Anggota</h4>          
              <section id="unseen">
                <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
	                  <th>No</th>
                    <th>No Anggota</th>
                    <th>NIK</th>
                    <th>Nama Lengkap<br><small>Nama Panggilan</small></th>
                    <th>No Hp</th>
                    <th>Jenis Kelamin</th>
                    <th width="10%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql_anggota = mysqli_query($con,"SELECT * FROM anggota ORDER BY id_anggota ASC") or die (mysqli_error($con));
					while($data = mysqli_fetch_array($sql_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nik'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?><br><small><?php echo $data['nama_panggilan'] ?></small></td>
                      <td><?php echo $data['no_hp'] ?></td>
                      <td><?php echo $data['jenis_kelamin'] ?></td>
                      <td><a class="btn btn-warning btn-xs" href="?page=anggota&action=edit&id_anggota=<?php echo $data['id_anggota'];?>" title="Edit Data">Edit</a> 
            	<a class="btn btn-danger btn-xs" href="?page=anggota&action=hapus&id_anggota=<?php echo $data['id_anggota'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
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