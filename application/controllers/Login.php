<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    //menjalankan model login, untuk menampilkan database
    $this->load->model('login_model');
  }

  //ketika sistem di akses akan menampilkan tampilan view login
  function index(){
    if($this->session->userdata('logged_in_bufter') !== TRUE){ //jika gagal login
      $this->load->view('login_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  function Register(){
    if($this->session->userdata('logged_in_bufter') !== TRUE){ //jika gagal login
      $this->load->view('register_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  //ketika melakukan login akan dicek
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    // $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){

      $data  = $validate->row_array();

      $id_pengguna_bufter = $data['id'];
      $username_bufter = $data['username'];
      $password_bufter = $data['password'];
      $nama_bufter = $data['nama'];
      $jabatan_bufter = $data['jabatan'];
      $status_bufter = $data['status'];

      $sesdata = array(
        'id_pengguna_bufter' => $id_pengguna_bufter,
        'username_bufter'    => $username_bufter,
        'password_bufter'    => $password_bufter,
        'nama_bufter'        => $nama_bufter,
        'jabatan_bufter'     => $jabatan_bufter,
        'status_bufter'      => $status_bufter,
        'logged_in_bufter'   => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('dashboard');
    }else{ //jika user pass salah maka akan muncul notif
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
  }

  function Simpan_register(){
    $username = $this->input->post('username');
    $password1 = $this->input->post('password');    
    $password2 = $this->input->post('password2'); 
    $password = md5($this->input->post('password'));
    $nama = $this->input->post('nama');
    $jabatan = "ships";
    $status = "TIDAK";

    $cek_username = $this->db->query("SELECT * FROM tbl_pengguna WHERE username='$username'")->num_rows();
    if($cek_username > 0){
      $link = base_url('login/register');
      echo "<script language=\"javascript\">alert(\"Email yang dimasukan sudah terdaftar\");document.location.href='$link';</script>";
    }else{
      if($password1 == $password2){
        $simpan = $this->db->query("INSERT INTO tbl_pengguna(username,password,nama,jabatan,status) VALUES('$username','$password','$nama','$jabatan','$status')");
        if($simpan){
          $link = base_url('login/register');
          echo "<script language=\"javascript\">alert(\"Simpan Berhasil, Silahkan menunggu aktivasi akun dari Superadmin\");document.location.href='$link';</script>";
        }else{
          echo "Gagal Simpan";
        }
      }else{
        $link = base_url('login/register');
        echo "<script language=\"javascript\">alert(\"Password yang dimasukan berbeda!\");document.location.href='$link';</script>";
      }
    } 
  }

  //funcsi untuk logout ketika klik link logout
  function logout(){
    $this->session->sess_destroy();
    redirect('/login');
  }

}