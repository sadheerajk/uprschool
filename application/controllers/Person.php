<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
	}
public function adminhome(){
	$this->load->view('admin/adminhome');
	$this->load->view('upr/jquery');
	$this->load->view('upr/reading');

}
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('admin/person_view');
	}
	public function ajax_list()
	{
		$this->load->helper('url');
		
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->title;
			$row[] = $person->video;
			$row[] = $person->des;
			$row[] = $person->code;
			$row[] = $person->cate;
			$row[] = $person->sub_cate;
			

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		
		$data = array(
				'title' => $this->input->post('title'),
	
				'des' => $this->input->post('des'),
	
				'cate' => $this->input->post('cate'),
	
				
			);

		$insert = $this->person->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'title' => $this->input->post('title'),
				'video' => $this->input->post('video'),
				'des' => $this->input->post('des'),
				'code' => $this->input->post('code'),
				'cate' => $this->input->post('cate'),
				'sub_cate' => $this->input->post('sub_cate'),
				'active'=>1,
			);
	

		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		//delete file
		$person = $this->person->get_by_id($id);
		
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('title') == '')
		{
			$data['inputerror'][] = 'title';
			$data['error_string'][] = 'Post title is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('des') == '')
		{
			$data['inputerror'][] = 'des';
			$data['error_string'][] = 'Video Description is required';
			$data['status'] = FALSE;
		}

	
		if($this->input->post('cate') == '')
		{
			$data['inputerror'][] = 'cate';
			$data['error_string'][] = 'Please Select Category';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('upradmin');
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);

			$user=$this->upradmin->login($username,$password);
			if(!$user){
				$data['error']=1;
			}else{
				$this->session->set_userdata('login',$user['userID']);
				redirect(base_url().'index.php/person/adminhome');		
			}
		}
		
		
		$this->load->view('admin/admin',$data);

}

function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/person/login');
	}



}



