        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ATMA AUTO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('NAMA_PEGAWAI');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>

                <ul class="nav side-menu">

                  <?php if($this->session->userdata('NAMA_ROLE')==='Admin'):?>

                      <li><a href="<?php echo site_url('Page/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                      
                      <li><a><i class="fa fa-desktop"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a>Penjualan</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo site_url('Page/input_jasa_service');?>">Input Data Jasa Service</a></li>
                          <li><a href="<?php echo site_url('Page/input_supplier'); ?>">Input Data Supplier</a></li>
                          <li><a href="<?php echo site_url('Page/input_customer'); ?>">Input Customer</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a>Laporan Penjualan</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-bar-chart-o"></i> Gudang <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a>Stok Barang</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a>Cooming Soon</a></li>
                          <li><a>Cooming Soon</a></li>
                        </ul>
                      </li>

                  <?php endif;?>

                  <?php if($this->session->userdata('NAMA_ROLE')==='Customer Service'):?>

                    <li><a href="<?php echo site_url('Page/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>

                    <li><a><i class="fa fa-desktop"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a>Penjualan</a></li>
                      </ul>
                    </li>
                  <?php endif;?>  

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('Logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        