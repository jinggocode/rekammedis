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
        Pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin_dashboard');?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('pasien/tambah');?>"><button type="button" class="btn btn-primary">&plus; Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tempat, Tgl Lahir</th>
                  <th>jenis Kelamin</th>
                  <th>Prodi</th>
                  <th>No Hp</th>
                  <th>Awal Periksa</th>
                  <th>Alergi Obat</th>
                  <th>Riwayat Penyakit</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php $no=1; foreach ($data as $pasien) { ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $pasien['nama']; ?></td>
                      <td><?php echo $pasien['tempat_lahir']; ?>, <?php echo $pasien['tgl_lahir']; ?></td>
                       <td><?php echo $pasien['jns_kelamin']; ?></td>
                      <td><?php echo $pasien['prodi']; ?></td>
                       <td><?php echo $pasien['no_hp']; ?></td>
                      <td><?php echo $pasien['awal_periksa']; ?></td>
                       <td><?php echo $pasien['alergi_obat']; ?></td>
                      <td><?php echo $pasien['riwayat_penyakit']; ?></td>
                      <td><a href="<?php echo base_url()."index.php/pasienj/view/".$pasien['no_rm']; ?>">
                          <i class="fa fa-eye"></i></a>
                          <a href="<?php echo base_url()."index.php/pasien/edit/".$pasien['no_rm']; ?>">
                          <span style="color:orange;"><i class="fa fa-pencil-square-o"></i></span></a>
                          <a href="<?php echo base_url()."index.php/pasien/hapus/".$pasien['no_rm']; ?>">
                          <span style="color:red;"><i class="fa fa-close"></i></span></a>
                      </td>
                  </tr>
                  <?php } ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tempat, Tgl Lahir</th>
                  <th>jenis Kelamin</th>
                  <th>Prodi</th>
                  <th>No Hp</th>
                  <th>Awal Periksa</th>
                  <th>Alergi Obat</th>
                  <th>Riwayat Penyakit</th>
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