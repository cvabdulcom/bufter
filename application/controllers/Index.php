<?php
class Index extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  /** ------------------------------------------------------------------ */
  function Index(){
    $this->load->view('home/header');
    $this->load->view('home/body');
    $this->load->view('home/footer'); 
  }

  function Lockscren(){
    $this->load->view('lockscren_view');
  }

}