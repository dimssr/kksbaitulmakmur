<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/bmt_logo.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>
                    
                  <li class="mt">
                      <a class="<?php if ($page == "dasbor") { echo "active"; } ?>" href="?page=dasbor">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php if ($page == "jenis_produk" or $page == "produk_bmt") { echo "active"; } ?>" >
                          <i class="fa fa-desktop"></i>
                          <span>Tentang BMT</span>
                      </a>
                      <ul class="sub">
                       
                          <li><a class="<?php if ($page == "profil") { echo "active"; } ?>" href="?page=profil">
                          <i class="fa fa-building"></i>
                          <span>Profil BMT</span>
                      </a></li>
                          <li><a class="<?php if ($page == "pengurus") { echo "active"; } ?>"  href="?page=pengurus"><i class="fa fa-users"></i> Pengurus BMT</a></li>
                          <li><a class="<?php if ($page == "gallery") { echo "active"; } ?>"  href="?page=gallery"><i class="fa fa-camera"></i> Gallery BMT</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php if ($page == "jenis_produk" or $page == "produk_bmt") { echo "active"; } ?>" >
                          <i class="fa fa-desktop"></i>
                          <span>Master Produk</span>
                      </a>
                      <ul class="sub">
                          <li><a class="<?php if ($page == "jenis_produk") { echo "active"; } ?>"  href="?page=jenis_produk">Jenis Produk BMT</a></li>
                          <li><a class="<?php if ($page == "produk") { echo "active"; } ?>"  href="?page=produk">Produk BMT</a></li>
                      </ul>
                  </li>
                  
                  <li class="">
                      <a class="" href="?page=konfigurasi">
                          <i class="fa fa-users"></i>
                          <span>Konfigurasi Web</span>
                      </a>
                  </li>                                     
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->