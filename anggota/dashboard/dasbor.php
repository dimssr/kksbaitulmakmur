<?php 
$id_anggota = $_SESSION['id_anggota'];
$sql_tabungan_anggota = mysqli_query($con,"SELECT * FROM tabungan_anggota INNER JOIN anggota on tabungan_anggota.id_anggota = anggota.id_anggota INNER JOIN total_tabungan_anggota ON tabungan_anggota.rek_tabungan = total_tabungan_anggota.rek_tabungan WHERE tabungan_anggota.id_anggota = '$id_anggota' ") or die (mysqli_error($con));
$data = mysqli_fetch_array($sql_tabungan_anggota);
$total_tabungan = $data['total_simpanan'];

$sql_pembiayaan_anggota = mysqli_query($con,"SELECT SUM(jumlah_pembiayaan) AS jumlah_pembiayaan FROM pembiayaan_anggota INNER JOIN anggota on pembiayaan_anggota.id_anggota = anggota.id_anggota WHERE pembiayaan_anggota.id_anggota = '$id_anggota' ") or die (mysqli_error($con));
$data2 = mysqli_fetch_array($sql_pembiayaan_anggota);
$total_pembiayaan = $data2['jumlah_pembiayaan'];

$sql_simpanan_anggota = mysqli_query($con,"SELECT SUM(jumlah) AS jumlah FROM simpanan_anggota INNER JOIN anggota on simpanan_anggota.id_anggota = anggota.id_anggota WHERE simpanan_anggota.id_produk = '7' AND simpanan_anggota.id_anggota = '$id_anggota' ") or die (mysqli_error($con));
$data3 = mysqli_fetch_array($sql_simpanan_anggota);
$total_simpanan = $data3['jumlah'];

$sql=mysqli_query($con,"select sum(jumlah_pokok) as jumlah_pokok from simpanan_pokok a inner join anggota b on a.id_anggota = b.id_anggota where a.id_anggota = '$id_anggota'") or die (mysqli_error($con));
$data4=mysqli_fetch_array($sql);
$jumlah_pokok = $data4['jumlah_pokok'];
?>


<?php
// Query untuk mendapatkan data pembiayaan anggota yang sedang login
$query_pembiayaan = "
    SELECT p.*, 
           MAX(t.tgl_bayar) AS terakhir_bayar 
    FROM pembiayaan_anggota p 
    LEFT JOIN tr_pembiayaan_anggota t 
    ON p.id_pembiayaan = t.id_pembiayaan 
    WHERE p.id_anggota = '$id_anggota'
";
$result_pembiayaan = mysqli_query($con, $query_pembiayaan);

// Proses data pembiayaan
while ($row = mysqli_fetch_assoc($result_pembiayaan)) {
    $tgl_selesai = $row['tgl_selesai'];
    $terakhir_bayar = $row['terakhir_bayar'];
    $bayar_perbulan = $row['bayar_perbulan'];
    $status_pembiayaan = $row['status_pembiayaan'];
    
    // Cek apakah pembiayaan sudah selesai
    if ($status_pembiayaan !== 'Lunas') {
        $tanggal_hari_ini = date('Y-m-d');
        
        // Blokir akun jika sudah melewati tanggal selesai
        if ($tanggal_hari_ini > $tgl_selesai) {
            echo "<div class='alert alert-danger' style='background-color: #ff4d4d; color: #fff; font-size: 1.2rem; font-weight: bold;'>
                    Akun Anda telah diblokir karena melewati tanggal jatuh tempo pembayaran pada <strong>" . date('d-m-Y', strtotime($tgl_selesai)) . "</strong>. 
                    Hubungi admin untuk informasi lebih lanjut atau aset pembiayaan anda akan kami sita.
                    Terima kasih.
                  </div>";
            // Logout dan redirect ke halaman login
            session_destroy();
            header("Location: logout.php");
            exit();
        }

        // Tampilkan alert jika pembayaran melewati tanggal 10 bulan berjalan
        $tanggal_batas = date('Y-m-5'); // Tentukan tanggal 10 bulan berjalan
        if (empty($terakhir_bayar) || $terakhir_bayar < $tanggal_batas) {
            echo "<div class='alert alert-warning' style='background-color: #ffcc00; color: #000; font-size: 1.2rem;'>
                    Anda belum melakukan pembayaran untuk bulan ini. Segera lakukan pembayaran sebesar <strong>Rp " . number_format($bayar_perbulan, 0, ',', '.') . ".</strong>
                  </div>";
        }
    }
}
?>

