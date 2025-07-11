<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            
            <p class="centered"><a href=""><img src="<?php echo base_url('') ?>/assets/img/bmt_logo.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo $_SESSION['nama_admin'] ?><br>
              <div >
                <small class="text-danger" style="background-color: white" ><?php echo $_SESSION['level_admin'] ?></small>
              </div>
            </h5>
            
            <li class="mt">
              <a class="<?php if ($page == "dasbor") { echo "active"; } ?>" href="?page=dasbor">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <?php if($_SESSION['level_admin']=="Administrator") { ?>
              <li class="sub-menu">
                <a href="javascript:;" class="<?php if ($page == "jenis_produk" or $page == "produk_bmt") { echo "active"; } ?>" >
                  <i class="fa fa-users"></i>
                  <span>Master User</span>
                </a>
                <ul class="sub">                       
                  <li><a class="<?php if ($page == "admin-user") { echo "active"; } ?>" href="?page=admin-user">
                    <i class="fa fa-building"></i>
                    <span>Admin/User</span>
                  </a></li>
                  <li><a class="<?php if ($page == "anggota") { echo "active"; } ?>"  href="?page=anggota"><i class="fa fa-users"></i> Anggota</a></li>
                  <li><a class="<?php if ($page == "nasabah") { echo "active"; } ?>"  href="?page=nasabah"><i class="fa fa-camera"></i> Nasabah</a></li>
                </ul>
              </li>

              <li class="sub-menu">
                <a href="javascript:;" class="<?php if ($page == "jenis_produk" or $page == "produk_bmt") { echo "active"; } ?>" >
                  <i class="fa fa-desktop"></i>
                  <span>Tentang KKS Baitul Makmur</span>
                </a>
                <ul class="sub">                       
                  <li>
                    <!--a class="<?php if ($page == "profil") { echo "active"; } ?>" href="?page=profil">
                      <i class="fa fa-building"></i>
                      <span>Profil Kopsyah</span>
                    </a-->
                  </li>
                  <li><a class="<?php if ($page == "pengurus") { echo "active"; } ?>"  href="?page=pengurus"><i class="fa fa-users"></i> Pengurus KKS Baitul Makmur</a></li>
                  <li><!--a class="<?php if ($page == "gallery") { echo "active"; } ?>"  href="?page=gallery"><i class="fa fa-camera"></i> Gallery KKS Baitul Makmur</a--></li>
                  <li><a class="<?php if ($page == "konfigurasi") { echo "active"; } ?>" href="?page=konfigurasi">
                    <i class="fa fa-users"></i>
                    <span>Konfigurasi Web</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "jenis_produk" or $page == "produk_bmt") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Master Produk</span>
              </a>
              <ul class="sub">
                <li><a class="<?php if ($page == "jenis_produk") { echo "active"; } ?>"  href="?page=jenis_produk">Jenis Produk KKS Baitul Makmur</a></li>
                <li><a class="<?php if ($page == "produk") { echo "active"; } ?>"  href="?page=produk">Produk KKS Baitul Makmur</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "tabungan_anggota" or $page == "tabungan_nasabah") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Tabungan</span>
              </a>
              <ul class="sub">
               
                <li><a class="<?php if ($page == "tabungan_anggota") { echo "active"; } ?>" href="?page=tabungan_anggota">
                  <i class="fa fa-building"></i>
                  <span>Tabungan Anggota</span>
                </a></li>
                <li><a class="<?php if ($page == "tabungan_nasabah") { echo "active"; } ?>"  href="?page=tabungan_nasabah"><i class="fa fa-users"></i> Tabungan Nasabah</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "simpanan_pokok" or $page == "simpanan_anggota") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Simpanan Anggota</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "simpanan_pokok") { echo "active"; } ?>" href="?page=simpanan_pokok">
                    <i class="fa fa-building"></i>
                    <span>Simpanan Pokok</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "simpanan_anggota") { echo "active"; } ?>"  href="?page=simpanan_anggota"><i class="fa fa-users"></i> Simpanan Wajib</a>
                </li> 
                <li>
                  <a class="<?php if ($page == "simpanan_lain") { echo "active"; } ?>"  href="?page=simpanan_lain"><i class="fa fa-users"></i> Simpanan Lain</a>
                </li> 
              </ul>
            </li>
            
            <li class="">
              <a class="<?php if ($page == "pembiayaan_anggota") { echo "active"; } ?>" href="?page=pembiayaan_anggota">
                <i class="fa fa-money"></i>
                <span>Pembiayaan Anggota</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "kas_masuk" or $page == "kas_keluar") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Kas KKS Baitul Makmur</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "kas_masuk") { echo "active"; } ?>" href="?page=kas_masuk">
                    <i class="fa fa-building"></i>
                    <span>Kas Masuk</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "kas_keluar") { echo "active"; } ?>"  href="?page=kas_keluar"><i class="fa fa-users"></i> Kas Keluar</a>
                </li>   
                <li>
                  <a class="<?php if ($page == "rekap_kas") { echo "active"; } ?>"  href="?page=rekap_kas"><i class="fa fa-users"></i> Rekap Kas</a>
                </li>                          
              </ul>
            </li>
          <?php } elseif ($_SESSION['level_admin']=="Petugas") {   ?>
            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "tabungan_anggota" or $page == "tabungan_nasabah") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Tabungan</span>
              </a>
              <ul class="sub">
               
                <li><a class="<?php if ($page == "tabungan_anggota") { echo "active"; } ?>" href="?page=tabungan_anggota">
                  <i class="fa fa-building"></i>
                  <span>Tabungan Anggota</span>
                </a></li>
                <li><a class="<?php if ($page == "tabungan_nasabah") { echo "active"; } ?>"  href="?page=tabungan_nasabah"><i class="fa fa-users"></i> Tabungan Nasabah</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "simpanan_pokok" or $page == "simpanan_anggota") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Simpanan Anggota</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "simpanan_pokok") { echo "active"; } ?>" href="?page=simpanan_pokok">
                    <i class="fa fa-building"></i>
                    <span>Simpanan Pokok</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "simpanan_anggota") { echo "active"; } ?>"  href="?page=simpanan_anggota"><i class="fa fa-users"></i> Simpanan Wajib</a>
                </li>                          
              </ul>
            </li>

            <li class="">
              <a class="<?php if ($page == "pembiayaan_anggota") { echo "active"; } ?>" href="?page=pembiayaan_anggota">
                <i class="fa fa-money"></i>
                <span>Pembiayaan Anggota</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "kas_masuk" or $page == "kas_keluar") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Kas Kopsyah</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "kas_masuk") { echo "active"; } ?>" href="?page=kas_masuk">
                    <i class="fa fa-building"></i>
                    <span>Kas Masuk</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "kas_keluar") { echo "active"; } ?>"  href="?page=kas_keluar"><i class="fa fa-users"></i> Kas Keluar</a>
                </li>   
                <li>
                  <a class=""  href="?page=rekap_kas"><i class="fa fa-users"></i> Rekap Kas</a>
                </li>                          
              </ul>
            </li>
          <?php } elseif ($_SESSION['level_admin']=="Kepala") {?>
            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "simpanan_pokok" or $page == "simpanan_anggota") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Simpanan Anggota</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "simpanan_pokok") { echo "active"; } ?>" href="?page=simpanan_pokok">
                    <i class="fa fa-building"></i>
                    <span>Simpanan Pokok</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "simpanan_anggota") { echo "active"; } ?>"  href="?page=simpanan_anggota"><i class="fa fa-users"></i> Simpanan Wajib</a>
                </li>                          
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "tabungan_anggota" or $page == "tabungan_nasabah") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Tabungan</span>
              </a>
              <ul class="sub">
               
                <li><a class="<?php if ($page == "tabungan_anggota") { echo "active"; } ?>" href="?page=tabungan_anggota">
                  <i class="fa fa-building"></i>
                  <span>Tabungan Anggota</span>
                </a></li>
                <li><a class="<?php if ($page == "tabungan_nasabah") { echo "active"; } ?>"  href="?page=tabungan_nasabah"><i class="fa fa-users"></i> Tabungan Nasabah</a></li>
              </ul>
            </li>

            <li class="">
              <a class="<?php if ($page == "pembiayaan_anggota") { echo "active"; } ?>" href="?page=pembiayaan_anggota">
                <i class="fa fa-money"></i>
                <span>Pembiayaan Anggota</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="<?php if ($page == "kas_masuk" or $page == "kas_keluar") { echo "active"; } ?>" >
                <i class="fa fa-desktop"></i>
                <span>Kas Kopsyah</span>
              </a>
              <ul class="sub">
               
                <li>
                  <a class="<?php if ($page == "kas_masuk") { echo "active"; } ?>" href="?page=kas_masuk">
                    <i class="fa fa-building"></i>
                    <span>Kas Masuk</span>
                  </a>
                </li>
                <li>
                  <a class="<?php if ($page == "kas_keluar") { echo "active"; } ?>"  href="?page=kas_keluar"><i class="fa fa-users"></i> Kas Keluar</a>
                </li>   
                <li>
                  <a class=""  href="?page=rekap_kas"><i class="fa fa-users"></i> Rekap Kas</a>
                </li>                          
              </ul>
            </li>
          <?php } ?>
                  <!--<li>
                      <a class="<?php if ($page == "simpanan_utama") { echo "active"; } ?>" href="?page=simpanan_utama">
                          <i class="fa fa-dashboard"></i>
                          <span>Simpanan Utama</span>
                      </a>
                    </li>-->
                  </ul>
                  <!-- sidebar menu end-->
                </div>
              </aside>
      <!--sidebar end-->