<?php

class Expert extends CI_Model{

    
function __construct()
    {
        parent::__construct();
    }

function insert_user($data)
    {
		return $this->db->insert('experts', $data);
		return $this->db->insert_id();
	}

	function get_user($email, $pwd,$e_type)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
		$this->db->where('e_type', $e_type);
        $query = $this->db->get('experts');
		return $query->result();
	}
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('experts');
		return $query->result();
	}

	function get_forum()
	{
		
      $this->db->select()->from('comments')->where('active',0)->order_by('date_added','desc')->limit(5);
       $query=$this->db->get();
       return $query->result_array();
	}


	function update_comment($postID,$data_post){
		$this->db->where('commentID',$postID);
		$this->db->update('comments',$data_post);
	}

  function delete_comment($postID){
		$this->db->where('commentID',$postID);
		$this->db->delete('comments',$data_post);
	}
	function add_comment($data){
		$this->db->insert('comments',$data);
		
	}
	
}
?>