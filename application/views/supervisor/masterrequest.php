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
      <li class="active">
        <a href="<?php echo base_url('dashboard/masterrequest'); ?>">
          <i class="fa fa-legal"></i> <span>Request Ships</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/tankticket'); ?>">
          <i class="fa fa-crop"></i> <span>Tank Ticket</span>
        </a>
      </li>
      <li>
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
      Master's Requisition
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Master's Requisition</li>
    </ol>
  </section>
  
  <section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-primary">
      <!-- /.box-header -->
      <div class="box-header">
        <button class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#datarequest">Data Request</button>
      </div>
      <form action="<?php echo base_url('dashboard/update_masterrequest_supervisor'); ?>" method="POST">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_of_ships">Name of Ships</label>
                <input type="text" class="form-control" name="name_of_ships" id="name_of_ships" placeholder="Write your ship" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_of_ships; } ?>" readonly>
                <input type="hidden" name="id" id="id" value="<?php if(isset($_GET['id'])){ echo $data->row()->id; } ?>">
              </div>
              <div class="form-group">
                <label for="jetty">Type of Jetty</label>
                <select name="jetty" id="jetty" class="form-control" readonly>
                  <option value="">-</option>
                  <option value="Jetty 1" <?php if(isset($_GET['id'])){ if($data->row()->jetty == 'Jetty 1'){ echo "selected"; } } ?>>Jetty 1</option>
                  <option value="Jetty 2" <?php if(isset($_GET['id'])){ if($data->row()->jetty == 'Jetty 2'){ echo "selected"; } } ?>>Jetty 2</option>
                  <option value="Jetty 3" <?php if(isset($_GET['id'])){ if($data->row()->jetty == 'Jetty 3'){ echo "selected"; } } ?>>Jetty 3</option>
                  <option value="CIB 1" <?php if(isset($_GET['id'])){ if($data->row()->jetty == 'CIB 1'){ echo "selected"; } } ?>>CIB 1</option>
                  <option value="CIB 2" <?php if(isset($_GET['id'])){ if($data->row()->jetty == 'CIB 2'){ echo "selected"; } } ?>>CIB 2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nomination_mfo">MFO</label>
                <input type="number" class="form-control" id="nomination_mfo" name="nomination_mfo" placeholder="0" min="1" value="<?php if(isset($_GET['id'])){ echo $data->row()->nomination_mfo; } ?>">
              </div>
              <div class="form-group">
                <label for="nomination_mdo">MDO</label>
                <input type="number" class="form-control" id="nomination_mdo" name="nomination_mdo" placeholder="0" min="1" value="<?php if(isset($_GET['id'])){ echo $data->row()->nomination_mdo; } ?>">
              </div>
              <div class="form-group">
                <label for="nomination_fw">Fresh Water</label>
                <input type="number" class="form-control" id="nomination_fw" name="nomination_fw" placeholder="0" min="1" value="<?php if(isset($_GET['id'])){ echo $data->row()->nomination_fw; } ?>">
              </div>
              <div class="form-group">
                <label for="number_of_jetty">Number of Jetty</label>
                <input type="text" id="number_of_jetty" name="number_of_jetty" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->number_of_jetty; } ?>">
              </div>
              <div class="form-group">
                <label for="name_of_captain">Name of Captain</label>
                <input type="text" class="form-control" id="name_of_captain" name="name_of_captain" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_of_captain; } ?>">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="ships_status">Ships Status</label>
                <select name="ships_status" id="ships_status" class="form-control">
                  <option value="">-</option>
                  <option value="Owned" <?php if(isset($_GET['id'])){ if($data->row()->ships_status == 'Owned'){ echo "selected"; } } ?>>Owned</option>
                  <option value="Chartered" <?php if(isset($_GET['id'])){ if($data->row()->ships_status == 'Chartered'){ echo "selected"; } } ?>>Chartered</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ships_status">Cost Center</label>
                <input type="text" id="cost_center" name="cost_center" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->cost_center; } ?>">
              </div>
              <div class="form-group">
                <label for="company_owner">Company/Owner</label>
                <input type="text" id="company_owner" name="company_owner" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->company_owner; } ?>">
              </div>
              <div class="form-group">
                <label for="nomination">Nomination</label>
                <input type="text" id="nomination" name="nomination" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->nomination; } ?>">
              </div>
              <div class="form-group">
                <label for="name_of_loading_master">Name Loading Master</label>
                <input type="text" id="name_of_loading_master" name="name_of_loading_master" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_of_loading_master; } ?>">
              </div>
              <div class="form-group">
                <label for="reason">Reason</label>
                <input type="text" id="reason" name="reason" class="form-control" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->reason; } ?>">
              </div>
              <div class="form-group">
                <label for="approve">Approve</label>
                <select name="approve" id="approve" class="form-control">
                  <option value="">-</option>
                  <option value="YA" <?php if(isset($_GET['id'])){ if($data->row()->approve == 'YA'){ echo "selected"; } } ?>>Accepted</option>
                  <option value="TIDAK" <?php if(isset($_GET['id'])){ if($data->row()->approve == 'TIDAK'){ echo "selected"; } } ?>>Reject</option>
                  <option value="PROSES" <?php if(isset($_GET['id'])){ if($data->row()->approve == 'PROSES'){ echo "selected"; } } ?>>Pending</option>
                </select>
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
          <button class="btn btn-success pull-right" type="submit" id="button_simpan"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>      
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->

</div>

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
              foreach($this->db->query("SELECT * FROM tbl_masterrequest WHERE approve='PROSES' ORDER BY id DESC")->result_array() as $tampil):
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
                  <a href="<?php echo base_url('dashboard/masterrequest?id=').$id; ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button></a>                  
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>   
      </div>
    </div>
  </div>
</div>