<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Bunker Fresh Water Dermaga Tuks Pertamina</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link href="<?php echo base_url('assets/frontend/'); ?>/img/favicon.png" rel="icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/plugins/iCheck/square/blue.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/css/custom.css'); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="<?php //echo base_url('/'); ?>"><b>BUFTER</b></a> -->
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/'); ?>img/logo.png" alt="" class="img-fluid" height="50" width="140"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Bunker Fresh Water</p>
    <form action="<?php echo base_url('login/auth'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Username / Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Login</button>
        </div>
        <!-- /.col -->
      </div><br>
      <a href="<?php echo base_url(); ?>" class="text-center"><i class="fa fa-arrow-circle-o-left"></i> Back to home</a>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<input type="hidden" onclick="launch_toast()" id="message"/>
<!-- /.login-box -->
<!-- Message Box -->
<div id="toast"><div id="img"><i class="fa fa-remove"></i></div><div id="desc">Wrong! please try again.</div></div>
<!-- jQuery 3 -->
<script src="<?php echo base_url('/assets/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('/assets/backend/plugins/iCheck/icheck.min.js'); ?>"></script>
<!-- Custom Js -->
<script src="<?php echo base_url('/assets/backend/js/custom.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  $(document).ready(function(){
    $('#<?php echo $this->session->flashdata('msg'); ?>').trigger('click');
  });
</script>
</body>
</html>