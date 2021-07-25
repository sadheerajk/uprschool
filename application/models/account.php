<?php
class Account extends CI_Model{
	function new_account($data){
		$this->load->database();
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
function login($email,$password){
	$where=array(
	'email'=>$email,
	//'password'=>sha1($password)
	'password'=>$password
		);
	$this->db->select()->from('users')->where($where);
	$query=$this->db->get();
	return $query->first_row('array');
}
function username($username){
		$this->db->select('*')->from('users')->where('userID',$username);
		$q=$this->db->get();
		return $q->result_array();
	}

}


?>