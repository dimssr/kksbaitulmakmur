<h3><i class="fa fa-angle-right"></i> Tambah Data Nasabah</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Nasabah</h4>
            <form class="form-horizontal style-form" method="post">  
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Anggota</label>
                    <div class="col-sm-10">
                      <?php
                      $query = "SELECT max(id_nasabah) as maxKode FROM nasabah";
                      $hasil = mysqli_query($con, $query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxKode'];
                      $no_urut = (int) substr($kode, 4, 3);
                      $no_urut++;
                      $char = "715-";
                      $char2 = "-3101";
                      $kode = $char . sprintf("%03s", $no_urut) . $char2;
                      ?>
                        <input type="text" name="id_nasabah" class="form-control" value="<?php echo $kode ?>" readonly>
                    </div>
                </div>               
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik_nasabah" class="form-control" maxlength="16" minlength="16" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_lengkap" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_panggilan" class="form-control" required>
                    </div>
                </div>  

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="j_kelamin" class="form-control">
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laki-laki">Laki-laki</option>
                        </select>
                    </div>
                </div> 
                 <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email_nasabah" class="form-control" 
               placeholder="name@example.com" required
               pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[cC][oO][mM]">
        <small class="form-text text-muted">
            Email harus mengandung '@' dan diakhiri dengan '.com'.
        </small>
        </div>
        </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Telp. Rumah</label>
                    <div class="col-sm-10">
                        <input type="text" name="tel_rumah" class="form-control">
                    </div>
                </div>             
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Hp</label>
                    <div class="col-sm-10">
                        <input type="text" name="nohp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="almt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kerjaan" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                        <select name="sts_kawin" class="form-control">
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Janda">Janda</option>
                          <option value="Duda">Duda</option>
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
  
  $id_nasabah=mysqli_real_escape_string($con,@$_POST['id_nasabah']);
  $nik_nasabah=mysqli_real_escape_string($con,@$_POST['nik_nasabah']);
  $nm_lengkap=mysqli_real_escape_string($con,@$_POST['nm_lengkap']);
  $nm_panggilan=mysqli_real_escape_string($con,@$_POST['nm_panggilan']);  
  $j_kelamin=mysqli_real_escape_string($con,@$_POST['j_kelamin']);
  $tel_rumah=mysqli_real_escape_string($con,@$_POST['tel_rumah']);
  $nohp=mysqli_real_escape_string($con,@$_POST['nohp']);
  $email_nasabah=mysqli_real_escape_string($con,@$_POST['email_nasabah']);
  $username=$email_nasabah;
  $pass_nasabah=md5($email_nasabah);
  $almt=mysqli_real_escape_string($con,@$_POST['almt']);
  $kerjaan=mysqli_real_escape_string($con,@$_POST['kerjaan']);
  $sts_kawin=mysqli_real_escape_string($con,@$_POST['sts_kawin']);

  

  mysqli_query($con, "INSERT INTO nasabah (id_nasabah, nik_nasabah, nm_lengkap, nm_panggilan, j_kelamin, email_nasabah, nohp, tel_rumah, username, pass_nasabah, almt, kerjaan, sts_kawin) values ('$id_nasabah','$nik_nasabah','$nm_lengkap','$nm_panggilan', '$j_kelamin','$email_nasabah', '$nohp','$tel_rumah','$username','$pass_nasabah','$almt','$kerjaan','$sts_kawin')") or die (mysqli_error($con));
  echo "<script>window.location.href='?page=nasabah';</script>";
    

}
?>