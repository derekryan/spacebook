<?php
class Login extends CI_Controller 
{
  function Login()
  {
    parent::__construct();
    $this->load->model('membership');
  }

  function index()
  {
    $this->load->view('shared/header');
    $this->load->view('account/logintitle');
    $this->load->view('account/loginview');
    $this->load->view('shared/footer');
  }
  
  function loguserin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $valid = $this->membership->validateUser($username, $password);
    if ($valid == true)
    {
      $this->session->set_userdata('status', 'OK');
      $this->session->set_userdata('username', $username);
      redirect('home');
    }
    else
    {
      $this->session->set_userdata('status', 'NOT_OK');
      echo "Error logging in";
    }
  }
  
  function logout()
  {
  	redirect ('start');
  }
}