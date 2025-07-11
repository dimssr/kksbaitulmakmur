<h3><i class="fa fa-angle-right"></i> Simpanan Pokok Anggota</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Simpanan Pokok Anggota</h4>
            <form class="form-horizontal style-form" method="post">
              
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Anggota</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="id_anggota" required>
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
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah_pokok" min="50000" max="50000" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tgl Setor</label>
                    <div class="col-sm-10">
                        <input type="date" name="tglsetor" class="form-control">
                    </div>
                </div>
                
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=simpanan_pokok" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $id_anggota=mysqli_real_escape_string($con,@$_POST['id_anggota']);
  $jumlah_pokok=mysqli_real_escape_string($con,@$_POST['jumlah_pokok']);
  $tglsetor=mysqli_real_escape_string($con,@$_POST['tglsetor']);
  
  mysqli_query($con, "INSERT INTO simpanan_pokok (id_simpanan_pokok, id_anggota, jumlah_pokok, tglsetor) values (null,'$id_anggota','$jumlah_pokok','$tglsetor')") or die (mysqli_error($con));
  
  echo "<script>window.location.href='?page=simpanan_pokok';</script>";
}
?>