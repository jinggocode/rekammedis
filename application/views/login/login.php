<?php include '_head.php';  ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url('home');?>"><b>REKAMEDIS</b> Poliklinik</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login terlebih dahulu</p>

    <form  role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('login/auth'); ?>">
      <div class="form-group has-feedback">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" autofocus="autofocus" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- ATAU -</p>
    </div>

    <a href="#">Lupa Password ?</a><br>
    <a href="<?php echo site_url('login/daftar'); ?>" class="text-center">Saya belum memiliki akun ?</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php include '_footer.php';  ?>