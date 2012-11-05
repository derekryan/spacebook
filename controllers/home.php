<?php
class Home extends CI_Controller 
{
  function Home()
  {
    parent::__construct();
    $this->load->model('messages');
    $this->load->model('friends');
  }
  
function index()
  {
    $username = $this->session->userdata('username');
    $viewData['username'] = $username;
    //$viewData['following'] = $this->friends->getFollowing($username);
    //$viewData['followers'] = $this->friends->getFollowers($username);
    $viewData['friends'] = $this->friends->getFriends($username);
    
    $this->load->view('shared/header');
    $this->load->view('home/hometitle', $viewData);
    $this->load->view('shared/nav');
    $this->load->view('home/homeview');
    $this->load->view('shared/footer');
  }
  
  function drop($member)
  {
  	$username = $this->session->userdata('username');
  	$this->friends->deleteFriend($username, $member);
  	redirect('home');
  }
}