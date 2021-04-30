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
      <li>
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
      <li class="active">
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
      Laporan Tankticket
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Laporan Tankticket</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-md-12">        
        <div class="box box-primary">
          <div class="box-header">
            <div class="col-md-3 table-responsive">
              <div class="input-group pull-left">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <?php
                    $first = date('Y-m-01');
                    $second = date('Y-m-d');
                    
                    $new1 = strtotime($first); $newDate1 = date('m/d/Y', $new1);
                    $new2 = strtotime($second); $newDate2 = date('m/d/Y', $new2);

                    $cek_tanggal_awal = $this->input->get('tanggal_awal');
                    $cek_tanggal_akhir = $this->input->get('tanggal_akhir');

                    if(isset($cek_tanggal_awal)){
                      $tanggal_awal = $this->input->get('tanggal_awal');
                      $tanggal_akhir = $this->input->get('tanggal_akhir');
                    }else{
                      $tanggal_awal = $first;
                      $tanggal_akhir = $second;
                    }
                ?>                
                <input type="text" class="form-control" name="daterange" value="<?php echo $newDate1; echo " - "; echo $newDate2; ?>" />
                <span class="input-group-btn">
                    <form method="GET" action="<?php echo base_url('dashboard/laporan_tankticket'); ?>">
                    <input type="hidden" name="tanggal_awal" id="tanggal_awal">
                    <input type="hidden" name="tanggal_akhir" id="tanggal_akhir">
                    <button type="submit" class="btn btn-primary btn-flat" id="button_search" disabled="disabled"><i class="fa fa-search"></i></button>
                    </form>  
                </span>
              </div>
            </div>
          </div>
          <div class="box-body chart-responsive">                  
            <div class="col-md-12 form-horizontal table-responsive">
              <table class="table table-bordered table-hover" id="laporan">
                <thead>
                  <tr class="bg-primary">
                    <th class="text-center" width="10">No</th>
                    <th class="text-center">Ships Name</th>
                    <th class="text-center">No Jetty</th>
                    <th class="text-center">Name Fresh Water</th>
                    <th class="text-center">No Tank</th>
                    <th class="text-center">Ukuran Stop</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Jenis</th>
                    <th class="text-center">Operator</th>
                    <th class="text-center">Approve</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    $id_pengguna = $this->session->userdata('id_pengguna_bufter');
                    foreach($this->db->query("SELECT * FROM tbl_tankticket WHERE date BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY id DESC")->result_array() as $tampil):
                      $no++;
                      $id = $tampil['id'];
                      $id_pengguna = $tampil['id_pengguna'];
                      $name_of_ships = $tampil['name_of_ships'];
                      $jetty_no = $tampil['jetty_no'];
                      $name_fresh_water =$tampil['name_fresh_water'];
                      $no_of_tank = $tampil['no_of_tank'];
                      $ukuran_stop = $tampil['ukuran_stop'];
                      $date = $tampil['date'];
                      $hours = $tampil['hours'];
                      $name_operator = $tampil['name_operator'];
                      $name_supervisor = $tampil['name_supervisor'];
                      $jenis = $tampil['jenis'];
                      $file_dokumen = $tampil['file_dokumen'];
                      $approve = $tampil['approve'];
                  ?>
                    <tr>
                      <td class="text-center"><?php echo $no; ?></td>
                      <td class="text-left"><?php echo $name_of_ships; ?></td>
                      <td class="text-left"><?php echo $jetty_no; ?></td>
                      <td class="text-left"><?php echo $name_fresh_water; ?></td>
                      <td class="text-left"><?php echo $no_of_tank; ?></td>
                      <td class="text-left"><?php echo $ukuran_stop; ?></td>
                      <td class="text-center"><?php $new = strtotime($date); $newDate = date('d/m/Y', $new);  echo $newDate." ".$hours; ?></td>
                      <td class="text-left"><?php echo $jenis; ?></td>
                      <td class="text-center"><?php echo $name_operator; ?></td>
                      <td class="text-right" width="10">
                        <?php if($approve == 'PROSES'){ ?>
                        <small class="label pull-right bg-yellow">Processed</small>
                        <?php }else if($approve == 'YA'){ ?>
                        <small class="label pull-right bg-green">Approved</small>
                        <?php }else if($approve == 'TIDAK'){ ?>
                        <small class="label pull-right bg-red">Rejected</small>
                        <?php } ?>
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
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'right'
  }, function(start, end, label) {
    $("#tanggal_awal").val(start.format('YYYY-MM-DD'));
    $("#tanggal_akhir").val(end.format('YYYY-MM-DD'));
    $("#tanggal_awal_egp").val(start.format('YYYY-MM-DD'));
    $("#tanggal_akhir_egp").val(end.format('YYYY-MM-DD'));    
    $('#button_search').attr('disabled', false);
  });
});
</script>