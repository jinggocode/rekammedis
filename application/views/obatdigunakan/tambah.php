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
        Tambah Obat Digunakan
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
              <form method="post" enctype="multipart/form-data" action="<?php echo site_url('obatdigunakan/add')?>">
                
                <div class="form-group">
                  <label>Jumlah Digunakan</label>
                  <input type="text" name="jml_digunakan" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Tanggal Digunakan</label>
                  <input type="date" name="tgl_digunakan" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Enter ...">
                </div>


                <div class="form-group">
                  <label>Nama Obat</label>
                  <select name="kd_obat" class="form-control">
                    <?php 
                       echo '<option value=""> -- Nama Obat -- </option>';
                      foreach ($data_tampilan as $dt)
                       
                       {
                    ?>
                      <option value="<?php echo $dt['kd_obat'] ?>">
                        <?php echo $dt['nm_obat'] ?>    
                      </option>
                    <?php } ?>
                  </select>
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