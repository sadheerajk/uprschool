<?php 
class Language extends CI_Model{
		function cplusplus($num=20,$start=0,$cat){
      $this->db->select()->from('posts')->where('cate',$cat)->order_by('date_added','desc')->limit($num,$start);
       $query=$this->db->get();
       return $query->result_array();
}

}
?>