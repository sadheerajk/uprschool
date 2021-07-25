<?php
class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('search_model');
        $this->load->model('user_model');
    
    }
    public function index()
    {
        
        $s['key']=$this->input->post("book_name");
        $config['base_url']= site_url('search/index');
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page']= "6";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        // integratebootstrap pagination
      
        $config['prev_link'] = '«';
        $config['prev_link'] = '« pre'  ;
        $config['next_link'] = '»';
       $config['next_link'] = 'Next »';
        $this->pagination->initialize($config);
        $data['page'] =($this->uri->segment(3)) ?
$this->uri->segment(3) : 0;
        // get books list
        $data['booklist'] =$this->search_model->get_books($config["per_page"], $data['page'], NULL);
        $data['pagination']= $this->pagination->create_links();
        // load view

        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $userdata['firstname'] = @$details[0]->fname;
        $userdata['lastname'] = @$details[0]->lname;
        $userdata['photo'] = @$details[0]->photo;
          $this->load->view('upr/header');
          $this->load->view('upr/reading',$userdata);
$this->load->view('upr/jquery',$s);
        $this->load->view('upr/more_view',$data);
    }
    function find()
    {
        // get search string
        $s['key']=$this->input->post("book_name");
        $search = ($this->input->post("book_name"))?$this->input->post("book_name") : "NIL";
        $search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;
     
        $config = array();
        $config['base_url']= site_url("search/find/$search");
        $config['total_rows'] = $this->search_model->get_books_count($search);
        $config['per_page']= "4";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        
     
        $config['prev_link'] = '< Prev';
       
        $config['next_link'] = 'Next >';
      
        $this->pagination->initialize($config);
        $data['page'] =($this->uri->segment(4)) ?
$this->uri->segment(4) : 0;
        // get books list
        $data['booklist'] =$this->search_model->get_books($config['per_page'], $data['page'], $search);
        $data['pagination']= $this->pagination->create_links();
        //load view

        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $userdata['firstname'] = @$details[0]->fname;
        $userdata['lastname'] = @$details[0]->lname;
        $userdata['photo'] = @$details[0]->photo;
        $this->load->view('upr/header',$s);
        $this->load->view('upr/reading',$userdata);
$this->load->view('upr/jquery',$s);
        $this->load->view('upr/search_view',$data);
        
    }
}
?>