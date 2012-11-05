<?php
class HomeProfile extends CI_Controller 
{
  //private $text;
  
  function HomeProfile()
  {
    parent::__construct();
    $this->load->model("profiles");
  }
  
  function index()
  {
    $username = $this->session->userdata('username');

    $viewData['username'] = $username;
    $viewData['profileText'] = $this->profiles->getProfileText($username);

    $this->load->view('shared/header');
    $this->load->view('homeprofile/homeprofiletitle', $viewData);
    $this->load->view('shared/nav');
    $this->load->view('homeprofile/homeprofileview', $viewData);
    $this->load->view('shared/footer');
  }
  
  function changetext()
  {
    $username = $this->session->userdata('username');
    $this->profiles->putProfileText($username, $this->input->post("profiletext"));
    redirect('homeprofile/index');
  }
}