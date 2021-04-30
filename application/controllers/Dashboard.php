<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in_bufter') !== TRUE){
      redirect('/');
    }
  }

  /** ------------------------------------------------------------------ */
  /** DASHBOARD */
  function Index(){
    if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/dashboard');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/dashboard');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='operator' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('operator/header');
      $this->load->view('operator/dashboard');
      $this->load->view('operator/footer');
    }else if($this->session->userdata('jabatan_bufter')==='finance' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('finance/header');
      $this->load->view('finance/dashboard');
      $this->load->view('finance/footer');
    }else if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/dashboard');
      $this->load->view('agent/footer');
    }else if($this->session->userdata('jabatan_bufter')==='ships' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('ships/header');
      $this->load->view('ships/dashboard');
      $this->load->view('ships/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** DASHBOARD */

  /** MASTER REQUEST */
  function Masterrequest(){
    if($this->session->userdata('jabatan_bufter')==='ships' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('ships/header');
      $this->load->view('ships/masterrequest');
      $this->load->view('ships/footer');
    }else if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/masterrequest');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/masterrequest');
      $this->load->view('agent/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/masterrequest');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** MASTER REQUEST */

  /** TANK TICKET */
  function Tankticket(){
    if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/tankticket');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='operator' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('operator/header');
      $this->load->view('operator/tankticket');
      $this->load->view('operator/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/tankticket');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** TANK TICKET */

  /** RECEIPT */
  function Approvedreceipt(){
    if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/approvedreceipt');
      $this->load->view('supervisor/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** RECEIPT */

  /** UPLOAD DOKUMEN */
  function Uploaddokumen(){
    if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/uploaddokumen');
      $this->load->view('agent/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/uploaddokumen');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** UPLOAD DOKUMEN */

  /** UPLOAD BUKTI BAYAR */
  function Uploadbuktibayar(){
    if($this->session->userdata('jabatan_bufter')==='finance' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('finance/header');
      $this->load->view('finance/uploadbuktibayar');
      $this->load->view('finance/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/uploadbuktibayar');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** UPLOAD BUKTI BAYAR */

  /** REKAPITULASI */
  function Rekapitulasi(){
    if($this->session->userdata('jabatan_bufter')==='finance' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('finance/header');
      $this->load->view('finance/rekapitulasi');
      $this->load->view('finance/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/rekapitulasi');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** REKAPITULASI */

  /** DATA PENGGUNA */
  function Datapengguna(){
    if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/datapengguna');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** DATA PENGGUNA */

  /** LAPORAN MASTER REQUEST */
  function Laporan_masterrequest(){
    if($this->session->userdata('jabatan_bufter')==='ships' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('ships/header');
      $this->load->view('ships/laporan_masterrequest');
      $this->load->view('ships/footer');
    }else if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/laporan_masterrequest');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/laporan_masterrequest');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/laporan_masterrequest');
      $this->load->view('agent/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN MASTER REQUEST */

  /** LAPORAN TANK TICKET */
  function Laporan_tankticket(){
    if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/laporan_tankticket');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/laporan_tankticket');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/laporan_tankticket');
      $this->load->view('agent/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN TANK TICKET */

  /** LAPORAN STATUS */
  function Laporan_status(){
    if($this->session->userdata('jabatan_bufter')==='ships' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('ships/header');
      $this->load->view('ships/laporan_status');
      $this->load->view('ships/footer');
    }else if($this->session->userdata('jabatan_bufter')==='supervisor' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('supervisor/header');
      $this->load->view('supervisor/laporan_status');
      $this->load->view('supervisor/footer');
    }else if($this->session->userdata('jabatan_bufter')==='operator' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('operator/header');
      $this->load->view('operator/laporan_status');
      $this->load->view('operator/footer');
    }else if($this->session->userdata('jabatan_bufter')==='finance' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('finance/header');
      $this->load->view('finance/laporan_status');
      $this->load->view('finance/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN STATUS */

  /** LAPORAN DOKUMEN */
  function Laporan_dokumen(){
    if($this->session->userdata('jabatan_bufter')==='ships' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('ships/header');
      $this->load->view('ships/laporan_dokumen');
      $this->load->view('ships/footer');
    }else if($this->session->userdata('jabatan_bufter')==='agent' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/header');
      $this->load->view('agent/laporan_dokumen');
      $this->load->view('agent/footer');
    }else if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/laporan_dokumen');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN DOKUMEN */

  /** LAPORAN PEMBAYARAN */
  function Laporan_pembayaran(){
    if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/laporan_pembayaran');
      $this->load->view('superadmin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN PEMBAYARAN */

  /** LAPORAN REKAPITULASI */
  function Laporan_rekapitulasi(){
    if($this->session->userdata('jabatan_bufter')==='superadmin' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('superadmin/header');
      $this->load->view('superadmin/laporan_rekapitulasi');
      $this->load->view('superadmin/footer');
    }else if($this->session->userdata('jabatan_bufter')==='finance' && $this->session->userdata('status_bufter')==='YA'){
      $this->load->view('finance/header');
      $this->load->view('finance/laporan_rekapitulasi');
      $this->load->view('finance/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** LAPORAN REKAPITULASI */

  /** CETAK REQUEST & TANKTICKET */
  function Cetak_request(){
    if($this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/cetak_request');
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Cetak_tankticket(){
    if($this->session->userdata('status_bufter')==='YA'){
      $this->load->view('agent/cetak_tankticket');
    }else{ 
      redirect('index/lockscren');
    }
  }
  /** CETAK REQUEST & TANKTICKET */
  
  /** ------------------------------------------------------------------ */
  /**
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   * 
   */
  /** FUNCTION */
  /** ------------------------------------------------------------------ */
  function Simpan_request_ships(){
    if($this->session->userdata('status_bufter')==='YA'){
      $id_pengguna = $this->session->userdata('id_pengguna_bufter');
      $name_of_ships = $this->input->post('name_of_ships');
      $jetty = $this->input->post('jetty');
      $date_request = date('Y-m-d');
      $nomination_mfo = $this->input->post('nomination_mfo');
      $nomination_mdo = $this->input->post('nomination_mdo');
      $nomination_fw = $this->input->post('nomination_fw');
      $number_of_jetty = $this->input->post('number_of_jetty');
      $name_of_captain = $this->input->post('name_of_captain');
      $ships_status = $this->input->post('ships_status');
      if($ships_status == 'Owned'){
        $cost_center = $this->input->post('cost_center');
        $company_owner = "KOSONG";
      }else{
        $cost_center = "KOSONG";
        $company_owner = $this->input->post('company_owner');
      }
      $nomination = 0;
      $name_of_loading_master = "KOSONG";
      $date_respon = "0000-00-00";
      $no_document = "KOSONG";
      $reason = "KOSONG";
      $file_dokumen = "KOSONG.pdf";
      $file_bukti_bayar = "KOSONG.pdf";
      $status_bukti_bayar = "KOSONG";
      $approve = "PROSES";

      $simpan = $this->db->query("INSERT INTO tbl_masterrequest(id_pengguna,name_of_ships,jetty,date_request,nomination_mfo,nomination_mdo,nomination_fw,number_of_jetty,name_of_captain,ships_status,cost_center,company_owner,nomination,name_of_loading_master,date_respon,no_document,reason,file_dokumen,file_bukti_bayar,status_bukti_bayar,approve) VALUES('$id_pengguna','$name_of_ships','$jetty','$date_request','$nomination_mfo','$nomination_mdo','$nomination_fw','$number_of_jetty','$name_of_captain','$ships_status','$cost_center','$company_owner','$nomination','$name_of_loading_master','$date_respon','$no_document','$reason','$file_dokumen','$file_bukti_bayar','$status_bukti_bayar','$approve')");

      if($simpan){
        $link = base_url('dashboard/masterrequest');
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }else{ 
      redirect('index/lockscren');
    }    
  }

  function Simpan_tankticket_operator(){
    if($this->session->userdata('status_bufter')==='YA'){
      $id_pengguna = $this->session->userdata('id_pengguna_bufter');
      $name_of_ships = $this->input->post('name_of_ships');
      $jetty_no = $this->input->post('jetty_no');
      $name_fresh_water = $this->input->post('name_fresh_water');
      $no_of_tank = $this->input->post('no_of_tank');
      $ukuran_stop = $this->input->post('ukuran_stop');
      $date = $this->input->post('date');
      $hours = $this->input->post('hours');
      $name_operator = $this->input->post('name_operator');
      $name_supervisor = "KOSONG";
      $jenis = $this->input->post('jenis');
      $file_dokumen = "KOSONG.pdf";
      $approve = "PROSES";

      $simpan = $this->db->query("INSERT INTO tbl_tankticket(id_pengguna,name_of_ships,jetty_no,name_fresh_water,no_of_tank,ukuran_stop,date,hours,name_operator,name_supervisor,jenis,file_dokumen,approve) VALUES('$id_pengguna','$name_of_ships','$jetty_no','$name_fresh_water','$no_of_tank','$ukuran_stop','$date','$hours','$name_operator','$name_supervisor','$jenis','$file_dokumen','$approve')");

      if($simpan){
        $link = base_url('dashboard/tankticket');
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Upload_dokumen_request(){
    if($this->session->userdata('status_bufter')==='YA'){
      $data = array();
      $config['upload_path'] = './assets/backend/file_dokumen_request/';
      $config['allowed_types'] = 'pdf|docx|doc|xls|xlsx|ppt|pptx';
      $config['max_size'] = 2000;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file_dokumen')) {
        $error = ['error' => $this->upload->display_errors()];
        $link = base_url('dashboard/uploaddokumen');
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar!\");document.location.href='$link';</script>";
      }else{
        $fileData = $this->upload->data();
        $data1['file_dokumen'] = $fileData['file_name'];
        $file = $data1['file_dokumen'];      
        $id_request = $this->input->post('id_request');

        $simpan = $this->db->query("UPDATE tbl_masterrequest SET file_dokumen='$file' WHERE id='$id_request'");
        if($simpan){
          $link = base_url('dashboard/uploaddokumen');
          echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
        }else{
          echo "Gagal Simpan";
        }
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Simpan_bukti_bayar(){
    if($this->session->userdata('status_bufter')==='YA'){
      $data = array();
      $config['upload_path'] = './assets/backend/file_bukti_bayar/';
      $config['allowed_types'] = 'pdf|png|jpg|jpeg';
      $config['max_size'] = 2000;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file_dokumen')) {
        $error = ['error' => $this->upload->display_errors()];
        $link = base_url('dashboard/uploadbuktibayar');
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar!\");document.location.href='$link';</script>";
      }else{
        $fileData = $this->upload->data();
        $data1['file_dokumen'] = $fileData['file_name'];
        $file = $data1['file_dokumen'];      
        $id_request = $this->input->post('id_request');

        $simpan = $this->db->query("UPDATE tbl_masterrequest SET file_bukti_bayar='$file' WHERE id='$id_request'");
        if($simpan){
          $link = base_url('dashboard/uploadbuktibayar');
          echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
        }else{
          echo "Gagal Simpan";
        }
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Simpan_rekapitulasi(){
    if($this->session->userdata('status_bufter')==='YA'){
      $data = array();
      $config['upload_path'] = './assets/backend/file_dokumen_rekapitulasi/';
      $config['allowed_types'] = 'pdf|docx|doc|xls|xlsx|ppt|pptx';
      $config['max_size'] = 2000;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file_dokumen')) {
        $error = ['error' => $this->upload->display_errors()];
        $link = base_url('dashboard/rekapitulasi');
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar!\");document.location.href='$link';</script>";
      }else{
        $fileData = $this->upload->data();
        $data1['file_dokumen'] = $fileData['file_name'];
        $id_pengguna = $this->session->userdata('id_pengguna_bufter');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');
        $file = $data1['file_dokumen'];

        $simpan = $this->db->query("INSERT INTO tbl_rekapitulasi(id_pengguna,tanggal,keterangan,file_dokumen) VALUES('$id_pengguna','$tanggal','$keterangan','$file')");
        if($simpan){
          $link = base_url('dashboard/rekapitulasi');
          echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
        }else{
          echo "Gagal Simpan";
        }
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Update_masterrequest_supervisor(){
    if($this->session->userdata('status_bufter')==='YA'){
      $id = $this->input->post('id');
      $name_of_ships = $this->input->post('name_of_ships');
      $jetty = $this->input->post('jetty');
      $nomination_mfo = $this->input->post('nomination_mfo');
      $nomination_mdo = $this->input->post('nomination_mdo');
      $nomination_fw = $this->input->post('nomination_fw');
      $number_of_jetty = $this->input->post('number_of_jetty');
      $name_of_captain = $this->input->post('name_of_captain');
      $ships_status = $this->input->post('ships_status');
      $cost_center = $this->input->post('cost_center');
      $company_owner = $this->input->post('company_owner');
      $nomination = $this->input->post('nomination');
      $name_of_loading_master = $this->input->post('name_of_loading_master');
      $date_respon = date('Y-m-d');
      $reason = $this->input->post('reason');
      $approve = $this->input->post('approve');

      $simpan = $this->db->query("UPDATE tbl_masterrequest SET name_of_ships='$name_of_ships',jetty='$jetty',nomination_mfo='$nomination_mfo',nomination_mdo='$nomination_mdo',nomination_fw='$nomination_fw',number_of_jetty='$number_of_jetty',name_of_captain='$name_of_captain',ships_status='$ships_status',cost_center='$cost_center',company_owner='$company_owner',nomination='$nomination',name_of_loading_master='$name_of_loading_master',date_respon='$date_respon',reason='$reason',approve='$approve' WHERE id='$id'");

      if($simpan){
        $link = base_url('dashboard/masterrequest');
        echo "<script language=\"javascript\">alert(\"Update Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function update_tankticket_supervisor(){
    if($this->session->userdata('status_bufter')==='YA'){
      $id = $this->input->post('id');
      $name_of_ships = $this->input->post('name_of_ships');
      $jetty_no = $this->input->post('jetty_no');
      $name_fresh_water = $this->input->post('name_fresh_water');
      $no_of_tank = $this->input->post('no_of_tank');
      $ukuran_stop = $this->input->post('ukuran_stop');
      $date = $this->input->post('date');
      $hours = $this->input->post('hours');
      $name_operator = $this->input->post('name_operator');
      $name_supervisor = $this->input->post('name_supervisor');
      $jenis = $this->input->post('jenis');
      $approve = $this->input->post('approve');

      $simpan = $this->db->query("UPDATE tbl_tankticket SET name_of_ships='$name_of_ships',jetty_no='$jetty_no',name_fresh_water='$name_fresh_water',no_of_tank='$no_of_tank',ukuran_stop='$ukuran_stop',date='$date',hours='$hours',name_operator='$name_operator',name_supervisor='$name_supervisor',jenis='$jenis',approve='$approve' WHERE id='$id'");

      if($simpan){
        $link = base_url('dashboard/tankticket');
        echo "<script language=\"javascript\">alert(\"Update Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }else{ 
      redirect('index/lockscren');
    }
  }

  function Simpan_receipt(){
    $id = $this->input->get('id');
    $status_bukti_bayar = $this->input->get('status_bukti_bayar');

    $simpan =  $this->db->query("UPDATE tbl_masterrequest SET status_bukti_bayar='$status_bukti_bayar' WHERE id='$id'");

    if($simpan){
      redirect('dashboard/approvedreceipt');
    }else{
      echo "Gagal Simpan";
    }
  }

  function Aktivasi(){
    $id = $this->input->get('id');
    $status = $this->input->get('status');
    if($status == 'YA'){
      $nilai = 'TIDAK';
    }else{
      $nilai = 'YA';
    }
    $simpan = $this->db->query("UPDATE tbl_pengguna SET status='$nilai' WHERE id='$id'");
    if($simpan){
      redirect('dashboard/datapengguna');
    }else{
      echo "Gagal simpan";
    }
  }

  function tambah_pengguna(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $nama = $this->input->post('nama');
    $jabatan = $this->input->post('jabatan');

    $simpan = $this->db->query("INSERT INTO tbl_pengguna(username,password,nama,jabatan,status) VALUES('$username','$password','$nama','$jabatan','YA')");
    if($simpan){
      redirect('dashboard/datapengguna');
    }else{
      echo "Gagal simpan";
    }
  }

  function hapus_pengguna(){
    $id = $this->input->post('id');
    $simpan = $this->db->query("DELETE FROM tbl_pengguna WHERE id='$id'");
    if($simpan){
      redirect('dashboard/datapengguna');
    }else{
      echo "Gagal simpan";
    }
  }
  /** ------------------------------------------------------------------ */
  /** FUNCTION */

}