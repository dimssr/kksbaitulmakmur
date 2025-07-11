<h3><i class="fa fa-angle-right"></i> Tambah Data Anggota</h3>
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
     <h4 class="mb"><i class="fa fa-angle-right"></i> Anggota</h4>
     <form class="form-horizontal style-form" method="post">
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">No. Anggota</label>
        <div class="col-sm-10">
          <?php
          $query = "SELECT max(id_anggota) as maxKode FROM anggota";
          $hasil = mysqli_query($con, $query);
          $data = mysqli_fetch_array($hasil);
          $kode = $data['maxKode'];
          $no_urut = (int) substr($kode, 4, 3);
          $no_urut++;
          $char = "615-";
          $char2 = "-3101";
          $kode = $char . sprintf("%03s", $no_urut) . $char2;
          ?>
          <input type="text" name="id_anggota" class="form-control" value="<?php echo $kode ?>" readonly>
        </div>
      </div>                 
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">NIK</label>
        <div class="col-sm-10">
          <input type="text" name="nik" class="form-control" minlength="16" maxlength="16" onKeyPress="return goodchars(event,'1234567890  ',this)" required>
        </div>
      </div>  
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan</label>
        <div class="col-sm-10">
          <input type="text" name="nama_panggilan" class="form-control" required>
        </div>
      </div>  

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select name="jenis_kelamin" class="form-control">
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
          </select>
        </div>
      </div> 
      <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email_anggota" class="form-control" 
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
          <input type="text" name="telp_rumah" class="form-control">
        </div>
      </div>             
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">No. Hp</label>
        <div class="col-sm-10">
          <input type="text" name="no_hp" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea name="alamat" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
        <div class="col-sm-10">
          <input type="text" name="pekerjaan" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
        <div class="col-sm-10">
          <select name="status_kawin" class="form-control">
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
            <option value="Janda">Janda</option>
            <option value="Duda">Duda</option>
          </select>
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Produk Simpanan</label>
        <div class="col-sm-10">
          <select class="form-control js-example-basic-single" name="id_produk" required>
            <?php
            $produk = mysqli_query($con,"select * from produk_bmt a INNER JOIN jenis_produk b on a.id_jenis_produk = b.id_jenis_produk WHERE b.jenis_produk = 'Simpanan' AND a.nama_produk='Simpanan Pokok' ");
            while($dproduk = mysqli_fetch_array($produk)) {                           
              echo "<option value='$dproduk[id_produk]'>$dproduk[id_produk] - $dproduk[nama_produk]</option>";
            }                        
            ?>  
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jumlah Simpanan Pokok</label>
        <div class="col-sm-10">
          <input type="number" name="jumlah_pokok" max="50000" min="50000" class="form-control" required>
        </div>
      </div>                
      <div class="form-group" style="margin-left: 5px"> 
       <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
       <a href="?page=anggota" class="btn btn-warning">Kembali</a>
     </div>
   </form>
 </div>
</div><!-- col-lg-12-->      	
</div><!-- /row -->
</div>
<?php
if (isset($_POST['simpan'])) {
  
  $id_anggota=mysqli_real_escape_string($con,@$_POST['id_anggota']);
  $nik=mysqli_real_escape_string($con,@$_POST['nik']);
  $nama_lengkap=mysqli_real_escape_string($con,@$_POST['nama_lengkap']);
  $nama_panggilan=mysqli_real_escape_string($con,@$_POST['nama_panggilan']);  
  $jenis_kelamin=mysqli_real_escape_string($con,@$_POST['jenis_kelamin']);
  $telp_rumah=mysqli_real_escape_string($con,@$_POST['telp_rumah']);
  $no_hp=mysqli_real_escape_string($con,@$_POST['no_hp']);
  $email_anggota=mysqli_real_escape_string($con,@$_POST['email_anggota']);
  $username=$email_anggota;
  $pass_anggota=md5($email_anggota);
  $alamat=mysqli_real_escape_string($con,@$_POST['alamat']);
  $pekerjaan=mysqli_real_escape_string($con,@$_POST['pekerjaan']);
  $status_kawin=mysqli_real_escape_string($con,@$_POST['status_kawin']);
  $id_produk=mysqli_real_escape_string($con,@$_POST['id_produk']);
  $jumlah_pokok=mysqli_real_escape_string($con,@$_POST['jumlah_pokok']);
  $tgl_daftar = date('Y:m:d H:i:s');

  $cariData =mysqli_query($con, "SELECT * FROM anggota WHERE nik = '$nik'");
  $ketemu=mysqli_num_rows($cariData); 
  if($ketemu > 0){
    echo"
    <script language='javascript'>
    window.alert('Pendaftar dengan NO NIK $nik Sudah Terdaftar');
    window.history.go(-1)
    </script>
    ";
  } else {
   mysqli_query($con, "INSERT INTO anggota (id_anggota, nik, nama_lengkap, nama_panggilan, jenis_kelamin, email_anggota, no_hp, telp_rumah, username, pass_anggota, alamat, pekerjaan, status_kawin, tgl_daftar) values ('$id_anggota','$nik','$nama_lengkap','$nama_panggilan', '$jenis_kelamin','$email_anggota', '$no_hp','$telp_rumah','$username','$pass_anggota','$alamat','$pekerjaan','$status_kawin','$tgl_daftar')") or die (mysqli_error($con));

      //mysqli_query($con, "INSERT INTO simpanan_pokok (id_simpanan_pokok, id_anggota, jumlah_pokok, tglsetor) values (null,'$id_anggota','$jumlah_pokok','$tgl_daftar')");
   mysqli_query($con, "INSERT INTO simpanan_anggota (id_simpanan_anggota, id_anggota, id_produk, jumlah, tglsetor) values (null,'$id_anggota','$id_produk','$jumlah_pokok','$tgl_daftar')");
   echo "<script>window.location.href='?page=anggota';</script>";
 }
}
?>