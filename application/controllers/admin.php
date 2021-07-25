<?php
class Admin extends CI_Controller{

public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('adminmodel');
		$this->load->model('expert');
	}

	function home()
	{
		$this->load->view('admin/adminhome');
	}
	function index(){
		$data['error']=0;
		if($_POST){
			$this->load->model('adminpanel');
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);

			$user=$this->adminpanel->login($username,$password);
			if(!$user){
				$data['error']=1;
			}else{
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url().'index.php/admin/profile');		
			}
		}
	$this->load->view('admin/admin',$data);
}
function profile()
	{
		$this->load->model('adminmodel');
		$details = $this->adminmodel->get_user_by_id($this->session->userdata('uid'));
		$data['username'] = $details->username;
		$data['password'] = $details->password;
		$this->load->view('admin/profile_view', $data);
	
	}
function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/admin/index');
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
   
   redirect(base_url().'index.php/admin/getposts');
}else{

	$this->load->view('admin/newpost');
}
}
function editpost($postID){
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
	$this->post->update_post($postID,$data);
	redirect('admin/getposts');
	}else{

	$data['posts']=$this->post->get_post_by_id($postID);
	$this->load->view('admin/editpost',$data);
	}
}
function deletepost($postID)
{
	$this->load->model('post');
$this->post->delete_post($postID);
redirect(base_url().'index.php/admin/getposts');
}
}
?>