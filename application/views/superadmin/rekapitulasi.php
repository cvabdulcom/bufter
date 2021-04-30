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
          Superadmin
        </a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/masterrequest'); ?>">
          <i class="fa fa-legal"></i> <span>Master Request</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/tankticket'); ?>">
          <i class="fa fa-crop"></i> <span>Tank Ticket</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/uploadbuktibayar'); ?>">
          <i class="fa fa-money"></i> <span>Bukti Bayar</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/uploaddokumen'); ?>">
          <i class="fa fa-upload"></i> <span>Upload Dokumen</span>
        </a>
      </li>
      <li class="active">
        <a href="<?php echo base_url('dashboard/rekapitulasi'); ?>">
          <i class="fa fa-inbox"></i> <span>Upload Rekapitulasi</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/datapengguna'); ?>">
          <i class="fa fa-users"></i> <span>Data Pengguna</span>
        </a>
      </li>
      <li class="header">REPORTING NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_masterrequest'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Request</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_tankticket'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Tank Ticket</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_pembayaran'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Pembayaran</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_dokumen'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Dokumen</span>
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
  <section class="content-header">
    <h1>
      Upload Rekapitulasi
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Upload Rekapitulasi</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
  <div class="box box-primary">
      <!-- /.box-header -->
      <form action="<?php echo base_url('dashboard/simpan_rekapitulasi'); ?>" method="POST" enctype='multipart/form-data'>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="-">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="file_dokumen">File Rekapitulasi</label>
                <input type="file" id="file_dokumen" name="file_dokumen" class="form-control">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo base_url('dashboard/rekapitulasi'); ?>"><button class="btn btn-default pull-left" type="button" id="batal"><i class="fa fa-retweet"></i> Batal</button></a>
          <button class="btn btn-success pull-right" type="submit" id="button_simpan"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->