<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		
        $this->load->library('session');

       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    }
	
	public function index()
    {
        /*if ($this->session->userdata('login_type') != 'Admin')
            redirect(site_url(), 'refresh');
        if ($this->session->userdata('login_type') == 'Admin')
            redirect(site_url('admin/dashboard'), 'refresh');*/
        $page_data['page_title'] = 'Admin Login';
        $this->load->view('auth/login', $page_data);
    }

    function dashboard()
    {
        /* if ($this->session->userdata('login_type') != 'admin')
            redirect(site_url(), 'refresh'); */
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function news($param1 = "", $param2 = "")
    {   
        if ($param1 == 'create') {
          $result = $this->crud_model->create_news();
          if(isset($result)){
            redirect(base_url('admin/news'), 'refresh');   
          }else {
            redirect(base_url('admin/dashboard'), 'refresh');
          }
        }

        if ($param1 == 'edit') {
            
        }

        if ($param1 == 'delete') {
            
        }
        $page_data['news'] = $this->crud_model->get_news();
        $page_data['page_name']  = 'news';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data); 
    }


    function ecommerce_frontend(){
        $page_data['page_name']  = 'ecommerce_frontend';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function offers(){
        $page_data['page_name']  = 'offers';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }
    function homePage_video()
    {
        $page_data['page_name']  = 'homepage_video';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function watch()
    {
        $page_data['page_name']  = 'watch';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }



    
    
}