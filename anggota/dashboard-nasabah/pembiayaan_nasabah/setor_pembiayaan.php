<?php
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$sql=mysqli_query($con,"select * from pembiayaan_anggota a inner join anggota b on a.id_anggota = b.id_anggota where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);

$sql2=mysqli_query($con,"select * from pembiayaan_anggota a inner join anggota b on a.id_anggota = b.id_anggota where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
?>
<h3><i class="fa fa-angle-right"></i> Setor Angsuran Pembiayaan</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Setor Angsuran</h4>
            <form class="form-horizontal style-form" method="post">
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Rek</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_pembiayaan" value="<?php echo $data['id_pembiayaan'] ?>" class="form-control" readonly>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                       <input type="text" value="<?php echo $data['nama_lengkap'] ?>" class="form-control" readonly>
                        <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota'] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Pembiayaan</label>
                    <div class="col-sm-10">
                       <textarea name="jenis_pembiayaan" class="form-control" readonly><?php echo $data['jenis_pembiayaan'] ?></textarea>
                    </div>
                </div>                 
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah Setor</label>
                    <div class="col-sm-10">
                        <input type="number" name="setor_bayar" min="<?php echo $data2['bayar_perbulan'] ?>" max="<?php echo $data2['bayar_perbulan'] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Keterangan Setor</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan_setor"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tgl Setor</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_bayar" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                   <a href="?page=pembiayaan_anggota" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
</div>
<?php
if (isset($_POST['simpan'])) {
  
$id_pembiayaan=mysqli_real_escape_string($con,@$_POST['id_pembiayaan']);
$setor_bayar=mysqli_real_escape_string($con,@$_POST['setor_bayar']);
$keterangan_setor=mysqli_real_escape_string($con,@$_POST['keterangan_setor']);
$jenis_pembiayaan=mysqli_real_escape_string($con,@$_POST['jenis_pembiayaan']);
$tgl_bayar = mysqli_real_escape_string($con,@$_POST['tgl_bayar']);

mysqli_query($con, "INSERT INTO tr_pembiayaan_anggota (id_tr_pembiayaan,id_pembiayaan,setor_bayar,keterangan_setor,tgl_bayar) values (null,'$id_pembiayaan','$setor_bayar','$keterangan_setor','$tgl_bayar')") or die (mysqli_error($con));
 mysqli_query($con, "INSERT INTO kas_bmt (id_kas_bmt, jenis_kas, jumlah_masuk, keterangan, tgl_transaksi) values (null,'Masuk','$setor_bayar','Setor Angsuran Pembiayaan $jenis_pembiayaan','$tgl_bayar')") or die (mysqli_error($con));
echo "<script>window.location.href='?page=pembiayaan_anggota';</script>";
    
}
?>