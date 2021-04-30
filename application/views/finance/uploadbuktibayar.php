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
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">MENU NAVIGATION</li>
      <li class="active">
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
<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $this->db->query("SELECT * FROM tbl_masterrequest WHERE id='$id'");
  }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Upload Bukti Pembayaran
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Upload Bukti Pembayaran</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
      <div class="box-header">
        <button class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#datarequest">Data Request</button>
      </div>
      <form action="<?php echo base_url('dashboard/simpan_bukti_bayar'); ?>" method="POST" enctype='multipart/form-data'>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_of_ships">Name of Ships</label>
                <input type="text" class="form-control" name="name_of_ships" id="name_of_ships" placeholder="Write your ship" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_of_ships; } ?>" readonly>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="file_dokumen">Bukti Pembayaran</label>
                <input type="file" id="file_dokumen" name="file_dokumen" class="form-control">
                <input type="hidden" name="id_request" id="id_request" value="<?php if(isset($_GET['id'])){ echo $data->row()->id; } ?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo base_url('dashboard/tankticket'); ?>"><button class="btn btn-default pull-left" type="button" id="batal"><i class="fa fa-retweet"></i> Batal</button></a>
          <button class="btn btn-success pull-right" type="submit" id="button_simpan"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<div class="modal fade bd-example-modal-lg" id="datarequest">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <table class="table table-bordered table-hover" id="laporan">
          <thead>
            <tr class="bg-primary">
              <th class="text-center" width="10">No</th>
              <th class="text-center">Ships Name</th>
              <th class="text-center">Date Request</th>
              <th class="text-center">Jetty</th>
              <th class="text-center">Number of Jetty</th>
              <th class="text-center">Name of Captain</th>
              <th class="text-center"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no=0;
              $id_pengguna = $this->session->userdata('id_pengguna_bufter');
              foreach($this->db->query("SELECT * FROM tbl_masterrequest WHERE approve='YA' ORDER BY id DESC LIMIT 100")->result_array() as $tampil):
                $no++;
                $id = $tampil['id'];
                $id_pengguna = $tampil['id_pengguna'];
                $name_of_ships = $tampil['name_of_ships'];
                $jetty = $tampil['jetty'];
                $date_request = $tampil['date_request'];
                $nomination_mfo = $tampil['nomination_mfo'];
                $nomination_mfo = $tampil['nomination_mfo'];
                $nomination_fw = $tampil['nomination_fw'];
                $number_of_jetty = $tampil['number_of_jetty'];
                $name_of_captain = $tampil['name_of_captain'];
                $ships_status = $tampil['ships_status'];
                $cost_center = $tampil['cost_center'];
                $company_owner = $tampil['company_owner'];
                $nomination = $tampil['nomination'];
                $name_of_loading_master = $tampil['name_of_loading_master'];
                $date_respon = $tampil['date_respon'];
                $no_document = $tampil['no_document'];
                $reason = $tampil['reason'];
                $file_dokumen = $tampil['file_dokumen'];
                $approve = $tampil['approve'];
            ?>
              <tr>
                <td class="text-center"><?php echo $no; ?></td>
                <td class="text-left"><?php echo $name_of_ships; ?></td>
                <td class="text-center"><?php $new = strtotime($date_request); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                <td class="text-left"><?php echo $jetty; ?></td>
                <td class="text-center"><?php echo $number_of_jetty; ?></td>
                <td class="text-center"><?php echo $name_of_captain; ?></td>
                <td class="text-right" width="10">
                  <a href="<?php echo base_url('dashboard/uploadbuktibayar?id=').$id; ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button></a>                  
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>   
      </div>
    </div>
  </div>
</div>