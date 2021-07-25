<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');

	}
	
	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$userdata['firstname'] = @$details[0]->fname;
		$userdata['lastname'] = @$details[0]->lname;
		$userdata['photo'] = @$details[0]->photo;
		$userdata['email'] = @$details[0]->email;
		$userdata['sex'] = @$details[0]->sex;
		$userdata['date'] = @$details[0]->date;
		$userdata['date_added'] = @$details[0]->date_added;
		$userdata['password'] = @$details[0]->password;
		$userdata['id'] = @$details[0]->id;


		$this->load->view('upr/header');
		$this->load->view('upr/reading');
		$this->load->view('upr/jquery');
		$this->load->view('upr/profile_view',$userdata);
	}
}

