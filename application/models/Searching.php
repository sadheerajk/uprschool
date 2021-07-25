<?php
class Searching extends CI_COntroller{
		function search_data($search_key){

$search_words = array('');
$search_words = explode(" ",$search_key);
$q_string = "";
$last_index = intval(count($search_words)) - 1;

for($i = 0; $i<count($search_words);$i++)
  {
    $q_string = $search_words[$i];

     $this->db->select('*')->from('posts')->where($search_key,$search_key);
      $query=$this->db->get();
      return $query->first_row('array');

}
}
}
?>