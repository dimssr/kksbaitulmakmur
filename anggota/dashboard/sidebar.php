<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href=""><img src="<?php echo base_url('') ?>/assets/img/bmt_logo.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nama_lengkap'] ?><br>
                    <div >                    
                    </div>
                  </h5>
                    
                  <li class="mt">
                      <a class="<?php if ($page == "dasbor") { echo "active"; } ?>" href="?page=dasbor">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                   <li class="">
                    <a class="<?php if ($page == "tabungan_anggota") { echo "active"; } ?>" href="?page=tabungan_anggota">
                          <i class="fa fa-book"></i>
                          <span>Tabungan Anggota</span>
                      </a>
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
                  
                  <li>
                    <a class="<?php if ($page == "pembiayaan_anggota") { echo "active"; } ?>" href="?page=pembiayaan_anggota">
                          <i class="fa fa-money"></i>
                          <span>Pembiayaan Anggota</span>
                      </a>
                    </li>  

                    <li>
                    <a class="<?php if ($page == "my_profile") { echo "active"; } ?>" href="?page=my_profile">
                          <i class="fa fa-user"></i>
                          <span>My Profile</span>
                      </a>
                    </li>                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->