<h3><i class="fa fa-angle-right"></i> Tambah Kas Masuk</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Kas Masuk</h4>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="keterangan" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>
                </div>               
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=kas_masuk" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $jumlah=mysqli_real_escape_string($con,@$_POST['jumlah']);
  $keterangan=mysqli_real_escape_string($con,@$_POST['keterangan']);
  $tgl_transaksi=date('Y:m:d');

  mysqli_query($con, "INSERT INTO kas_bmt (id_kas_bmt, jenis_kas, jumlah_masuk, keterangan, tgl_transaksi) values (null,'Masuk','$jumlah','$keterangan','$tgl_transaksi')") or die (mysqli_error($con));
  mysqli_query($con, "UPDATE simpanan_utama set total_simpanan = total_simpanan + '$jumlah' ") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=kas_masuk';</script>";
    
}
?>