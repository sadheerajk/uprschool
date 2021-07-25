<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	function index()
	{
	

		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|xss_clean]');
		$this->form_validation->set_rules('date', 'Birthday', 'trim|required|xss_clean]');
		//$this->form_validation->set_rules('photo', 'Identity (Photo)', 'required');
		$this->form_validation->set_rules('terms_and_policy', 'Accept Policy', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('upr/header');
			$this->load->view('upr/jquery');
			$this->load->view('upr/reading');
			$this->load->view('upr/signup_view');
        }
		else
		{

if($_POST){
	
	$image=time().$_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profiles/".$image);

    	$data=array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'sex' => $this->input->post('sex'),
				'password' => $this->input->post('password'),
				'date' => $this->input->post('date'),
				'terms_and_policy' => $this->input->post('terms_and_policy'),
			'photo'=>$image,
	

			);
			}
			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('login/index');
				/*$last = $this->db->order_by('id',"desc")->limit(1)->get('user')->row();
				print_r($last);
				redirect('signup/index/'.$last);*/
				//redirect('signup/photo/');
			/*	$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
$this->load->view('upr/header');
$this->load->view('upr/pic',$userdata);*/

			}

			else
			{
				
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup/index');
				
			}
		}
	
		}
	

	function photo(){
		if($_POST){
$image=time().$_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profiles/".$image);

    	$data=array(
			'photo'=>$image
			);
			}
			if ($this->user_model->pic($id,$data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				//redirect('signup/index');

				redirect('signup/photo');
			}

			else
			{
				
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup/index');
				
			}
}


function update_account($id){

	$this->load->model('user_model');
if($_POST){
	   $image=time().$_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profiles/".$image);

    	$data=array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'date' => $this->input->post('date'),
				'password' => $this->input->post('password'),
				'photo'=> $image
				);
		}
	$this->user_model->update($id,$data);
			redirect('profile/index');

}



}



