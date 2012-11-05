<?php
class Members extends CI_Controller 
{
  function Members()
  {
    parent::__construct();
    $this->load->model("membership");
    $this->load->model('friends');
  }
  
  function index()
  {
  	$username = $this->session->userdata('username');
  	//$membersList = $this->membership->getMembers();
    $membersList = $this->membership->getOtherMembers($username);
    $viewData['members'] = $membersList;
    
    
    $this->load->view('shared/header');
    $this->load->view('members/memberstitle');
    $this->load->view('shared/nav');
    $this->load->view('members/membersview', $viewData);
    $this->load->view('shared/footer');
  }
  
  function addfriend($friendname)
  {
    $username = $this->session->userdata('username');
    $this->friends->addFriend($username, $friendname);
    redirect ('home');
  }
}