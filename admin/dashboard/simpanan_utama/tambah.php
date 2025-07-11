<h3><i class="fa fa-angle-right"></i> Tambah Simpanan Utama</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Simpanan Utama</h4>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Total Simpanan</label>
                    <div class="col-sm-10">
                        <input type="number" name="total_simpanan" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Penjelasan Singkat</label>
                    <div class="col-sm-10">
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=simpanan_utama" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $total_simpanan=mysqli_real_escape_string($con,@$_POST['total_simpanan']);
  $keterangan=mysqli_real_escape_string($con,@$_POST['keterangan']);

  mysqli_query($con, "INSERT INTO simpanan_utama (id_simpanan_utama, total_simpanan, keterangan) values (null,'$total_simpanan','$keterangan')") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=simpanan_utama';</script>";
    

}
?>