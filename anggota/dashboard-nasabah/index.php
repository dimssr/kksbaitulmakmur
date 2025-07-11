<?php include 'header.php' ?>
      
<?php include 'sidebar.php' ?>
      
<section id="main-content">
    <section class="wrapper site-min-height">
	  	<?php
	  	$page= @$_GET['page'];
		$action= @$_GET['action'];

		if($page == "tabungan_nasabah"){
			if($action == ""){
				include 'tabungan_nasabah/list.php';
			} elseif($action == "tambah"){
				include 'tabungan_nasabah/tambah.php';
			} elseif($action == "detail"){
				include 'tabungan_nasabah/detail.php';
			} elseif($action == "hapus"){
				include 'tabungan_nasabah/hapus.php';
			} elseif ($action == "tambah_tabungan") {
				include 'tabungan_nasabah/tambah_tabungan.php';
			} elseif ($action == "tarik_tabungan") {
				include 'tabungan_nasabah/tarik_tabungan.php';
			}
		} elseif($page == "pembiayaan_nasabah"){
			if($action == ""){
				include 'pembiayaan_nasabah/list.php';
			} elseif($action == "tambah"){
				include 'pembiayaan_nasabah/tambah.php';
			} elseif($action == "detail"){
				include 'pembiayaan_nasabah/detail.php';
			} elseif($action == "hapus"){
				include 'pembiayaan_nasabah/hapus.php';
			} elseif ($action == "setoran") {
				include 'pembiayaan_nasabah/setor_pembiayaan.php';
			} elseif ($action == "detail_transaksi") {
				include 'pembiayaan_nasabah/detail_transaksi.php';
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

