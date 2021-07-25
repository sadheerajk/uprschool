<?php
class Upradmin extends CI_Controller{
	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('upradmin');
			$email=$this->input->post('email',true);
			$password=$this->input->post('password',true);

			$user=$this->account->login($email,$password);
			if(!$user){
				$data['error']=1;
			}else{
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url().'index.php/person/index');
		
			}
		}
	
		$this->load->view('upradmin/login',$data);

}
function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home/');
	}
}


?>