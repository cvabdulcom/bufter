<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BUFTER | Bunker Fresh Water Dermaga Tuks Pertamina</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/'); ?>/img/favicon.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/css/jquery-ui.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/skins/_all-skins.min.css'); ?>">

  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script> -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <script src="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.css'); ?>" />

  <script src="<?php echo base_url('/assets/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/js/jquery-ui.js'); ?>"></script>

  <!-- DataTables -->
  <script src="<?php echo base_url('/assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>">
  </script>
  <script
    src="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>">
  </script>

  <!-- Angularjs -->
  <!-- <script src="<?php //echo base_url('/assets/angularjs/angular.min.js'); ?>"></script>
  <script src="<?php //echo base_url('/assets/angularjs/angular-validate.min.js'); ?>"></script> -->

  <!-- Google Drive -->
  <link rel="stylesheet" type="text/css" media="screen"
    href="<?php echo base_url('/assets/backend/googledrive/upload.css'); ?>" />
  <script src="<?php echo base_url('/assets/backend/googledrive/main.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/googledrive/upload.js'); ?>"></script>
  <!-- Google Drive -->

  <!-- Date Range -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Date Range -->
  <style type="text/css">
    .load-container {
      position: relative;
      width: 240px;
      height: 240px;
      margin: 0 auto;
      overflow: hidden;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -khtml-user-select: none;
      user-select: none;
      box-sizing: border-box;
    }

    .load-container:before {
      content: 'Loading';
      display: block;
      position: absolute;
      bottom: 103px;
      font-size: 14px;
      line-height: 200%;
      text-align: center;
      left: 0;
      right: 0;
      color: #7d7f80;
      box-sizing: border-box;
    }

    .load1 .loader {
      border-radius: 50%;
      font-size: 12px !important;
      width: 6em;
      height: 6em;
      margin: 7em auto;
      position: relative;
      text-indent: -9999em;
      border: 0.2em solid #e3e3e3;
      border-left: 0.2em solid #303233;
      transform: translateZ(0);
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      -o-transform: translateZ(0);
      -moz-transform: translateZ(0);
      animation: load 0.85s infinite linear;
      -o-animation: load 0.85s infinite linear;
      -webkit-animation: load 0.85s infinite linear;
      -moz-animation: load 0.85s infinite linear;
    }

    @-ms-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-moz-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-webkit-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @-o-keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }

    @keyframes load {
      0% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -moz-transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -moz-transform: rotate(360deg)
      }
    }
  </style>

</head>

<body class="hold-transition sidebar-mini skin-blue-light fixed">
  <div class="wrapper">
    <header class="main-header">

      <!-- Logo -->
      <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/'); ?>img/logo-login.png" alt="" class="img-fluid" height="30" width="100"></a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" class="user-image"
                  alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama_bufter'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" class="img-circle"
                    alt="User Image">
                  <p>
                    <?php echo $this->session->userdata('nama_bufter'); ?>
                    <small>
                      Ships
                    </small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

    </header>