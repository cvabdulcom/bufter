<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register | Bunker Fresh Water Dermaga Tuks Pertamina</title>
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
  <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/'); ?>img/logo.png" alt="" class="img-fluid" height="50" width="140"></a>
  </div>
  <!-- /.login-logo -->
  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?php echo base_url('login/simpan_register'); ?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Ship Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="username" name="username" placeholder="Email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <div class="icheckbox_square-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url('login'); ?>" class="text-center">Saya punya akun</a>
  </div>
  <!-- /.login-box-body -->
</div>
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