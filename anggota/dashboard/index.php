<?php include 'header.php' ?>
      
<?php include 'sidebar.php' ?>
      
<section id="main-content">
    <section class="wrapper site-min-height" style="background-color: #f0fff0">
	  	<?php
	  	$page= @$_GET['page'];
		$action= @$_GET['action'];

		if($page == "tabungan_anggota"){
			if($action == ""){
				include 'tabungan_anggota/list.php';
			} elseif($action == "tambah"){
				include 'tabungan_anggota/tambah.php';
			} elseif($action == "detail"){
				include 'tabungan_anggota/detail.php';
			} elseif($action == "hapus"){
				include 'tabungan_anggota/hapus.php';
			} elseif ($action == "tambah_tabungan") {
				include 'tabungan_anggota/tambah_tabungan.php';
			} elseif ($action == "tarik_tabungan") {
				include 'tabungan_anggota/tarik_tabungan.php';
			}
		} elseif($page == "simpanan_pokok"){
			if($action == ""){
				include 'simpanan_pokok/list.php';
			} elseif($action == "tambah"){
				include 'simpanan_pokok/tambah.php';
			} elseif($action == "detail"){
				include 'simpanan_pokok/detail.php';
			} elseif($action == "hapus"){
				include 'simpanan_pokok/hapus.php';
			} 

		}elseif($page == "simpanan_anggota"){
			if($action == ""){
				include 'simpanan_anggota/list.php';
			} elseif($action == "tambah"){
				include 'simpanan_anggota/tambah.php';
			} elseif($action == "detail"){
				include 'simpanan_anggota/detail.php';
			} elseif($action == "hapus"){
				include 'simpanan_anggota/hapus.php';
			} 
		}elseif($page == "pembiayaan_anggota"){
			if($action == ""){
				include 'pembiayaan_anggota/list.php';
			} elseif($action == "tambah"){
				include 'pembiayaan_anggota/tambah.php';
			} elseif($action == "detail"){
				include 'pembiayaan_anggota/detail.php';
			} elseif($action == "hapus"){
				include 'pembiayaan_anggota/hapus.php';
			} elseif ($action == "setoran") {
				include 'pembiayaan_anggota/setor_pembiayaan.php';
			} elseif ($action == "detail_transaksi") {
				include 'pembiayaan_anggota/detail_transaksi.php';
			}
		}elseif($page == "my_profile"){
			include 'my_profile.php';
		}else {
			include 'dasbor.php';
		}
	  	?>	
    </section>
</section>
<?php include 'footer.php' ?>

