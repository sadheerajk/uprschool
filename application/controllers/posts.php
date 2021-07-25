<?php
class Posts extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('post');
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
function index($start=0){
$this->load->model('post');	
$data['posts']=$this->post->get_posts(4,$start);
$this->load->library('pagination');
$config['base_url']=base_url().'index.php/posts/index/';
$config['total_rows']=$this->post->get_posts_count();
$config['per_page']=2;
$this->pagination->initialize($config);
$data['pages']=$this->pagination->create_links();
$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
$d['user'] = $details[0]->fname . " " . $details[0]->lname;
$this->load->view('upr/header');
$this->load->view('upr/jquery');
$this->load->view('upr/home',$data,$d);
}
function viewpost(){
$this->load->model('post');
$data['posts']=$this->post->get_posts();
$this->load->view('upr/header');
$this->load->view('upr/jquery');
$this->load->view('upr/posts',$data);
}
function view_comment(){
	    	$this->load->model('comment');
	    	$cm['comments']=$this->comment->get_comment();
	    	$this->load->view('upr/posts',$cm);
	    	$this->load->view('upr/reading',$cm,$cat);
	    }
function readpost($id,$cat){
	$this->load->model('post');
	$this->load->model('comment');

	$data['cate']=$this->post->related_post($cat);
	$cm['comments']=$this->comment->get_comment($id);
	$data['posts']=$this->post->get_post_by_id($id);
	
$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['photo'] = @$details[0]->photo;


			$this->load->helper('smiley');
	    	$this->load->library('table');
	    	$image_array=get_clickable_smileys(base_url().'smileys/','comment');
	    	$col_array=$this->table->make_columns($image_array,10);
	    	$myp['smiley_table']=$this->table->generate($col_array);

	$this->load->view('upr/header',$myp);
	$this->load->view('upr/reading',$cm,$cat);
	$this->load->view('upr/jquery',$userdata);
	$this->load->view('upr/readpost',$data,$cat);
	//$this->load->view('upr/socialheader');
}
function getposts(){
$this->load->model('post');
$data['posts']=$this->post->get_posts();
$this->load->view('admin/viewpost',$data);

}

function new_post(){
	$this->load->model('post');
    	if($_POST){
    	$data=array(
			'title'=>$_POST['title'],
             'video'=>$_POST['video'],
             'des'=>$_POST['des'],
             'code'=>$_POST['code'],
             'cate'=>$_POST['cate'],
             'sub_cate'=>$_POST['sub_cate'],
             'active'=>1
			);
   $this->post->insert_post($data);
   echo "Data Inserted";
   //redirect(base_url().'index.php/posts/newpost');
}else{

	$this->load->view('admin/newpost');
}
}
function editpost($postID){
	$this->load->model('post');
    	if($_POST){
    	$data_post=array(
			'title'=>$_POST['title'],
             'video'=>$_POST['video'],
             'des'=>$_POST['des'],
             'code'=>$_POST['code'],
             'cate'=>$_POST['cate'],
             'sub_cate'=>$_POST['sub_cate'],
             'active'=>1
			);
	$this->post->update_post($postID,$data_post);
	}else{
	$data['posts']=$this->post->get_post_by_id($postID);
	$this->load->view('admin/editpost',$data);
	}
}
function deletepost($postID)
{

$this->post->delete_post($postID);
redirect(base_url().'index.php/posts/getposts');
}

   
}