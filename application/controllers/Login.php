<?php
class Login extends CI_Controller{
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('login');
    $this->load->view('templates/footer');
  }
}
?>