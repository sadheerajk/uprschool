<?php
class Comment extends CI_Model{
	function add_comment($data){
		$this->db->insert('comments',$data);
	}
	function get_comment($id){
		$query=$this->db->get('comments');
		//$query=$this->db->select('*')->from->('comments')->where('postID',$id);
		$this->db->select()->from('comments')->where('postID',$id)->order_by('date_added','asc')->where('active',1);
		$query=$this->db->get();
		return $query->result_array();


	}
	

function user_comment($id){
		$query=$this->db->get('comments');
$this->db->select('comments.*,user.*')->from('comments,user')->join('user','users.id=comments.userID','left')->where('id',$id)->order_by('comments.date_added','asc');
	//	$this->db->select()->from('comments')->where('postID',$id)->order_by('date_added','asc');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>