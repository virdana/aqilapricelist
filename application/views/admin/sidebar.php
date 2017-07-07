 **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <?php
        $menu = $this->uri->segment(2);
        $submenu = ($this->uri->segment(3) == 'tambah' ? TRUE : FALSE);
      ?>
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="javascript:void(0)"><img src="<?php echo URL_IMG?>admin/ui-admin.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Aqila</h5>
                    
                  <!-- <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li> -->

                  <li class="sub-menu">
                      <a class="<?php echo ($menu=='scope')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-wpforms"></i>
                          <span>Scope &amp; Pricing</span>
                      </a>
                      <ul class="sub">
                            <li class="<?php echo ($menu=='scope' && !$submenu)?'active':''; ?>">
                                <a href="<?php echo base_url();?>f-admin/scope"><i class="fa fa-gear"></i> Scope &amp; Pricing</a>
                            </li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php echo ($menu=='upgrade')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Upgrade Order</span>
                      </a>
                      <ul class="sub">
                            <li class="<?php echo ($menu=='upgrade' && !$submenu)?'active':''; ?>">
                                <a href="<?php echo base_url();?>f-admin/upgrade">Upgrade Order</a>
                            </li>
                            <!-- <li class="<?php echo ($menu=='daftar' && !$submenu)?'active':''; ?>">
                                <a href="<?php echo base_url();?>f-admin/upgrade/daftar">Daftar Upgrade</a>
                            </li>
                            <li class="<?php echo ($menu=='upgrade' && $submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/upgrade/tambah"><i class="fa fa-plus"></i> Upgrade Baru</a>
                            </li> -->
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php echo ($menu=='mediacetak')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Media Cetak</span>
                      </a>
                      <ul class="sub">
                            <!-- <li class="<?php echo ($menu=='mediacetak' && !$submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/mediacetak">Media Cetak</a>
                            </li> -->
                            <li class="<?php echo ($menu=='mediacetak' && !$submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/mediacetak">Daftar Media Cetak</a>
                            </li>
                            <!-- <li class="<?php echo ($menu=='mediacetak' && $submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/mediacetak/tambah"><i class="fa fa-plus"></i> Media Cetak Baru</a>
                            </li> -->
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="<?php echo ($menu=='pesanan')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Pesanan</span>
                      </a>
                      <ul class="sub">
                            <li class="<?php echo ($menu=='pesanan' && !$submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/pesanan">Daftar Pesanan</a>
                            </li>
                            <!-- <li class="<?php echo ($menu=='pesanan' && $submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/pesanan/tambah"><i class="fa fa-plus"></i> Pesanan Baru</a>
                            </li> -->
                      </ul>
                  </li>

                  <!-- <li class="sub-menu">
                      <a class="<?php echo ($menu=='email')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-envelope"></i>
                          <span>Email</span>
                      </a>
                      <ul class="sub">
                            <li class="<?php echo ($menu=='email' && !$submenu)?'active':''; ?>">
                                <a href="<?php echo base_url();?>f-admin/email"><i class="fa fa-edit"></i> Setting Email</a>
                            </li>
                      </ul>
                  </li> -->

                  <!-- <li class="sub-menu">
                      <a class="<?php echo ($menu=='pemesan')?'active':''; ?>" href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Pemesan</span>
                      </a>
                      <ul class="sub">
                            <li class="<?php echo ($menu=='pemesan' && !$submenu)?'active':''; ?>">
                                <a  href="<?php echo base_url();?>f-admin/pemesan/">Daftar Pemesan</a>
                            </li>
                      </ul>
                  </li> -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end