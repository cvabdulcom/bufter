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
      <li class="active">
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
    $data = $this->db->query("SELECT * FROM tbl_tankticket WHERE id='$id'");
  }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Tank Ticket
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Tank Ticket</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
      <div class="box-header">
        <button class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#datatankticket">Data Tankticket</button>
      </div>
      <form action="<?php echo base_url('dashboard/update_tankticket_supervisor'); ?>" method="POST">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_of_ships">Name of Ships</label>
                <input type="text" class="form-control" name="name_of_ships" id="name_of_ships" placeholder="Write your ship" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_of_ships; } ?>" readonly>
                <input type="hidden" name="id" id="id" value="<?php if(isset($_GET['id'])){ echo $data->row()->id; } ?>">
              </div>
              <div class="form-group">
                <label for="jetty_no">Type of Jetty</label>
                <select name="jetty_no" id="jetty_no" class="form-control" readonly>
                  <option value="">-</option>
                  <option value="Jetty 1" <?php if(isset($_GET['id'])){ if($data->row()->jetty_no == 'Jetty 1'){ echo "selected"; } } ?>>Jetty 1</option>
                  <option value="Jetty 2" <?php if(isset($_GET['id'])){ if($data->row()->jetty_no == 'Jetty 2'){ echo "selected"; } } ?>>Jetty 2</option>
                  <option value="Jetty 3" <?php if(isset($_GET['id'])){ if($data->row()->jetty_no == 'Jetty 3'){ echo "selected"; } } ?>>Jetty 3</option>
                  <option value="CIB 1" <?php if(isset($_GET['id'])){ if($data->row()->jetty_no == 'CIB 1'){ echo "selected"; } } ?>>CIB 1</option>
                  <option value="CIB 2" <?php if(isset($_GET['id'])){ if($data->row()->jetty_no == 'CIB 2'){ echo "selected"; } } ?>>CIB 2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="name_fresh_water">Name Fresh Water</label>
                <input type="text" class="form-control" id="name_fresh_water" name="name_fresh_water" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->id; } ?>">
              </div>
              <div class="form-group">
                <label for="no_of_tank">No of Tank</label>
                <select name="no_of_tank" id="no_of_tank" class="form-control">
                  <option value="">-</option>
                  <option value="70T-1" <?php if(isset($_GET['id'])){ if($data->row()->no_of_tank == '70T-1'){ echo "selected"; } } ?>>70T-1</option>
                  <option value="70T-2" <?php if(isset($_GET['id'])){ if($data->row()->no_of_tank == '70T-2'){ echo "selected"; } } ?>>70T-2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ukuran_stop">Ukuran Stop</label>
                <select name="ukuran_stop" id="ukuran_stop" class="form-control">
                  <option value="">-</option>
                  <option value="PD Meter" <?php if(isset($_GET['id'])){ if($data->row()->ukuran_stop == 'PD Meter'){ echo "selected"; } } ?>>PD Meter</option>
                  <option value="ATG" <?php if(isset($_GET['id'])){ if($data->row()->ukuran_stop == 'ATG'){ echo "selected"; } } ?>>ATG</option>
                </select>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis</label>
                <select name="jenis" id="jenis" class="form-control">
                  <option value="">-</option>
                  <option value="Opening" <?php if(isset($_GET['id'])){ if($data->row()->jenis == 'Opening'){ echo "selected"; } } ?>>Opening</option>
                  <option value="Closing" <?php if(isset($_GET['id'])){ if($data->row()->jenis == 'Closing'){ echo "selected"; } } ?>>Closing</option>
                </select>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" value="<?php if(isset($_GET['id'])){ echo $data->row()->date; } ?>">
              </div>
              <div class="form-group">
                <label for="hours">Hours</label>
                <input type="time" class="form-control" id="hours" name="hours" value="<?php if(isset($_GET['id'])){ echo $data->row()->hours; } ?>">
              </div>
              <div class="form-group">
                <label for="name_operator">Name Operator</label>
                <input type="text" class="form-control" id="name_operator" name="name_operator" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_operator; } ?>">
              </div>
              <div class="form-group">
                <label for="name_supervisor">Name Supervisor</label>
                <input type="text" class="form-control" id="name_supervisor" name="name_supervisor" placeholder="-" value="<?php if(isset($_GET['id'])){ echo $data->row()->name_supervisor; } ?>">
              </div>
              <div class="form-group">
                <label for="approve">Approve</label>
                <select name="approve" id="approve" class="form-control">
                  <option value="">-</option>
                  <option value="YA" <?php if(isset($_GET['id'])){ if($data->row()->approve == 'YA'){ echo "selected"; } } ?>>Accepted</option>
                  <option value="TIDAK" <?php if(isset($_GET['id'])){ if($data->row()->approve == 'TIDAK'){ echo "selected"; } } ?>>Rejected</option>
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
          <a href="<?php echo base_url('dashboard/tankticket'); ?>"><button class="btn btn-default pull-left" type="button" id="batal"><i class="fa fa-retweet"></i> Batal</button></a>
          <button class="btn btn-success pull-right" type="submit" id="button_simpan"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>      
    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<div class="modal fade bd-example-modal-lg" id="datatankticket">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <table class="table table-bordered table-hover" id="laporan">
          <thead>
            <tr class="bg-primary">
              <th class="text-center" width="10">No</th>
              <th class="text-center">Ships Name</th>
              <th class="text-center">Jetty No</th>
              <th class="text-center">Name Fresh Water</th>
              <th class="text-center">No of Tank</th>
              <th class="text-center">date</th>
              <th class="text-center"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no=0;
              foreach($this->db->query("SELECT * FROM tbl_tankticket WHERE approve='PROSES' ORDER BY id DESC")->result_array() as $tampil):
                $no++;
                $id = $tampil['id'];
                $id_pengguna = $tampil['id_pengguna'];
                $name_of_ships = $tampil['name_of_ships'];
                $jetty_no = $tampil['jetty_no'];
                $name_fresh_water = $tampil['name_fresh_water'];
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
                <td class="text-center"><?php echo $name_fresh_water; ?></td>
                <td class="text-center"><?php echo $no_of_tank; ?></td>
                <td class="text-center"><?php $new = strtotime($date); $newDate = date('d/m/Y', $new);  echo $newDate; ?></td>
                <td class="text-right" width="10">
                  <a href="<?php echo base_url('dashboard/tankticket?id=').$id; ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button></a>                  
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>   
      </div>
    </div>
  </div>
</div>