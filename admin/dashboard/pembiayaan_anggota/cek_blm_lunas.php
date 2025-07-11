  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
        <h1 class="text-center">Anggota yang belum Lunas Pembiayaan</h1>
          <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Jenis Pembiayaan</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                
                  $sql_simpanan_anggota = mysqli_query($con,"SELECT * FROM pembiayaan_anggota INNER JOIN anggota on pembiayaan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt on pembiayaan_anggota.id_produk = produk_bmt.id_produk WHERE pembiayaan_anggota.status_pembiayaan = 'Belum Lunas' ") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_simpanan_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                      <td><?php echo $data['nama_produk'] ?></td>
                      <td>
                         <a class="btn btn-warning btn-xs" href="?page=pembiayaan_anggota&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a> 
                      </td>
                  </tr>
                  <?php 
                  }
                  ?>
                  </tbody>
              </table>
      </div>
    </div>
  </div>

</div>