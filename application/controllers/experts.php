<?php
class Experts extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('expert');
	}
	function index()
	{
	
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|xss_clean]');
		$this->form_validation->set_rules('date', 'Birthday', 'trim|required|xss_clean]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
		$this->form_validation->set_rules('e_type', 'Expert Type', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('upr/header');
			$this->load->view('upr/jquery');
			$this->load->view('upr/reading');
			$this->load->view('upr/expert_signup');
        }
		else
		{

if($_POST){
	
	$image=time().$_FILES["image"]["name"];
	//move_uploaded_file($_FILES["image"]["tmp_name"],"experts/".$image);
	move_uploaded_file($_FILES["image"]["tmp_name"],"profiles/".$image);

    	$data=array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'sex' => $this->input->post('sex'),
				'password' => $this->input->post('password'),

				'date' => $this->input->post('date'),
				'e_type' => $this->input->post('e_type'),
			'photo'=>$image,
	
			);
			}
			if ($this->expert->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('experts');

			}

			else
			{
				
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				//redirect('signup/index');
				
			}
		}
	
		}
	
public function e_login()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");
        $e_type = $this->input->post("e_type");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		$this->form_validation->set_rules("e_type", "Type", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('upr/header');
			$this->load->view('upr/reading');
			$this->load->view('upr/header2');
			$this->load->view('upr/jquery');
			$this->load->view('upr/expert_login');
			
		}
		else
		{
			
			$uresult = $this->expert->get_user($email, $password,$e_type);
			if (count($uresult) > 0)
			{
				
				$sess_data = array('elogin' => TRUE, 'ename' => $uresult[0]->fname, 'eid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				redirect("experts/expert_home/");
				
			}
			else
			{
				$this->session->set_flashdata('msg', 'Sorry ! Incorrect Email-ID or Password.');
				redirect('expert/e_login');
			}
		}
    }

function expert_home(){

$details = $this->expert->get_user_by_id($this->session->userdata('eid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['email'] = @$details[0]->email;
		$userdata['photo'] = @$details[0]->photo;
		$userdata['e_type'] = @$details[0]->e_type;

			$x['cm'] = $this->expert->get_forum();

			$this->load->view('upr/reading',$x);
			$this->load->view('upr/jquery');
			$this->load->view('upr/expert_home',$userdata);
}


function editcomment($postID){
	
		$data_post=array(
        'active'=>1
			);
	$this->expert->update_comment($postID,$data_post);
	redirect(base_url().'index.php/experts/expert_home');
	

}
function deletecomment($postID)
{	
$this->expert->delete_comment($postID);
redirect(base_url().'index.php/experts/expert_home');
}
function addcomment($id){


$details = $this->expert->get_user_by_id($this->session->userdata('eid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['email'] = @$details[0]->email;
		$userdata['photo'] = @$details[0]->photo;
		$userdata['e_type'] = @$details[0]->e_type;

		$x['cm'] = $this->expert->get_forum();



	if($_POST){
$data_post=array(
						'firstname'=>$_POST['firstname'],
						'lastname'=>$_POST['lastname'],
						'postID'=>$id,
						'photo'=>$_POST['photo'],
						'comment'=>$_POST['comment'],
						'active'=>1
						);
	$this->expert->add_comment($data_post);
	redirect(base_url().'index.php/experts/expert_home');

}else{
	$this->load->view('upr/header',$x);
			$this->load->view('upr/jquery');
			$this->load->view('upr/reading');
			$this->load->view('upr/reply',$userdata);
}

}
}

?>