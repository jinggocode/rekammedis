<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php include 'application/views/admin/_head.php'; ?>
    <?php include 'application/views/admin/_sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin_dashboard');?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('user/tambah');?>"><button type="button" class="btn btn-primary">&plus; Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php $no=1; foreach ($data as $user) { ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $user['nm_admin']; ?></td>
                      <td><?php echo $user['username']; ?></td>
                      <td><a href="<?php echo base_url()."index.php/user/view/".$user['kd_admin']; ?>">
                          <i class="fa fa-eye"></i></a>
                          <a href="<?php echo base_url()."index.php/user/edit/".$user['kd_admin']; ?>">
                          <span style="color:orange;"><i class="fa fa-pencil-square-o"></i></span></a>
                          <a href="<?php echo base_url()."index.php/user/hapus/".$user['kd_admin']; ?>">
                          <span style="color:red;"><i class="fa fa-close"></i></span></a>
                      </td>
                  </tr>
                  <?php } ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Pilihan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <?php include 'application/views/admin/_footer.php'; ?>