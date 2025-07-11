<?php
$id_pembiayaan=mysqli_real_escape_string($con,$_GET['id_pembiayaan']);
$sql=mysqli_query($con,"select * from tr_pembiayaan_nasabah a inner join pembiayaan_nasabah b on a.id_pembiayaan = b.id_pembiayaan inner join nasabah c on b.id_nasabah = c.id_nasabah where a.id_pembiayaan = '$id_pembiayaan'") or die (mysqli_error($con));
$data=mysqli_fetch_array($sql);
?>
<h3><i class="fa fa-angle-right"></i> Detail Transaksi Setor Angsuran Pembiayaan</h3>
<table class="table">
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><?php echo $data['nm_lengkap'] ?></td>
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
        			</tr>
        		</thead>
        		<tbody>
        			<?php
        			$no = 1;
        			$sql=mysqli_query($con,"select * from tr_pembiayaan_nasabah a inner join pembiayaan_nasabah b on a.id_pembiayaan = b.id_pembiayaan where a.id_pembiayaan = '$id_pembiayaan' ORDER BY tgl_bayar DESC ") or die (mysqli_error($con));
        			while($data = mysqli_fetch_array($sql)){
        			
        			 ?>
        			<tr>
        				<td><?php echo $no++ ?></td>
                                        <td><?php echo $data['keterangan_setor'] ?></td>
                                        <td class="text-right"><?php echo 'Rp.'. number_format($data['setor_bayar'],3) ?></td>
        				<td><?php echo date('d-m-Y', strtotime($data['tgl_bayar'])) ?></td>
        			</tr>
        			<?php } ?>
        			
        		</tbody>
        	</table>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->
	<div class="row mt-2 text-right" style="margin-right: 5px;">
		<a href="?page=pembiayaan_nasabah&action=detail&id_pembiayaan=<?php echo $id_pembiayaan;?>" class="btn btn-warning">Kembali</a>
	</div>
</div>