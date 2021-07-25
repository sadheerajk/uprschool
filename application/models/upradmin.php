<?php
class Upradmin extends CI_Model{
	
function login($email,$password){
	$where=array(
	'username'=>$email,
	//'password'=>sha1($password)
	'password'=>$password
		);
	$this->db->select()->from('admin')->where($where);
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