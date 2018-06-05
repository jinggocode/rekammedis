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
        Edit Pemeriksaan
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
              <form method="post" enctype="multipart/form-data" action="<?php echo site_url('pemeriksaan/updatedata')?>">
                  <input type="hidden" name="kd_pem" value="<?php echo $edit[0]->kd_pem;?>" class="form-control" placeholder="Enter ...">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tgl" value="<?php echo $edit[0]->tgl;?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Keluhan</label>
                  <input type="text" name="keluhan" class="form-control" value="<?php echo $edit[0]->keluhan;?>" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Pemeriksaan</label>
                  <input type="text" name="pemeriksaan" value="<?php echo $edit[0]->pemeriksaan;?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Terapi</label>
                  <input type="text" name="terapi" class="form-control" value="<?php echo $edit[0]->terapi;?>" placeholder="Enter ...">
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