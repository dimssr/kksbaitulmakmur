<h3><i class="fa fa-angle-right"></i> Tambah Nama Produk</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Nama Produk</h4>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Produk</label>
                    <div class="col-sm-10">
                      <select class="form-control js-example-basic-single" name="id_jenis_produk" required>
                      <option value="">--Pilih--</option>
                      <?php
                        $jenis_produk = mysqli_query($con,"select * from jenis_produk");
                        while($djenis_produk = mysqli_fetch_array($jenis_produk)) {                           
                              echo "<option value='$djenis_produk[id_jenis_produk]'>$djenis_produk[jenis_produk]</option>";
                           }                        
                     ?>  
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Penjelasan Produk</label>
                    <div class="col-sm-10">
                        <textarea name="desk_produk" class="form-control" rows="8"></textarea>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=produk" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $nama_produk=mysqli_real_escape_string($con,@$_POST['nama_produk']);
  $id_jenis_produk=mysqli_real_escape_string($con,@$_POST['id_jenis_produk']);
  $desk_produk=mysqli_real_escape_string($con,@$_POST['desk_produk']);

  mysqli_query($con, "INSERT INTO produk_bmt (id_produk, nama_produk, id_jenis_produk, desk_produk) values (null,'$nama_produk','$id_jenis_produk','$desk_produk')") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=produk';</script>";
    

}
?>