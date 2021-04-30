<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" height="160" width="160"
          class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama_bufter'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          Finance
        </a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/uploadbuktibayar'); ?>">
          <i class="fa fa-upload"></i> <span>Upload Bukti Bayar</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/rekapitulasi'); ?>">
          <i class="fa fa-file"></i> <span>Rekapitulasi</span>
        </a>
      </li>
      <li class="header">SETTING NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_status'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Status</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_rekapitulasi'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Rekapitulasi</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-ship"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Request</span>
            <span class="info-box-number"><?php echo $this->db->query("SELECT COUNT(*) AS jumlah FROM tbl_masterrequest WHERE approve='YA'")->row()->jumlah; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-close"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Not Uploaded</span>
            <span class="info-box-number"><?php echo $this->db->query("SELECT COUNT(*) AS jumlah FROM tbl_masterrequest WHERE file_bukti_bayar='KOSONG' AND approve='YA'")->row()->jumlah; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uploaded Payment</span>
            <span class="info-box-number"><?php echo $this->db->query("SELECT COUNT(*) AS jumlah FROM tbl_masterrequest WHERE file_bukti_bayar!='KOSONG' AND approve='YA'")->row()->jumlah; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-file-excel-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">File Rekapitulasi</span>
            <span class="info-box-number"><?php echo $this->db->query("SELECT COUNT(*) AS jumlah FROM tbl_rekapitulasi")->row()->jumlah; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->