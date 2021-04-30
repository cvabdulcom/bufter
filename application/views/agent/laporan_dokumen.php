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
          Agent
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
        <a href="<?php echo base_url('dashboard/uploaddokumen'); ?>">
          <i class="fa fa-upload"></i> <span>Upload Dokumen</span>
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
      <li class="active">
        <a href="<?php echo base_url('dashboard/laporan_dokumen'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Dokumen</span>
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
      Laporan Dokumen
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Laporan Dokumen</li>
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
                    <form method="GET" action="<?php echo base_url('mainact/laporan_dokumen'); ?>">
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
                    <th class="text-center">Jetty</th>
                    <th class="text-center">Number of Jetty</th>
                    <th class="text-center">Name of Captain</th>
                    <th class="text-center" width="10">Dokumen</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // foreach($laporandokumen->result_array() as $tampil):
                    //   $pemborong = $tampil['pemborong'];
                    //   $nama_dokumen = $tampil['nama_dokumen'];
                    //   $file = $tampil['file'];
                    //   $keterangan = $tampil['keterangan'];
                    //   $nama_pengguna = $tampil['nama_pengguna'];
                    //   $tanggal_bikin = $tampil['tanggal_bikin'];
                  ?>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">11</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">12</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">13</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">14</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                    <tr>
                      <td class="text-center">15</td>
                      <td class="text-left">Putri Maju Setia</td>
                      <td class="text-center">2</td>
                      <td class="text-center">Jetty 2</td>
                      <td class="text-center">Surojoyo</td>
                      <td class="text-center"><a href="<?php //echo base_url('assets/backend/dokumen/').$file; ?>" target="_blank"><button class="btn btn-xs btn-primary"><i class="fa fa-file-text"></i> Lihat</button></a></td>
                    </tr>
                  <?php //endforeach; ?>
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