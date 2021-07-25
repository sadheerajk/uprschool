<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
		return $query->result();
	}
	
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
		return $this->db->insert_id();
	}
	function pic($id,$data){
		 $this->db->insert('user', $data)->where('id',$id);
  
       return $this->db->insert_id();
	}

function update($id,$data){

		$this->db->where('id',$id);
		$this->db->update('user',$data);
	
}

function user()
	{
        $query = $this->db->get('user');
		return $query->result();
	}
	
}?>