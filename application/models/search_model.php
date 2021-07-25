<?php
class search_model
extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    //fetch books
    function get_books($limit, $start, $st =NULL)
    {
        $errro='Sorry! No match found';
        if ($st == "NIL")
$st = "";
        $sql = "select * from posts where title like '%$st%' or cate like '%$st%' or code like '%$st%' or sub_cate like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        
        if($query==''){
            return $errro;
        }else{
            return $query->result();
        }
    }
    function get_books_count($st = NULL)
    {
        if ($st == "NIL")
            $st = "";
        $sql = "select * from posts where title like '%$st%' or cate like '%$st%' or sub_cate like '%$st%' ";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>