<?php
$id_nasabah = $_SESSION['id_nasabah'];
$sql=mysqli_query($con,"select * from nasabah where id_nasabah = '$id_nasabah'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);
?>
<h3><i class="fa fa-angle-right"></i> Edit Profile Saya</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Profile Saya</h4>
            <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Anggota</label>
                    <div class="col-sm-10">                     
                        <input type="text" name="id_nasabah" class="form-control" value="<?php echo $data['id_nasabah'] ?>" readonly>
                    </div>
                </div> 
                <!--<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tgl Daftar</label>
                    <div class="col-sm-10">                     
                        <input type="text" name="id_nasabah" class="form-control" value="<?php echo date('d M y',strtotime($data['tgl_daftar'])) ?>" readonly>
                    </div>
                </div>-->
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik_nasabah" maxlength="16" minlength="16" class="form-control" value="<?php echo $data['nik_nasabah'] ?>" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_lengkap" class="form-control" value="<?php echo $data['nm_lengkap'] ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_panggilan" class="form-control" value="<?php echo $data['nm_panggilan'] ?>" required>
                    </div>
                </div>  
                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email_nasabah" class="form-control" value="<?php echo $data['email_nasabah'] ?>"><small class="text-danger">*mengubah email tidak mengubah username</small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" readonly><small class="text-danger">*Username tak dapat diubah</small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="pass_nasabah" class="form-control"><small class="text-info">*Isi jika ingin mengubah password</small>
                    </div>
                </div>
<div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Telp. Rumah</label>
                    <div class="col-sm-10">
                        <input type="text" name="tel_rumah" class="form-control" value="<?php echo $data['tel_rumah'] ?>">
                    </div>
                </div>             
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Hp</label>
                    <div class="col-sm-10">
                        <input type="text" name="nohp" class="form-control" value="<?php echo $data['nohp'] ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="almt" class="form-control"><?php echo $data['almt'] ?></textarea>
                    </div>
                </div>             
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Update</button>
                   <a href="?page=konfigurasi" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
  
  $id_nasabah=$_SESSION['id_nasabah'];    
  $nik_nasabah=mysqli_real_escape_string($con,@$_POST['nik_nasabah']);
  $nm_lengkap=mysqli_real_escape_string($con,@$_POST['nm_lengkap']);
  $email_nasabah=mysqli_real_escape_string($con,@$_POST['email_nasabah']);
  $nm_panggilan=mysqli_real_escape_string($con,@$_POST['nm_panggilan']);  
  //$jenis_kelamin=mysqli_real_escape_string($con,@$_POST['jenis_kelamin']);
  $tel_rumah=mysqli_real_escape_string($con,@$_POST['tel_rumah']);
  $nohp=mysqli_real_escape_string($con,@$_POST['nohp']);
  $pass_nasabah=mysqli_real_escape_string($con,@$_POST['pass_nasabah']);
  $pass=md5($pass_nasabah);
  $almt=mysqli_real_escape_string($con,@$_POST['almt']);

  if($pass_nasabah != ""){
    mysqli_query($con, "UPDATE nasabah set nik_nasabah='$nik_nasabah', nm_lengkap='$nm_lengkap', email_nasabah='$email_nasabah', nm_panggilan='$nm_panggilan', tel_rumah='$tel_rumah', nohp='$nohp', pass_nasabah='$pass', almt='$almt' WHERE id_nasabah='$id_nasabah' ") or die (mysqli_error($con));    
  } else {
    mysqli_query($con, "UPDATE nasabah set nik_nasabah='$nik_nasabah', nm_lengkap='$nm_lengkap', email_nasabah='$email_nasabah', nm_panggilan='$nm_panggilan', tel_rumah='$tel_rumah', nohp='$nohp', almt='$almt' WHERE id_nasabah='$id_nasabah' ") or die (mysqli_error($con));
  }
  echo "<script>window.location.href='?page=my_profile';</script>";
    
}
?>