<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
    public function index()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('upr/header');
			$this->load->view('upr/reading');
			$this->load->view('upr/header2');
			$this->load->view('upr/jquery');
			$this->load->view('upr/login');
			
		}
		else
		{
			// check for user credentials
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				//redirect("home/index/");
				redirect("login/red");
				//redirect(prep_url());
			}
			else
			{
				$this->session->set_flashdata('msg', 'Sorry ! Incorrect Email-ID or Password.');
				redirect('login/index');
			}
		}
    }










public function mylock()
    {
    	$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
		
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('upr/header');
			$this->load->view('upr/reading');
			$this->load->view('upr/header2');
			$this->load->view('upr/jquery');
			$this->load->view('upr/lockscreen');
			
		}
		else
		{
			// check for user credentials
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				redirect("home/index/");
			}
			else
			{
				$this->session->set_flashdata('msg', 'Sorry ! Incorrect Email-ID or Password.');
				redirect('login/mylock');
			}
		}
    }

function red(){
	$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['photo'] = @$details[0]->photo;
			$this->load->view('upr/redirect',$userdata);
			$this->load->view('upr/header');
			$this->load->view('upr/reading');
			$this->load->view('upr/header2');
			$this->load->view('upr/jquery');


}

function ok(){
	redirect('home/index');
}
     public function lock()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('upr/header');
			$this->load->view('upr/reading');
			$this->load->view('upr/header2');
			$this->load->view('upr/jquery');
			$this->load->view('upr/lockscreen');
			
		}
		else
		{
			// check for user credentials
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				redirect("home/index/");
				
			}
			else
			{
				$this->session->set_flashdata('msg', 'Sorry ! Incorrect Email-ID or Password.');
				redirect('login/index');
			}
		}
    }
}