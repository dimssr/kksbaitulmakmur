<h3><i class="fa fa-angle-right"></i> Tambah Data Tabungan Nasabah</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Tabungan Nasabah</h4>
            <form class="form-horizontal style-form" method="post">
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Rekening</label>
                    <div class="col-sm-10">
                      <?php
                      $query = "SELECT max(rek_tabungan) as maxKode FROM tabungan_nasabah";
                      $hasil = mysqli_query($con, $query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxKode'];
                      $no_urut = (int) substr($kode, 4, 3);
                      $no_urut++;
                      $char = "515-";
                      $char2 = "-2105";
                      $kode = $char . sprintf("%03s", $no_urut) . $char2;
                      ?>
                        <input type="text" name="rek_tabungan" class="form-control" value="<?php echo $kode ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nasabah</label>
                    <div class="col-sm-10">
                      <select class="form-control js-example-basic-single" name="id_nasabah" required>
                      <option value="">--Pilih--</option>
                      <?php
                        $nasabah = mysqli_query($con,"select * from nasabah");
                        while($dnasabah = mysqli_fetch_array($nasabah)) {                           
                              echo "<option value='$dnasabah[id_nasabah]'>$dnasabah[id_nasabah] - $dnasabah[nm_lengkap]</option>";
                           }                          
                     ?>  
                      </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Produk tabungan</label>
                    <div class="col-sm-10">
                      <select class="form-control js-example-basic-single" name="id_produk" required>
                      <option value="">--Pilih--</option>
                      <?php
                        $produk = mysqli_query($con,"select * from produk_bmt a INNER JOIN jenis_produk b on a.id_jenis_produk = b.id_jenis_produk WHERE b.jenis_produk = 'Tabungan' ");
                        while($dproduk = mysqli_fetch_array($produk)) {                           
                              echo "<option value='$dproduk[id_produk]'>$dproduk[id_produk] - $dproduk[nama_produk]</option>";
                           }                        
                     ?>  
                      </select>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nominal</label>
                    <div class="col-sm-10">
                        <input type="number" name="nominal" min="50000" class="form-control">
                    </div>
                </div>
                
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=tabungan_nasabah" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $id_nasabah=mysqli_real_escape_string($con,@$_POST['id_nasabah']);
  $rek_tabungan=mysqli_real_escape_string($con,@$_POST['rek_tabungan']);
  $id_produk=mysqli_real_escape_string($con,@$_POST['id_produk']);
  $nominal=mysqli_real_escape_string($con,@$_POST['nominal']);
  $tgl = date('Y:m:d');

  mysqli_query($con, "INSERT INTO tabungan_nasabah (id_tabungan, rek_tabungan, id_nasabah, id_produk, nominal,tgl_setor) values (null,'$rek_tabungan','$id_nasabah','$id_produk','$nominal','$tgl')") or die (mysqli_error($con));

  $query = "SELECT max(rek_tabungan) as maxKode FROM tabungan_nasabah";
  $hasil = mysqli_query($con, $query);
  $data = mysqli_fetch_array($hasil);
  $kode = $data['maxKode'];

  mysqli_query($con,"INSERT INTO total_tabungan_nasabah (id_total_tabungan_nasabah, rek_tabungan, total) values (null,'$kode','$nominal')")or die (mysqli_error($con));

  echo "<script>window.location.href='?page=tabungan_nasabah';</script>";
    

}
?>