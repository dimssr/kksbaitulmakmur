<?php include 'header.php' ?>
      
<?php include 'sidebar.php' ?>
      
<section id="main-content">
    <section class="wrapper site-min-height" style="background-color: #f0fff0">
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
		} elseif($page == "admin-user"){
			if($action == ""){
				include 'admin-user/list.php';
			} elseif($action == "tambah"){
				include 'admin-user/tambah.php';
			} elseif($action == "edit"){
				include 'admin-user/edit.php';
			} elseif($action == "hapus"){
				include 'admin-user/hapus.php';
			}
		} elseif($page == "anggota"){
			if($action == ""){
				include 'anggota/list.php';
			} elseif($action == "tambah"){
				include 'anggota/tambah.php';
			} elseif($action == "edit"){
				include 'anggota/edit.php';
			} elseif($action == "hapus"){
				include 'anggota/hapus.php';
			}
		} elseif($page == "nasabah"){
			if($action == ""){
				include 'nasabah/list.php';
			} elseif($action == "tambah"){
				include 'nasabah/tambah.php';
			} elseif($action == "edit"){
				include 'nasabah/edit.php';
			} elseif($action == "hapus"){
				include 'nasabah/hapus.php';
			}
		} elseif($page == "tabungan_anggota"){
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
		} elseif($page == "tabungan_nasabah"){
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
		} elseif($page == "simpanan_utama"){
			if($action == ""){
				include 'simpanan_utama/list.php';
			} elseif($action == "tambah"){
				include 'simpanan_utama/tambah.php';
			} elseif($action == "detail"){
				include 'simpanan_utama/detail.php';
			} elseif($action == "hapus"){
				include 'simpanan_utama/hapus.php';
			} 
		} elseif($page == "kas_masuk"){
			if($action == ""){
				include 'kas_masuk/list.php';
			} elseif($action == "tambah"){
				include 'kas_masuk/tambah.php';
			} elseif($action == "detail"){
				include 'kas_masuk/detail.php';
			} elseif($action == "hapus"){
				include 'kas_masuk/hapus.php';
			}
		} elseif($page == "kas_keluar"){
			if($action == ""){
				include 'kas_keluar/list.php';
			} elseif($action == "tambah"){
				include 'kas_keluar/tambah.php';
			} elseif($action == "detail"){
				include 'kas_keluar/detail.php';
			} elseif($action == "hapus"){
				include 'kas_keluar/hapus.php';
			}elseif ($action=="rekap_kas") {
				include 'kas_keluar/rekap_kas.php';
			}

		}elseif($page== "rekap_kas"){
			if($action == ""){
				include 'rekap_kas/list.php';
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
			} elseif($action == "cek_bayar") {
				include 'simpanan_anggota/cek_bayar.php';
			}
		}elseif($page == "simpanan_lain"){
			if($action == ""){
				include 'simpanan_lain/list.php';
			} elseif($action == "tambah"){
				include 'simpanan_lain/tambah.php';
			} elseif($action == "detail"){
				include 'simpanan_lain/detail.php';
			} elseif($action == "hapus"){
				include 'simpanan_lain/hapus.php';
			} 
		}elseif($page == "simpanan_lain"){
			if($action == ""){
				include 'simpanan_lain/list.php';
			} elseif($action == "tambah"){
				include 'simpanan_lain/tambah.php';
			} elseif($action == "detail"){
				include 'simpanan_lain/detail.php';
			} elseif($action == "hapus"){
				include 'simpanan_lain/hapus.php';
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
			} elseif ($action == "cek_blm_lunas") {
				include 'pembiayaan_anggota/cek_blm_lunas.php';
			} elseif ($action == "kwitansi") {
				include 'pembiayaan_anggota/kwitansi.php';
			}
		}elseif($page == "pembiayaan_nasabah"){
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
			}elseif ($action == "cek_blm_lunas") {
				include 'pembiayaan_nasabah/cek_blm_lunas.php';
			}
		}else {
			include 'dasbor.php';
		}
	  	?>	
    </section>
</section>
<?php include 'footer.php' ?>

