<h3><i class="fa fa-angle-right"></i>Simpanan Pokok Anggota</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<div class="pull-right" style="margin-right: 5px">
        <?php if($_SESSION['level_admin'] == 'Kepala' ) { ?>
          <a href="javascript:void(0)" onclick="$('#ubah_alamat').modal()" class="btn btn-primary btn-xs" title="Laporan Keuangan">Cetak Data</a><br>
        <?php } ?>
      </div>
      <h4><i class="fa fa-angle-right"></i> Data Simpanan Pokok Anggota</h4>          
      <section id="unseen">
        <table class="table table-bordered table-striped" id="Datatables">
          <thead>
            <tr>
             <th>No</th>
             <th>Id Anggota</th>
             <th>Nama</th>
             <th>Tgl</th>
             <th>Total</th>
             <?php if($_SESSION['level_admin']!="Kepala") { ?>  
              <th>Opsi</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;                
          $sql_simpanan_anggota = mysqli_query($con,"SELECT * FROM simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota INNER JOIN produk_bmt ON simpanan_anggota.id_produk = produk_bmt.id_produk WHERE produk_bmt.nama_produk = 'Simpanan Pokok' ORDER BY Tglsetor DESC  ") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_simpanan_anggota)){
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data['id_anggota'] ?></td>
              <td><?php echo $data['nama_lengkap'] ?></td>
              <td><?php echo date('d-M-Y', strtotime($data['Tglsetor'])) ?></td>
              <td align="right"><?php echo 'Rp. '.number_format($data['jumlah']) ?></td>
              <?php if($_SESSION['level_admin']!="Kepala") { ?> 
                <td>
                 <a class="btn btn-danger btn-xs" href="?page=simpanan_anggota&action=hapus&id_anggota=<?php echo $data['id_simpanan_anggota'];?>" title="Hapus Data" onclick="javascript: return confirm('Apakah anda yakin?');"><i class="fa fa-trash"> Hapus</i></a></td>
               <?php } ?>
             </tr>
             <?php 
           }
           ?>
         </tbody>
       </table>
     </section>
   </div><!-- /content-panel -->

 </div>
</div>


<div id="ubah_alamat" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cetak Data</h4>
      </div>
      <div class="modal-body" style="height:400px;overflow:auto">
        <form action="<?php echo base_url() ?>/dashboard/simpanan_pokok/rekap_bulan.php" target="_blank" class="form-group" method="post">
          <div class="form-group">
            <label class="control-label">Bulan</label>
            <select name="priode_bulan" class="form-control" id="demoSelect" required>
              <option value="">--Pilih--</option>                
              <?php 
              $namaBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
              for($index=0; $index<12; $index++){?>
                <option value="<?php echo $namaBulan[$index] ?>"><?php echo $namaBulan[$index] ?></option>                  
              <?php } ?>
            </select>
          </div>   

          <div class="form-group">
            <label class="control-label">Tahun</label>
            <select name="priode_tahun" class="form-control" id="demoSelect" required>
              <?php 
              $thn=date("Y");
              for($a=$thn;$a>=2015;$a--){
                ?>
                <option value="<?php echo $a;?>"><?php echo $a;?></option>
              <?php } ?>
            </select>
          </div> 
          <div class="form-group pull-right">
            <input type="submit" name="cetak" value="Cetak" class="btn btn-success">
          </div>
        </form>
        <br><br>
        <hr>
        <a href="<?php echo base_url() ?>/dashboard/simpanan_pokok/rekap_all.php" target="_blank" class="btn btn-primary" title="Cetak Semua">Cetak Semua</a><br>
      </div>
    </div>
  </div>
</div>		