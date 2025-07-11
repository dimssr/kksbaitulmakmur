<?php include 'header.php' ?>
      
<?php include 'sidebar.php' ?>
      
<section id="main-content">
    <section class="wrapper site-min-height">
	  	<?php
	  	$page= @$_GET['page'];
		$action= @$_GET['action'];

		if($page == "jenis_produk"){
			if($action == ""){
				include 'jenis_produk/list.php';
			} elseif($action == "tambah"){
				include 'jenis_produk/tambah.php';
			} elseif($action == "edit"){
				include 'jenis_produk/edit.php';
			} elseif($action == "hapus"){
				include 'jenis_produk/hapus.php';
			}
		}elseif($page == "produk"){
			if($action == ""){
				include 'produk/list.php';
			} elseif($action == "tambah"){
				include 'produk/tambah.php';
			} elseif($action == "edit"){
				include 'produk/edit.php';
			} elseif($action == "hapus"){
				include 'produk/hapus.php';
			}
		}elseif($page == "profil"){
			include 'profil/edit.php';
		}elseif($page == "pengurus"){
			if($action == ""){
				include 'pengurus/list.php';
			} elseif($action == "tambah"){
				include 'pengurus/tambah.php';
			} elseif($action == "edit"){
				include 'pengurus/edit.php';
			} elseif($action == "hapus"){
				include 'pengurus/hapus.php';
			}
		} elseif($page == "gallery"){
			if($action == ""){
				include 'gallery/list.php';
			} elseif($action == "tambah"){
				include 'gallery/tambah.php';
			} elseif($action == "edit"){
				include 'gallery/edit.php';
			} elseif($action == "hapus"){
				include 'gallery/hapus.php';
			}
		} elseif($page == "konfigurasi"){
			include 'konfigurasi/edit.php';
		} else {
			include 'dasbor.php';
		}
	  	?>	
    </section>
</section>
<?php include 'footer.php' ?>