<?php

// Ambil bulan dan tahun saat ini
$current_month = date('m');
$current_year = date('Y');

// Ambil total penerimaan kas untuk bulan ini
$query_kas = mysqli_query($con, "SELECT SUM(jumlah_masuk) AS total_penerimaan 
                                 FROM kas_bmt 
                                 WHERE MONTH(tgl_transaksi) = '$current_month' 
                                 AND YEAR(tgl_transaksi) = '$current_year'");
$data_kas = mysqli_fetch_assoc($query_kas);
$total_penerimaan = $data_kas['total_penerimaan'] ?? 0;

// Ambil total simpanan semua anggota
$query_total_simpanan = mysqli_query($con, "SELECT SUM(jumlah) AS total_simpanan FROM simpanan_anggota");
$data_total_simpanan = mysqli_fetch_assoc($query_total_simpanan);
$total_simpanan = $data_total_simpanan['total_simpanan'] ?? 0;

// Ambil data simpanan anggota
$query_anggota = mysqli_query($con, "SELECT id_anggota, SUM(jumlah) AS total_simpanan_per_anggota 
                                     FROM simpanan_anggota 
                                     GROUP BY id_anggota");

// Hitung SHU untuk setiap anggota
$shu_share = $total_penerimaan * 0.10; // 10% dari total penerimaan
$shu_data = [];

while ($row = mysqli_fetch_assoc($query_anggota)) {
    $id_anggota = $row['id_anggota'];
    $simpanan_anggota = $row['total_simpanan_per_anggota'];

    // Perhitungan SHU per anggota
    $shu_per_anggota = ($total_simpanan > 0) ? ($simpanan_anggota / $total_simpanan) * $shu_share : 0;

    // Simpan data SHU per anggota
    $shu_data[$id_anggota] = $shu_per_anggota;
}

// Tampilkan SHU di dashboard anggota
$id_anggota_logged_in = $_SESSION['id_anggota']; // Ambil ID anggota yang sedang login
$shu_for_logged_in = $shu_data[$id_anggota_logged_in] ?? 0;

// Tampilkan SHU
echo "<div class='alert alert-info'>
        <strong>SHU Anda untuk bulan ini:</strong> Rp " . number_format($shu_for_logged_in, 0, ',', '.') . "
      </div>";
?>



<h3><i class="fa fa-angle-right"></i> Halaman Dasbor</h3>
<div class="row mt">
	<div class="col-lg-12">
		<p>Selamat Datang <strong><?php echo $_SESSION['nama_lengkap'] ?> | <?php echo $_SESSION['id_anggota'] ?></strong></p>
	</div>
</div>

<div class="row mt">
	<div align="center">
		<div align="center">
			<div class="col-lg-6">		
				<div class="alert alert-success" style="width: 100% !important">
					<h3 class="text-center"><i class="fa fa-money"></i> Total Pembiayaan <br><strong>Rp. <?php echo number_format($total_pembiayaan) ?></strong> </h3>
				</div>	
			</div>
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-warning" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-folder-open"></i> Simpanan Pokok<br><strong>Rp. <?php echo number_format($jumlah_pokok) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>
<div class="row mt">
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-info" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-book"></i> Total Tabungan <br><strong>Rp. <?php echo number_format($total_tabungan) ?></strong> </h3>
			</div>	
		</div>
	</div>
	
	<div align="center">
		<div class="col-lg-6">		
			<div class="alert alert-success" style="width: 100% !important">
				<h3 class="text-center"><i class="fa fa-download"></i> Simpanan Wajib <br><strong>Rp. <?php echo number_format($total_simpanan) ?></strong> </h3>
			</div>	
		</div>
	</div>
</div>
