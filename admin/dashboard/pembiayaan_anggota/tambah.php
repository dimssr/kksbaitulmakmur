<h3><i class="fa fa-angle-right"></i> Tambah Data Pembiayaan Anggota</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Pembiayaan Anggota</h4>
            <form class="form-horizontal style-form" method="post">
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Kode Pembiayaan</label>
                    <div class="col-sm-10">
                      <?php
                      $query = "SELECT max(id_pembiayaan) as maxKode FROM pembiayaan_anggota";
                      $hasil = mysqli_query($con, $query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxKode'];
                      $no_urut = (int) substr($kode, 5, 3);
                      $no_urut++;
                      $char = "Pemb-";
                      $kode = $char . sprintf("%03s", $no_urut);
                      ?>
                        <input type="text" name="id_pembiayaan" class="form-control" value="<?php echo $kode ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Anggota</label>
                    <div class="col-sm-10">
                      <select class="form-control js-example-basic-single" name="id_anggota" required>
                      <option value="">--Pilih--</option>
                      <?php
                        $anggota = mysqli_query($con,"select * from anggota");
                        while($danggota = mysqli_fetch_array($anggota)) {                           
                              echo "<option value='$danggota[id_anggota]'>$danggota[id_anggota] - $danggota[nama_lengkap]</option>";
                           }                        
                     ?>  
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 col-sm-2 control-label" for="<?php echo $data['jenis_pembiayaan'] ?>">Jenis Pembiayaan</label>
                    <div class="col-sm-10">
                      <?php 
                        $jenis_pembiayaan = mysqli_query($con, "select * from produk_bmt a INNER JOIN jenis_produk b on a.id_jenis_produk = b.id_jenis_produk WHERE b.jenis_produk = 'Pembiayaan' ");
                        while ($data = mysqli_fetch_array($jenis_pembiayaan)) {                        
                      ?>
                      <input type="radio" name="id_produk" id="<?php echo $data['id_produk'] ?>" value="<?php echo $data['id_produk'] ?>"> <?php echo $data['nama_produk'] ?> </label> <br>
                    <?php } ?>
                      
                    </div>
                 </div>               
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah Pembiayaan</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah_pembiayaan" min="50000" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jangka Waktu <small class="text-info">*Bulan</small></label>
                    <div class="col-sm-10">
                        <input type="number" name="jangka_waktu" min="1" class="form-control">
                    </div>
                </div>                
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=pembiayaan_anggota" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $id_anggota=mysqli_real_escape_string($con,@$_POST['id_anggota']);
  $id_pembiayaan=mysqli_real_escape_string($con,@$_POST['id_pembiayaan']);

  $id_produk=@$_POST['id_produk'];

  $sql_produk = mysqli_query($con, "select * from produk_bmt WHERE id_produk = '$id_produk' ");
  $data_produk=mysqli_fetch_array($sql_produk);
  $nama_produk = $data_produk['nama_produk'];

  $sql_anggota = mysqli_query($con, "select * from anggota WHERE id_anggota = '$id_anggota' ");
  $data_anggota=mysqli_fetch_array($sql_anggota);
  $nama_anggota = $data_anggota['nama_lengkap'];

  $jumlah_pembiayaan=mysqli_real_escape_string($con,@$_POST['jumlah_pembiayaan']);
  $jangka_waktu = mysqli_real_escape_string($con,@$_POST['jangka_waktu']);
  $tgl_pembiayaan = date('Y-m-d');

  $tgl_selesai = date('Y-m-d', strtotime('+'.$jangka_waktu. 'month', strtotime($tgl_pembiayaan)));

  $total_bayar = $jumlah_pembiayaan + ($jumlah_pembiayaan * 0);
  $totalBayar = round($total_bayar,3);
  $bayar_perbulan = $totalBayar/$jangka_waktu;
  $bayarperbulan = round($bayar_perbulan,3);

  mysqli_query($con, "INSERT INTO pembiayaan_anggota (id_pembiayaan, id_anggota, id_produk, jumlah_pembiayaan,tgl_pembiayaan, jangka_waktu,total_bayar,bayar_perbulan,tgl_selesai) values ('$id_pembiayaan','$id_anggota','$id_produk','$jumlah_pembiayaan','$tgl_pembiayaan','$jangka_waktu','$total_bayar','$bayarperbulan','$tgl_selesai')") or die (mysqli_error($con));

  mysqli_query($con, "INSERT INTO kas_bmt (id_kas_bmt, jenis_kas, jumlah_keluar, keterangan, tgl_transaksi) values (null,'Keluar','$jumlah_pembiayaan','Pembiayaan $nama_produk Anggota : $nama_anggota', '$tgl_pembiayaan')") or die (mysqli_error($con));

  mysqli_query($con, "UPDATE simpanan_utama set total_simpanan = total_simpanan - '$jumlah_pembiayaan' ") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=pembiayaan_anggota';</script>";
    

}
?>