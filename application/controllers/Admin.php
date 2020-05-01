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


    
    
}