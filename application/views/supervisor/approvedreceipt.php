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
          Supervisor
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
          <i class="fa fa-legal"></i> <span>Request Ships</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/tankticket'); ?>">
          <i class="fa fa-crop"></i> <span>Tank Ticket</span>
        </a>
      </li>
      <li class="active">
        <a href="<?php echo base_url('dashboard/approvedreceipt'); ?>">
          <i class="fa fa-object-ungroup"></i> <span>Approved Receipt</span>
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
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Approved Receipt
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Approved Receipt</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">        
        <div class="box box-primary">          
          <div class="box-body">                  
            <div class="col-md-12 form-horizontal table-responsive">
              <table class="table table-bordered table-hover" id="laporan">
                <thead>
                  <tr class="bg-primary">
                    <th class="text-center" width="10">No</th>
                    <th class="text-center">Ships Name</th>
                    <th class="text-center">Jetty</th>
                    <th class="text-center">Number of Jetty</th>
                    <th class="text-center">Name of Captain</th>
                    <th class="text-center" width="50">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach($this->db->query("SELECT * FROM tbl_masterrequest WHERE file_bukti_bayar != 'KOSONG' ORDER BY id DESC")->result_array() as $tampil):
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
                      $status_bukti_bayar = $tampil['status_bukti_bayar'];
                      $approve = $tampil['approve'];
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td class="text-left"><?php echo $name_of_ships; ?></td>
                    <td class="text-left"><?php echo $jetty; ?></td>
                    <td class="text-center"><?php echo $number_of_jetty; ?></td>
                    <td class="text-center"><?php echo $name_of_captain; ?></td>
                    <td class="text-right">
                      <div class="btn-group">
                        <a href="<?php echo base_url('dashboard/simpan_receipt?id=').$id."&status_bukti_bayar=YA"; ?>"><button class="btn btn-xs btn-success" <?php if($status_bukti_bayar == 'YA'){ echo "disabled"; } ?>><i class="fa fa-check"></i></button></a>
                        
                        <a href="<?php echo base_url('dashboard/simpan_receipt?id=').$id."&status_bukti_bayar=TIDAK"; ?>"><button class="btn btn-xs btn-danger" <?php if($status_bukti_bayar == 'TIDAK'){ echo "disabled"; } ?>><i class="fa fa-remove"></i></button></a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>    
            </div>   
          </div>                    
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->