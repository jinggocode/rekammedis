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
        Edit Obat Masuk
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
              <form method="post" enctype="multipart/form-data" action="<?php echo site_url('obatmasuk/updatedata')?>">
                  <input type="hidden" name="kd_obat_masuk" value="<?php echo $edit[0]->kd_obat_masuk;?>" class="form-control" placeholder="Enter ...">
                <div class="form-group">
                  <label>Jumlah Masuk</label>
                  <input type="text" name="jml_masuk" value="<?php echo $edit[0]->jml_masuk;?>" class="form-control" placeholder="Enter ...">
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tgl_masuk" value="<?php echo $edit[0]->tgl_masuk;?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" value="<?php echo $edit[0]->keterangan;?>" placeholder="Enter ...">
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