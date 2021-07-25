<?php
class Home extends CI_Controller{


function index($start=0){
$this->load->model('post');	
$this->load->model('user_model');	

$data['posts']=$this->post->get_posts(12,$start);
$this->load->library('pagination');
$config['base_url']=base_url().'index.php/home/index/';
$config['total_rows']=$this->post->get_posts_count();
$config['per_page']=4;
$this->pagination->initialize($config);
$data['pages']=$this->pagination->create_links();

$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['photo'] = @$details[0]->photo;

$this->load->view('upr/header',$userdata);
$this->load->view('upr/reading');
$this->load->view('upr/jquery');
$this->load->view('upr/home',$data);
}


	/*function index(){
$this->load->model('post');
$data['posts']=$this->post->get_posts();
$this->load->view('upr/header');
$this->load->view('upr/jquery');
$this->load->view('upr/home',$data);

	}*/
}
	
	/*function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		//redirect('home/index');
		redirect(base_url().'index.php/home/index');
	}*/
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home/');
	}
?>