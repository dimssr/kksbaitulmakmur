<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('') ?>/assets/img/bmt_logo.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nm_lengkap'] ?><br>
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
                    <a class="<?php if ($page == "tabungan_nasabah") { echo "active"; } ?>" href="?page=tabungan_nasabah">
                          <i class="fa fa-book"></i>
                          <span>Tabungan Nasabah</span>
                      </a>
                  </li>                             
                  
                  <!--<li>
                    <a class="<?php if ($page == "pembiayaan_nasabah") { echo "active"; } ?>" href="?page=pembiayaan_nasabah">
                          <i class="fa fa-money"></i>
                          <span>Pembiayaan Nasabah</span>
                      </a>
                    </li>-->  

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