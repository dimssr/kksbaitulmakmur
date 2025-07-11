<h3><i class="fa fa-angle-right"></i> Tambah Data Admin/User</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Admin/User</h4>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_admin" class="form-control" required>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat_admin" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Level</label>
                    <div class="col-sm-10">
                        <select name="level_admin" class="form-control">
                          <option value="Administrator">Administrator</option>
                          <option value="Petugas">Petugas</option> 
                          <option value="Kepala">Kepala</option> 
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=admin-user" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
      
  $nama_admin=mysqli_real_escape_string($con,@$_POST['nama_admin']);
  $no_hp=mysqli_real_escape_string($con,@$_POST['no_hp']);
  $email=mysqli_real_escape_string($con,@$_POST['email']);
  $username=$email;
  $pass_admin=md5($email);
  $alamat_admin=mysqli_real_escape_string($con,@$_POST['alamat_admin']);
  $level_admin=mysqli_real_escape_string($con,@$_POST['level_admin']);

  mysqli_query($con, "INSERT INTO admin (id_admin, nama_admin, no_hp, email, username, pass_admin, alamat_admin, level_admin) values (null,'$nama_admin','$no_hp','$email','$username','$pass_admin','$alamat_admin','$level_admin')") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=admin-user';</script>";
    

}
?>