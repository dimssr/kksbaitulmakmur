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
                  $sql_simpanan_nasabah = mysqli_query($con,"SELECT * FROM pembiayaan_nasabah INNER JOIN nasabah on pembiayaan_nasabah.id_nasabah = nasabah.id_nasabah WHERE pembiayaan_nasabah.status_pembayaran = 'Belum Lunas' ") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_simpanan_nasabah)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_nasabah'] ?></td>
                      <td><?php echo $data['nm_lengkap'] ?></td>
                      <td><?php echo $data['jenis_pembiayaan'] ?></td>
                      <td>
                         <a class="btn btn-warning btn-xs" href="?page=pembiayaan_nasabah&action=detail&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>" title="Detail">Detail</a> 
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