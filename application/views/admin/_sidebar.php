
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('adminlte/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row['nm_admin']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo site_url('admin_dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('user');?>">
            <i class="fa fa-dashboard"></i> <span>User</span>
          </a>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Pemeriksaan</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('pasien');?>">
                <i class="fa fa-circle-o"></i> <span>Data Pasien</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('pemeriksaan');?>">
                <i class="fa fa-circle-o"></i> <span>Periksa Pasien</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('');?>">
                <i class="fa fa-circle-o"></i> <span>Alergi Obat</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('obatdigunakan');?>">
                <i class="fa fa-circle-o"></i> <span>Obat Digunakan</span>
              </a>
            </li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Obat</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('jenisobat');?>">
                <i class="fa fa-circle-o"></i> <span>Jenis Obat</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('obat');?>">
                <i class="fa fa-circle-o"></i> <span>Data Obat</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('obatmasuk');?>">
                <i class="fa fa-circle-o"></i> <span>Obat Masuk</span>
              </a>
          </li>
        </ul>
      </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Penyakit</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('penyakit');?>">
                <i class="fa fa-circle-o"></i> <span>Data Penyakit</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('riwayatpenyakit');?>">
                <i class="fa fa-circle-o"></i> <span>Riwayat Penyakit</span>
              </a>
          </li>
        </ul>
      </li>

    <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li>
          <a href="<?php echo site_url('lap_pasien');?>">
            <i class="fa fa-circle-o"></i> <span>Laporan Data Pasien</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('');?>">
            <i class="fa fa-circle-o"></i> <span>Laporan Pemeriksaan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('');?>">
            <i class="fa fa-circle-o"></i> <span>Laporan Stok Obat</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('');?>">
            <i class="fa fa-circle-o"></i> <span>Obat Keluar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('');?>">
            <i class="fa fa-circle-o"></i> <span>Obat Masuk</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('');?>">
            <i class="fa fa-circle-o"></i> <span>Data Stok Obat</span>
          </a>
        </li>
      </ul>
    </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>