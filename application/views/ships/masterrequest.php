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
          Ships
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
        <a href="<?php echo base_url('dashboard/masterrequest'); ?>">
          <i class="fa fa-pencil-square-o"></i> <span>Master Request</span>
        </a>
      </li>
      <li class="header">REPORTING NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_status'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Laporan Status</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/laporan_dokumen'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Daftar Dokumen</span>
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
      Master's Requisition
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Master's Requisition</li>
    </ol>
  </section>
  
  <section class="content">
    <form role="form" method="POST" action="<?php echo base_url('dashboard/simpan_request_ships'); ?>">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_of_ships">Name of Ships</label>
                <input type="text" class="form-control" name="name_of_ships" id="name_of_ships" placeholder="Write your ship">
              </div>
              <div class="form-group">
                <label for="jetty">Type of Jetty</label>
                <select name="jetty" id="jetty" class="form-control">
                  <option value="">-</option>
                  <option value="Jetty 1">Jetty 1</option>
                  <option value="Jetty 2">Jetty 2</option>
                  <option value="Jetty 3">Jetty 3</option>
                  <option value="CIB 1">CIB 1</option>
                  <option value="CIB 2">CIB 2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nomination_mfo">MFO</label>
                <input type="number" class="form-control" id="nomination_mfo" name="nomination_mfo" placeholder="0" min="1" disabled>
              </div>
              <div class="form-group">
                <label for="nomination_mdo">MDO</label>
                <input type="number" class="form-control" id="nomination_mdo" name="nomination_mdo" placeholder="0" min="1" disabled>
              </div>
              <div class="form-group">
                <label for="nomination_fw">Fresh Water</label>
                <input type="number" class="form-control" id="nomination_fw" name="nomination_fw" placeholder="0" min="1" disabled>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="number_of_jetty">Number of Jetty</label>
                <input type="text" id="number_of_jetty" name="number_of_jetty" class="form-control" placeholder="-" disabled>
              </div>
              <div class="form-group">
                <label for="name_of_captain">Name of Captain</label>
                <input type="text" class="form-control" id="name_of_captain" name="name_of_captain" placeholder="-" disabled>
              </div>
              <div class="form-group">
                <label for="ships_status">Ships Status</label>
                <select name="ships_status" id="ships_status" class="form-control" disabled>
                  <option value="">-</option>
                  <option value="Owned">Owned</option>
                  <option value="Chartered">Chartered</option>
                </select>
              </div>
              <div class="form-group" id="isian">
                &nbsp;
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>        
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo base_url('dashboard/masterrequest'); ?>"><button class="btn btn-default pull-left" type="button" id="batal"><i class="fa fa-retweet"></i> Batal</button></a>
          <a id="Loading"><button class="btn btn-success pull-right" type="submit" id="button_simpan" disabled><i class="fa fa-save"></i> Simpan</button></a>
        </div>
      </div>
      <!-- /.box -->
    </form>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<script>
$("#jetty").on('change', function(){
  $('#name_of_ships').attr('readonly', true);
  $('#jetty').attr('readonly', true);
  $('#nomination_mfo').attr('disabled', false);
  $('#nomination_mdo').attr('disabled', false);
  $('#nomination_fw').attr('disabled', false);
  $('#number_of_jetty').attr('disabled', false);
  $('#name_of_captain').attr('disabled', false);
  $('#ships_status').attr('disabled', false);
  $('#nomination_mfo').focus();
});

$("#ships_status").on('change', function(){
  $("#isian").empty();
  $('#nomination_mfo').attr('readonly', true);
  $('#nomination_mdo').attr('readonly', true);
  $('#nomination_fw').attr('readonly', true);
  $('#number_of_jetty').attr('readonly', true);
  $('#name_of_captain').attr('readonly', true);
  $('#ships_status').attr('readonly', true);
  $('#button_simpan').attr('disabled', false);
  if(this.value == 'Owned'){
    var isian = '<label for="cost_center">Cost Center</label>'+
                '<input type="text" class="form-control" id="cost_center" name="cost_center" placeholder="-">';
    $('#cost_center').focus();
  }else if(this.value == 'Chartered'){
    var isian = '<label for="company_owner">Company/Owner</label>'+
                '<input type="text" class="form-control" id="company_owner" name="company_owner" placeholder="-">';
    $('#company_owner').focus();
  }
  $("#isian").append(isian);
});
</script>