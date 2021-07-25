<?php
class Languages extends CI_Controller{

function index($start=0,$cat){
$this->load->model('cplusplus');	
$data['posts']=$this->cplusplus->get_posts(6,$start,$cat);
$this->load->library('pagination');
$config['base_url']=base_url().'index.php/home/index/';
$config['total_rows']=$this->post->get_posts_count();
$config['per_page']=4;
$this->pagination->initialize($config);
$data['pages']=$this->pagination->create_links();
$this->load->view('upr/header');
$this->load->view('upr/jquery');
$this->load->view('upr/home',$data);
}

function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home/');
	}
}
?>


