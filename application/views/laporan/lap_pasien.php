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
        Pemeriksaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin_dashboard');?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('pemeriksaan/tambah');?>"><button type="button" class="btn btn-primary">&plus; Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Keluhan</th>
                  <th>Pemeriksaan</th>
                  <th>Terapi</th>
                  <th>Nama Pasien</th>
                  <th>Penyakit</th>
                  <th>Admin</th>
                  <th>Obat Digunakan</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php $no=1; foreach ($data as $pemeriksaan) { ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $pemeriksaan['tgl']; ?></td>
                      <td><?php echo $pemeriksaan['keluhan']; ?></td>
                      <td><?php echo $pemeriksaan['pemeriksaan']; ?></td>
                      <td><?php echo $pemeriksaan['terapi']; ?></td>
                      <td><?php echo $pemeriksaan['no_rm']; ?></td>
                      <td><?php echo $pemeriksaan['kd_penyakit']; ?></td>
                      <td><?php echo $pemeriksaan['kd_admin']; ?></td>
                      <td><?php echo $pemeriksaan['kd_obat_digunakan']; ?></td>
                      <td><a href="<?php echo base_url()."index.php/pemeriksaan/view/".$pemeriksaan['kd_pem']; ?>">
                          <i class="fa fa-eye"></i></a>
                          <a href="<?php echo base_url()."index.php/pemeriksaan/edit/".$pemeriksaan['kd_pem']; ?>">
                          <span style="color:orange;"><i class="fa fa-pencil-square-o"></i></span></a>
                          <a href="<?php echo base_url()."index.php/pemeriksaan/hapus/".$pemeriksaan['kd_pem']; ?>">
                          <span style="color:red;"><i class="fa fa-close"></i></span></a>
                      </td>
                  </tr>
                  <?php } ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                   <th>No</th>
                  <th>Tanggal</th>
                  <th>Keluhan</th>
                  <th>Pemeriksaan</th>
                  <th>Terapi</th>
                  <th>Nama Pasien</th>
                  <th>Penyakit</th>
                  <th>Admin</th>
                  <th>Obat Digunakan</th>
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