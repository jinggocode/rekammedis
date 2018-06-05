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
        Tambah pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin_dashboard');?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" enctype="multipart/form-data" action="<?php echo site_url('pasien/add')?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" name="tgl_lahir" id="datepicker" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" name="jns_kelamin" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Prodi</label>
                  <input type="text" name="prodi" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>No. Hp</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Awal Periksa</label>
                  <input type="date" name="awal_periksa" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Alergi Obat</label>
                  <input type="text" name="alergi_obat" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Riwayat Penyakit</label>
                  <input type="text" name="riwayat_penyakit" class="form-control" placeholder="Enter ...">
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <?php include 'application/views/admin/_footer.php'; ?>