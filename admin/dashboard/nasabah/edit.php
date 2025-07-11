<?php
$id_nasabah=mysqli_real_escape_string($con,$_GET['id_nasabah']);
$sql=mysqli_query($con,"select * from nasabah where id_nasabah = '$id_nasabah'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);
?>
<h3><i class="fa fa-angle-right"></i> Edit Data Nasabah</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i>Nasabah</h4>
            <form class="form-horizontal style-form" method="post">                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik_nasabah" class="form-control" value="<?php echo $data['nik_nasabah'] ?>" required>
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
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="j_kelamin" class="form-control">
                          <option value="Perempuan" <?php if($data['j_kelamin']=="Perempuan") { echo 'selected'; } ?> >Perempuan</option>
                          <option value="Laki-laki" <?php if($data['j_kelamin']=="Laki-laki") { echo 'selected'; } ?> >Laki-laki</option>
                        </select>
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
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kerjaan" class="form-control" value="<?php echo $data['kerjaan'] ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                        <select name="sts_kawin" class="form-control">
                          <option value="Belum Menikah" <?php if($data['sts_kawin']=="Belum Menikah") { echo 'selected'; } ?>>Belum Menikah</option>
                          <option value="Menikah" <?php if($data['sts_kawin']=="Menikah") { echo 'selected'; } ?>>Menikah</option>
                          <option value="Janda" <?php if($data['sts_kawin']=="Janda") { echo 'selected'; } ?>>Janda</option>
                          <option value="Duda" <?php if($data['sts_kawin']=="Duda") { echo 'selected'; } ?>>Duda</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=nasabah" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
  if (isset($_POST['simpan'])) {
  
  $id_nasabah=mysqli_real_escape_string($con,@$_GET['id_nasabah']);    
  $nik_nasabah=mysqli_real_escape_string($con,@$_POST['nik_nasabah']);
  $nm_lengkap=mysqli_real_escape_string($con,@$_POST['nm_lengkap']);
  $email_nasabah=mysqli_real_escape_string($con,@$_POST['email_nasabah']);
  $nm_panggilan=mysqli_real_escape_string($con,@$_POST['nm_panggilan']);  
  $j_kelamin=mysqli_real_escape_string($con,@$_POST['j_kelamin']);
  $tel_rumah=mysqli_real_escape_string($con,@$_POST['tel_rumah']);
  $nohp=mysqli_real_escape_string($con,@$_POST['nohp']);
  $pass_nasabah=mysqli_real_escape_string($con,@$_POST['pass_nasabah']);
  $pass=md5($pass_nasabah);
  $almt=mysqli_real_escape_string($con,@$_POST['almt']);
  $kerjaan=mysqli_real_escape_string($con,@$_POST['kerjaan']);
  $sts_kawin=mysqli_real_escape_string($con,@$_POST['sts_kawin']);

  if($pass_nasabah != ""){
    mysqli_query($con, "UPDATE nasabah set nik_nasabah='$nik_nasabah', nm_lengkap='$nm_lengkap', email_nasabah='$email_nasabah', nm_panggilan='$nm_panggilan', j_kelamin='$j_kelamin', tel_rumah='$tel_rumah', nohp='$nohp', pass_nasabah='$pass', almt='$almt', kerjaan='$kerjaan', sts_kawin='$sts_kawin' WHERE id_nasabah='$id_nasabah' ") or die (mysqli_error($con));    
  } else {
    mysqli_query($con, "UPDATE nasabah set nik_nasabah='$nik_nasabah', nm_lengkap='$nm_lengkap', email_nasabah='$email_nasabah', nm_panggilan='$nm_panggilan', j_kelamin='$j_kelamin', tel_rumah='$tel_rumah', nohp='$nohp', almt='$almt', kerjaan='$kerjaan', sts_kawin='$sts_kawin' WHERE id_nasabah='$id_nasabah' ") or die (mysqli_error($con));
  }
  echo "<script>window.location.href='?page=nasabah';</script>";
    
}
?>