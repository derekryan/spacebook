<?php
class Messages extends CI_Model
{
  private $messagesTable = 'messages';

  function Messages()
  {
    parent::__construct();
  }

  function addMessage($from, $to, $message)
  {
  	$record = array('to'      => $to,
  			'from'    => $from,
  			'message' => $message);
  	$this->db->insert('messages', $record);
  }
  
  function getMessages($user)
  {
  	$this->db->select('*');
  	$this->db->from('messages');
  	$this->db->where('to', $user);
  	$messagesSet = $this->db->get();
  
  	$messages = array();
  	foreach ($messagesSet->result() as $row)
  	{
  		$messages[] = array('from'    => $row->from,
  				'message' => $row->message);
  	}
  	return $messages;
  }  
}