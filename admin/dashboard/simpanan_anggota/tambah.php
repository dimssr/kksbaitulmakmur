<h3><i class="fa fa-angle-right"></i> Simpanan Wajib Anggota</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Simpanan Wajib Anggota</h4>
            <form class="form-horizontal style-form" method="post">
              
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
                    <label class="col-sm-2 col-sm-2 control-label">Produk Simpanan</label>
                    <div class="col-sm-10">
                      <select class="form-control js-example-basic-single" name="id_produk" required>
                      <?php
                        $produk = mysqli_query($con,"select * from produk_bmt a INNER JOIN jenis_produk b on a.id_jenis_produk = b.id_jenis_produk WHERE a.nama_produk = 'Simpanan Wajib Anggota' ");
                        while($dproduk = mysqli_fetch_array($produk)) {                           
                              echo "<option value='$dproduk[id_produk]'>$dproduk[id_produk] - $dproduk[nama_produk]</option>";
                           }                        
                     ?>  
                      </select>
                    </div>
                </div>  
                            
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" min="10000" max="10000" class="form-control">
                    </div>
                </div>
                  
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Periode Bulan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="periode_bulan">
                      <?php 
                      $namaBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                      for($index=0; $index<12; $index++){?>
                        <option value="<?php echo $namaBulan[$index] ?>"><?php echo $namaBulan[$index] ?></option>                  
                      <?php } ?>
                      </select>
                        <!-- <input type="text" name="periode_bulan" class="form-control" value="<?php echo $bulanIndo ?>" readonly> -->
                    </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Periode Bulan</label>
                  <div class="col-sm-10">
                    <select name="periode_tahun" class="form-control">
                      <?php 
                      $thn=date("Y");
                      for($a=$thn;$a>=2015;$a--){
                      ?>
                      <option value="<?php echo $a;?>"><?php echo $a;?></option>
                      <?php } ?>
                    </select>
                  </div>
              </div>                
              <div class="form-group" style="margin-left: 5px"> 
                 <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                 <a href="?page=simpanan_anggota" class="btn btn-warning">Kembali</a>
              </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
    
  $id_anggota=mysqli_real_escape_string($con,@$_POST['id_anggota']);
  $id_produk=mysqli_real_escape_string($con,@$_POST['id_produk']);
  $jumlah=mysqli_real_escape_string($con,@$_POST['jumlah']);
  $periode_bulan=mysqli_real_escape_string($con,@$_POST['periode_bulan']);
  $periode_tahun=mysqli_real_escape_string($con,@$_POST['periode_tahun']);
  $tglsetor=date('Y:m:d');

  $cariData =mysqli_query($con, "SELECT * FROM simpanan_anggota WHERE id_anggota = '$id_anggota' AND id_produk = '$id_produk' AND periode_bulan = '$periode_bulan' AND periode_tahun='$periode_tahun'");
  $ketemu=mysqli_num_rows($cariData);
  if($ketemu > 0){
    echo"
    <script language='javascript'>
        window.alert('Anggota ini sudah menyetor pada priode $periode_bulan $periode_tahun');
        window.history.go(-1)
        </script>
    ";
  } else {
    mysqli_query($con, "INSERT INTO simpanan_anggota (id_simpanan_anggota, id_anggota, id_produk, jumlah, periode_bulan, periode_tahun, tglsetor) values (null,'$id_anggota','$id_produk','$jumlah','$periode_bulan','$periode_tahun','$tglsetor')") or die (mysqli_error($con));
  

  echo "<script>window.location.href='?page=simpanan_anggota';</script>";
  }

  
    

}
?>