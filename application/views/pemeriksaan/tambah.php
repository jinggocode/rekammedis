<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <?php include 'application/views/admin/_head.php'; ?>
    <?php include 'application/views/admin/_sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pemeriksaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin_dashboard'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" enctype="multipart/form-data" action="<?php echo site_url('pemeriksaan/add') ?>">
                <div class="row">
                  <div class="col-md-5">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tgl" class="form-control" placeholder="Enter ...">
                      </div>
                      <div class="form-group">
                        <label>Keluhan</label> 
                        <textarea name="keluhan" id="keluhan" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Pemeriksaan</label>
                        <input type="text" name="pemeriksaan" class="form-control" placeholder="Enter ...">
                      </div>
                      <div class="form-group">
                        <label>Terapi</label>
                        <input type="text" name="terapi" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Nomor RM</label>
                        <select name="no_rm" class="form-control select2">
                          <?php 
                          echo '<option value=""> -- Pasien -- </option>';
                          foreach ($data_rm as $dt) {
                            ?>
                            <option value="<?php echo $dt['no_rm'] ?>">
                              <?php echo $dt['nama'] ?>    
                            </option>
                          <?php 
                        } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Penyakit</label>
                        <select name="kd_penyakit" class="form-control select2">
                          <?php 
                          echo '<option value=""> -- Penyakit -- </option>';
                          foreach ($data_penyakit as $dt) {
                            ?>
                            <option value="<?php echo $dt['kd_penyakit'] ?>">
                              <?php echo $dt['nm_penyakit'] ?>    
                            </option>
                          <?php 
                        } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Admin</label>
                        <select name="kd_admin" class="form-control">
                          <?php 
                          echo '<option value=""> -- Admin -- </option>';
                          foreach ($data_admin as $dt) {
                            ?>
                            <option value="<?php echo $dt['kd_admin'] ?>">
                              <?php echo $dt['nm_admin'] ?>    
                            </option>
                          <?php 
                        } ?>
                        </select>
                      </div>
               
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  <div class="col-md-7"> 
                    <div class="form-group">
                      <label>Obat Digunakan</label>
                      <select name="kd_obat_digunakan" class="form-control select2">
                        <?php 
                          echo '<option value=""> -- Pilih Obat Digunakan -- </option>';
                          foreach ($data_obat_digunakan as $dt){
                        ?>
                          <option value="<?php echo $dt['kd_obat_digunakan'] ?>">
                            <?php echo $dt['kd_obat'] ?>    
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
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