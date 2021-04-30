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
      <li class="active">
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

<div class="content-wrapper">

<section class="content-header">
    <h1>
      Data Pengguna
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Data Pengguna</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TAMBAH"><i class="fa fa-plus-square"></i> Tambah</button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="laporan" class="table table-bordered table-striped dataTable">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Level</th>
                  <th class="text-center">Username</th>
                  <th class="text-center">Aksi</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($this->db->query("SELECT * FROM tbl_pengguna")->result_array() as $tampil):
                    $no++;
                    $id = $tampil['id'];
                    $username = $tampil['username'];
                    $password = $tampil['password'];
                    $nama = $tampil['nama'];
                    // $level = $tampil['level'];
                    $jabatan = $tampil['jabatan'];
                    // $foto = $tampil['foto'];
                    $status = $tampil['status'];
                ?>
                <tr>
                  <td class="text-center" width="30"><?php echo $no; ?></td>
                  <td><?php echo $nama; ?></td>
                  <td class="text-center"><?php echo $jabatan; ?></td>
                  <td class="text-center"><?php echo $username; ?></td>                  
                  <td class="text-center">
                    <?php
                      if($status == 'YA'){ ?>
                        <a href="<?php echo base_url('dashboard/aktivasi?id=').$id."&status=".$status; ?>"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-save"></i> Aktif</button></a>
                    <?php  }else{ ?>
                      <a href="<?php echo base_url('dashboard/aktivasi?id=').$id."&status=".$status; ?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-save"></i> Nonaktif</button></a>
                    <?php  }
                    ?>
                  </td>
                  <td class="text-center">
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-danger btn-xs" data-widget="Delete" title="Delete" data-original-title="Delete" data-toggle="modal" data-target="#HAPUS<?php echo $id; ?>"><i class="fa fa-trash"></i></button>
                    </div>
                    <!-- Modal Tambah presentasi-->
                    <div class="modal fade" id="HAPUS<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                              Hapus <?php echo $nama; ?> Jabatan <?php echo $jabatan; ?> ?
                          </div>
                          <div class="modal-footer">                            
                            <form action="<?php echo base_url('dashboard/hapus_pengguna'); ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal End -->                    
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- Ubah Produk -->
<div class="modal fade" id="TAMBAH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="box-body">
            <div class="col-md-12">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/tambah_pengguna'); ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" placeholder="Contoh : Aziz" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-10">
                      <select name="jabatan" class="form-control" required>
                        <option value="">~ Pilih Posisi</option>
                        <option value="superadmin">Superadmin</option> 
                        <option value="supervisor">Supervisor</option> 
                        <option value="operator">Operator</option>
                        <option value="finance">Finance</option>
                        <option value="agent">Agent</option>
                        <option value="ships">Ships</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" placeholder="Contoh : aziz" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" name="user_password" class="form-control" placeholder="****" required>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
          </form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Ubah End -->