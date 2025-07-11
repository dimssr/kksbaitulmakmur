<?php
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$sql=mysqli_query($con,"select * from pembiayaan_nasabah a inner join nasabah b on a.id_nasabah = b.id_nasabah inner join produk_bmt c on a.id_produk = c.id_produk where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);

$sql2=mysqli_query($con,"select * from pembiayaan_nasabah a inner join nasabah b on a.id_nasabah = b.id_nasabah where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);

$sql3=mysqli_query($con,"select SUM(setor_bayar) AS setor_bayar from tr_pembiayaan_nasabah WHERE id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data3=mysqli_fetch_array($sql3);
$setor_bayar = $data3['setor_bayar'];
$sisa = $data['total_bayar'] - $setor_bayar;

?>
<h3><i class="fa fa-angle-right"></i> Setor Angsuran Pembiayaan</h3>
<!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
        <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Setor Angsuran</h4>
            <form class="form-horizontal style-form" method="post" name="fform">
              <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Id Pembiayaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_pembiayaan" value="<?php echo $data['id_pembiayaan'] ?>" class="form-control" readonly>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                       <input type="text" value="<?php echo $data['nm_lengkap'] ?>" class="form-control" readonly>
                        <input type="hidden" name="id_nasabah" value="<?php echo $data['id_nasabah'] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Pembiayaan</label>
                    <div class="col-sm-10">
                       <input type="hidden" name="id_produk" class="form-control" value="<?php echo $data['id_produk'] ?>" readonly>

                       <input type="text" class="form-control" value="<?php echo $data['nama_produk'] ?>" readonly>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Sisa1</label>
                    <div class="col-sm-10">
                        <input type="text" name="sisa1" id="sisa1" name="sisa1" min="<?php echo $data2['bayar_perbulan'] ?>" value="<?php echo $sisa ?>" readonly class="form-control">
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jumlah Setor</label>
                    <div class="col-sm-10">
                        <input type="text" id="setor_bayar" name="setor_bayar" min="<?php echo $data2['bayar_perbulan'] ?>" max="<?php echo $data2['bayar_perbulan'] ?>" class="form-control" onkeyup="parsing()"><small class="text-info">*Jumlah setoran Rp. <?php echo number_format($data2['bayar_perbulan'],3) ?></small>
                    </div>
                </div>
                    <input type="hidden" id="sisa2" name="sisa2" min="<?php echo $data2['bayar_perbulan'] ?>" max="<?php echo $data2['bayar_perbulan'] ?>" class="form-control" readonly>
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
                   <a href="?page=pembiayaan_nasabah" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
        </div><!-- col-lg-12-->         
    </div><!-- /row -->
</div>

<script>  
  function parsing() {
    var bil1 = parseFloat(document.fform.sisa1.value);
    if (isNaN (bil1))
       bil1=0.0;
    var bil2 = parseFloat(document.fform.setor_bayar.value);
    if (isNaN (bil2))
       bil2=0.0;
   var hasil = bil1 - bil2;
     //alert ("Hasil Penjumlahan = " + hasil);
    document.getElementById('sisa2').value = hasil;
  }
</script>

<?php
if (isset($_POST['simpan'])) {
  
$id_pembiayaan=mysqli_real_escape_string($con,@$_POST['id_pembiayaan']);
$id_nasabah=mysqli_real_escape_string($con,@$_POST['id_nasabah']);
$id_produk=mysqli_real_escape_string($con,@$_POST['id_produk']);
$setor_bayar=mysqli_real_escape_string($con,@$_POST['setor_bayar']);
$keterangan_setor=mysqli_real_escape_string($con,@$_POST['keterangan_setor']);
$jenis_pembiayaan=mysqli_real_escape_string($con,@$_POST['jenis_pembiayaan']);
$tgl_bayar = mysqli_real_escape_string($con,@$_POST['tgl_bayar']);
$sisa2 = mysqli_real_escape_string($con,@$_POST['sisa2']);

$sql_produk = mysqli_query($con, "select * from produk_bmt WHERE id_produk = '$id_produk' ");
$data_produk=mysqli_fetch_array($sql_produk);
$nama_produk = $data_produk['nama_produk'];

$sql_nasabah = mysqli_query($con, "select * from nasabah WHERE id_nasabah = '$id_nasabah' ");
$data_nasabah=mysqli_fetch_array($sql_nasabah);
$nama_nasabah = $data_nasabah['nm_lengkap'];

mysqli_query($con, "INSERT INTO tr_pembiayaan_nasabah (id_tr_pembiayaan,id_pembiayaan,setor_bayar,keterangan_setor,tgl_bayar) values (null,'$id_pembiayaan','$setor_bayar','$keterangan_setor','$tgl_bayar')") or die (mysqli_error($con));
 mysqli_query($con, "INSERT INTO kas_bmt (id_kas_bmt, jenis_kas, jumlah_masuk, keterangan, tgl_transaksi) values (null,'Masuk','$setor_bayar','Setor Angsuran Pembiayaan $nama_produk Nasabah $nama_nasabah','$tgl_bayar')") or die (mysqli_error($con));
if($sisa2 < 1) {
    mysqli_query($con,"UPDATE pembiayaan_nasabah SET status_pembayaran = 'Lunas' WHERE id_pembiayaan ='$id_pembiayaan' ");
}
echo "<script>window.location.href='?page=pembiayaan_nasabah';</script>";
    
}
?>