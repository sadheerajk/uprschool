<?php
class Accounts extends CI_Controller{
	function register(){
	if($_POST){
$data['errors']=0;	
			$config=array(

						array(
								'field'=>'firstname',
								'label'=>'Firstname',
								'rules'=>'trim|required|min_length[3]'
							),
						array(
								'field'=>'lastname',
								'label'=>'Lastname',
								'rules'=>'trim|required|min_length[3]'
							),
						array(
								'field'=>'email',
								'label'=>'E-mail',
								'rules'=>'trim|required|is unique[users.email]'
							),
						array(
								'field'=>'password',
								'label'=>'Password',
								'rules'=>'trim|required|min_length[5]'
							),
						array(
								'field'=>'confirmed',
								'label'=>'confirmed',
								'rules'=>'trim|required|min_length[5]|matches[password]'
							),
							
							array(
								'field'=>'gender',
								'label'=>'Gender',
								'rules'=>'required'
							),
						
						array(
								'field'=>'birthday',
								'label'=>'birthday',
								'rules'=>'trim|required'
							)				

					);

					$this->load->library('form_validation');
					$this->form_validation->set_rules($config);
					if($this->form_validation->run()==FALSE){
						$data['errors']=validation_errors();
					}else{

			$data=array(
						'firstname'=>$_POST['firstname'],
						'lastname'=>$_POST['lastname'],
						'email'=>$_POST['email'],
						'password'=>sha1($_POST['password']),
						'gender'=>$_POST['gender'],
						//'username'=>$_POST['username'],
						//'password'=>sha1($_POST['password']),
						'birthday'=>$_POST['birthday']
						);
			if(($this->session->userdata('captcha') !=($_POST['captcha']))){
	    		echo "<p>The captcha code was incorrect! <br>You typed in <b>".$_POST['captcha']."</b> and the code was <b>".$this->session->userdata('captcha')."</b></p>";
	    	}else{
			$this->load->model('account');
			$userid=$this->account->new_account($data);
			$this->load->view('upr/header');
		redirect(base_url().'index.php/home');		}
	}
}
$this->load->helper('captcha');
$vals=array(
	'img_path'=>'./captcha/',
	'img_url'=>base_url().'captcha/',
	'img_width'=>180,
	'img_height'=>40
	);
$cap=create_captcha($vals);
$this->session->set_userdata('captcha',$cap['word']);
$data['captcha']=$cap['image'];
		$this->load->helper('form');
		$this->load->view('upr/jquery');
		$this->load->view('upr/header');
		$this->load->view('upr/register',$data);

	}
	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('account');
			$email=$this->input->post('email',true);
			$password=$this->input->post('password',true);

			$user=$this->account->login($email,$password);
			if(!$user){
				$data['error']=1;
			}else{
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url().'index.php/home/');
		
			}
		}
		$this->load->view('upr/header');
		$this->load->view('upr/jquery');
		$this->load->view('upr/login',$data);
}
function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home/');
	}

function lock(){
	
		//redirect(base_url().'index.php/home/');
$this->load->model('user_model');

//$i=$_POST['id'];

	$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['email'] = @$details[0]->email;
		$userdata['photo'] = @$details[0]->photo;
		$userdata['password'] = @$details[0]->password;
		$this->load->view('upr/header');
		$this->load->view('upr/header2');
		$this->load->view('upr/jquery');
		$this->load->view('upr/reading');
		$this->load->view('upr/lockscreen',$userdata);
}



/*
function username(){
	$this->load->model('account');
	$data['info']=$this->account->username();
	$this->load->view('upr/header');
	$this->load->view('upr/jquery');
	$this->load->view('upr/home',$data);
}*/
function username(){
	if($_POST){
	$username=$_POST['username'];
	$this->load->model('account');
	$username=$this->session->set_userdata('userID',$user['userID']);
	$d['username']=$this->account->username($username);
	$this->load->view('upr/jquery');
	$this->load->view('upr/header');
	$this->load->view('home',$d);
	}
}



}
?>