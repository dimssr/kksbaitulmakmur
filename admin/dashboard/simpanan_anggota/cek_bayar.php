<h3><i class="fa fa-angle-right"></i> Cek Anggota yang Belum setor Simpanan Wajib</h3>
<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
        <div class="form-panel">
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Periode Bulan</label>
                    <div class="col-sm-10">
                        <select name="periode_bulan" class="form-control">
                          <?php 
                          $namaBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                          for($index=0; $index<12; $index++){?>
                            <option value="<?php echo $namaBulan[$index] ?>"><?php echo $namaBulan[$index] ?></option>                  
                          <?php } ?>
                        </select>
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Periode Tahun</label>
                    <div class="col-sm-10">
                        <select name="periode_tahun" class="form-control">
                          <?php 
                          $thn=date("Y");
                          for($a=$thn;$a>=2015;$a--){
                          ?>
                          <option value="<?php echo $a;?>"><?php echo $a;?></option>
                          <?php } ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group" style="margin-left: 5px"> 
                   <button type="submit" class="btn btn-primary" name="cek">Cek</button>
                   <a href="?page=simpanan_anggota" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
		</div><!-- col-lg-12-->      	
	</div><!-- /row -->

  <div class="row mt">
    <div class="col-lg-12">
      <?php 
        if(isset($_POST['cek'])){
        $periode_bulan=mysqli_real_escape_string($con,@$_POST['periode_bulan']);
        $periode_tahun=mysqli_real_escape_string($con,@$_POST['periode_tahun']);        
      ?>
      <div class="form-panel">
        <h1 class="text-center">Anggota yang belum Setor Simpanan Wajib <br><strong>Bulan <?php echo $periode_bulan ?> <?php echo $periode_tahun ?></strong></h1>
          <table class="table table-bordered table-striped" id="Datatables">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;                
                  $sql_simpanan_anggota = mysqli_query($con,"SELECT id_anggota, nama_lengkap FROM anggota WHERE id_anggota NOT IN (SELECT id_anggota FROM simpanan_anggota WHERE periode_bulan = '$periode_bulan' AND periode_tahun = '$periode_tahun' AND id_produk = 7)") or die (mysqli_error($con));
          while($data = mysqli_fetch_array($sql_simpanan_anggota)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['id_anggota'] ?></td>
                      <td><?php echo $data['nama_lengkap'] ?></td>
                  </tr>
                  <?php 
                  }
                  ?>
                  </tbody>
              </table>
      </div>
      <?php }  ?>
    </div>
  </div>

</div>