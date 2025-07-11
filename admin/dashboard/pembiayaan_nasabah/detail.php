<?php
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$sql=mysqli_query($con,"select * from pembiayaan_nasabah a inner join nasabah b on a.id_nasabah = b.id_nasabah where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);

$sql2=mysqli_query($con,"select SUM(setor_bayar) AS setor_bayar from tr_pembiayaan_nasabah WHERE id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data2=mysqli_fetch_array($sql2);
$setor_bayar = $data2['setor_bayar'];
$sisa = $data['total_bayar'] - $setor_bayar;
?>
<h3><i class="fa fa-angle-right"></i> Detail Pembiayaan</h3>
<!-- BASIC FORM ELELEMNTS -->
<hr>
    <div class="row mt">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Pembiayaan</th>                                        
                        <th><?php echo $data['id_pembiayaan']; ?></th>                                        
                    </tr>
                    <tr>
                        <th>Id Anggota <br> Nama Anggota</th>                                        
                        <th><?php echo $data['id_nasabah']; ?> <br> <?php echo $data['nm_lengkap'] ?></th>                                        
                    </tr>
                    <tr>
                        <th>Jenis Pembiayaan</th>                                        
                        <th><?php echo $data['jenis_pembiayaan']; ?></th>                                        
                    </tr>
                    <tr>
                        <th>Jumlah Pembiayaan</th>                                        
                        <th><?php echo 'Rp. '.number_format($data['jumlah_pembiayaan'],3) ?></th>                                        
                    </tr>
                    <tr>
                        <th>Jangka Waktu</th>                                        
                        <th><?php echo $data['jangka_waktu']; ?> Bulan</th>                                        
                    </tr>
                     <tr>
                        <th>Biaya Per Bulan</th>                                        
                        <th><?php echo 'Rp. '.number_format($data['bayar_perbulan'],3) ?></th>                                        
                    </tr>
                    <tr>
                        <th>Total Bayar</th>                                        
                        <th><?php echo 'Rp. '.number_format($data['total_bayar'],3) ?></th>                                        
                    </tr>
                    <tr>
                        <th>Sisa</th>                                        
                        <?php if($data2['setor_bayar']=="") { ?>                               
                        <th>Belum Anggsuran <small><a href="?page=pembiayaan_nasabah&action=detail_transaksi&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>">Detail Transaksi</a></small></th>   
                        <?php } else { ?>
                        <th><?php echo 'Rp. '.number_format($sisa,3); ?> <small> <a href="?page=pembiayaan_nasabah&action=detail_transaksi&id_pembiayaan=<?php echo $data['id_pembiayaan'];?>">Detail Transaksi</a></small></th>  
                        <?php } ?>                                         
                    </tr>
                    <tr>
                        <th>Tgl Pembiayaan <br> Tgl Selesai</th>                                        
                        <th><?php echo date('d-m-Y', strtotime($data['tgl_pembiayaan'])) ?><br><?php echo date('d-m-Y', strtotime($data['tgl_selesai'])) ?></th>                                        
                    </tr>
                    <tr>
                        <th>Status</th>         
                        <?php if($data['status_pembayaran'] == "Lunas") { ?>
                        <th><span class="label label-success">Lunas</span></th>
                        <?php } else { ?>
                        <th><span class="label label-danger">Belum Lunas</span></th>
                        <?php } ?>                               
                    </tr>
                </thead>                
            </table>
        </div><!-- col-lg-12-->         
    </div><!-- /row -->
    <div class="row mt-2 text-right" style="margin-right: 5px;">
        <a href="?page=pembiayaan_nasabah" class="btn btn-warning">Kembali</a>
    </div>
</div>