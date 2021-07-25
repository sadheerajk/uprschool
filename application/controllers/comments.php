<?php
class Comments extends CI_Controller{
	    function add_comment($id,$cat,$firstname,$lastname,$image){
	    	if($_POST){
if ($this->session->userdata('login')){

	    	$this->load->model('comment');
	    	$data=array(
	    		'postID'=>$id,
	    		'firstname'=>$firstname,
	    		'lastname'=>$lastname,
	    		'comment'=>$_POST['comment'],
	    		'photo'=>$image,
	    		);
	    	$this->comment->add_comment($data);
	    	//redirect(base_url().'index.php/posts/readpost/'.$id);
	    	redirect(base_url().'index.php/posts/readpost/'.$id.'/'.$cat);
	    }else{
	    		$this->load->model('comment');
	    		
	    	$data=array(
	    		'postID'=>$id,
	    		'firstname'=>$_POST['firstname'],
	    		'lastname'=>$_POST['lastname'],
	    		'comment'=>$_POST['comment'],
	    		'photo'=>$_POST['image'],
	    		
	    		);
	    	$this->comment->add_comment($data);
	    		redirect(base_url().'index.php/posts/readpost/'.$id.'/'.$cat);
	    }
	    	//redirect(base_url().'index.php/posts/viewpost/');
	    	$cm['comments']=$this->comment->get_comment($id);
	    	$this->load->view('upr/jquery');
	    	$this->load->view('upr/header');
	    	$this->load->view('upr/posts',$cm);
	    }
	    }
	    function view_comment(){

	    	$this->load->model('comment');
	    	$cm['comments']=$this->comment->get_comment();
	    	$this->load->view('upr/jquery');
	    	$this->load->view('upr/header');
	    	$this->load->view('upr/posts',$cm);
	    }
	
}

?>