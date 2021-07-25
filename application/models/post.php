<?php
class Post extends CI_Model{

	function get_posts($num=20,$start=0){
      $this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
       $query=$this->db->get();
       return $query->result_array();
}
	function get_post_by_id($postID){
     $this->db->select('*')->from('posts')->where('id',$postID);
      $query=$this->db->get();
      return $query->first_row('array');
}

function related_post($cat){
	 $this->db->select('*')->from('posts')->where('cate',$cat)->order_by('date_added','desc')->limit(20,0);
      $query=$this->db->get();
      return $query->result_array();
}
function get_posts_count(){
	$this->db->select('id')->from('posts')->where('active',1);
	$query=$this->db->get();
	return $query->num_rows();
}

	function insert_post($data){
		$this->db->insert('posts',$data);
		return $this->db->insert_id();	
	}

	function update_post($postID,$data){
		$this->db->where('id',$postID);
		$this->db->update('posts',$data);
	}

  function delete_post($postID){
		$this->db->where('id',$postID);
		$this->db->delete('posts',$data);
	}
}

?>