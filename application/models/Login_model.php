<?php
class Login_model extends CI_Model{

  //fungsi validasi email dan pass login
  function validate($email,$password){
    $this->db->where('username',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('tbl_pengguna',1);
    return $result;
  }

}