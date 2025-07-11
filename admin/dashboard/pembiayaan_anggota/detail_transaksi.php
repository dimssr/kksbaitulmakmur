<?php
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$sql=mysqli_query($con,"select * from tr_pembiayaan_anggota a inner join pembiayaan_anggota b on a.id_pembiayaan = b.id_pembiayaan inner join anggota c on b.id_anggota = c.id_anggota where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);
?>
<h3><i class="fa fa-angle-right"></i> Detail Transaksi Setor Angsuran Pembiayaan</h3>
<table class="table">
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><?php echo $data['nama_lengkap'] ?></td>
	</tr>
	<tr>
		<td>Id. Pembiayaan</td>
		<td>:</td>
		<td><?php echo $data['id_pembiayaan'] ?></td>
	</tr>
</table>
<!-- BASIC FORM ELELEMNTS -->
<hr>
	<div class="row mt">
		<div class="col-lg-12">
        	<table class="table table-striped" id="Datatables">
        		<thead>
        			<tr>
        				<th>No</th>
                                        <th>Keterangan</th>         
                                        <th class="text-right">Jumlah Setor</th>
        				<th>Tgl Transaksi</th>
                                        <th>Cetak Kwitansi</th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php
        			$no = 1;
                                $username = $_SESSION['username'];
        			$sql=mysqli_query($con,"select * from tr_pembiayaan_anggota a inner join pembiayaan_anggota b on a.id_pembiayaan = b.id_pembiayaan where a.id_pembiayaan = '$id_pembiayaan' ORDER BY tgl_bayar DESC ") or die (mysqli_error($con));
        			while($data = mysqli_fetch_array($sql)){
        			
        			 ?>
        			<tr>
        				<td><?php echo $no++ ?></td>
                                        <td><?php echo $data['keterangan_setor'] ?></td>
                                        <td class="text-right"><?php echo 'Rp.'. number_format($data['setor_bayar'],3) ?></td>
        				<td><?php echo date('d-m-Y', strtotime($data['tgl_bayar'])) ?></td>
                                        <td><a class="btn btn-success btn-sm" href="<?php echo base_url() ?>/dashboard/pembiayaan_anggota/kwitansi.php?id=<?php echo $data['id_tr_pembiayaan'] ?>&admin=<?php echo $username ?>&id_pembiayaan=<?php echo $data['id_pembiayaan'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i></a></td>
        			</tr>
        			<?php } ?>
        			
        		</tbody>
        	</table>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
	<div class="row mt-2 text-right" style="margin-right: 5px;">
		<a href="?page=pembiayaan_anggota&action=detail&id_pembiayaan=<?php echo $id_pembiayaan;?>" class="btn btn-warning">Kembali</a>
	</div>
</div>