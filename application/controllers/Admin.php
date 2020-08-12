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
        
        
        $page_data['page_title'] = 'Admin Login';
        $this->load->view('auth/login', $page_data);
    }

    function dashboard()
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['quote'] = $this->crud_model->get_quote_id(1);
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function news($param1 = "", $param2 = "")
    {   
        /*if ($this->session->userdata('user_login') != 1)
            redirect(base_url('admin/dashboard'), 'refresh');*/
        

        if ($param1 == 'delete') {
             $response = $this->crud_model->delete_news($param2);
            if(empty($response)){
                redirect(base_url('admin/offers'), 'refresh');
            }else{
                redirect(base_url('admin/dashboard'), 'refresh');
            }
        }
        $page_data['news'] = $this->crud_model->get_news();
        $page_data['page_name']  = 'news';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data); 
    }


    function ecommerce_frontend(){
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'ecommerce_frontend';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function offers($param1 = "", $param2 = ""){
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'delete') {
            $response = $this->crud_model->delete_offers($param2);
            if(empty($response)){
                redirect(base_url('admin/offers'), 'refresh');
            }else{
                redirect(base_url('admin/dashboard'), 'refresh');
            }
        }
        $page_data['offers'] = $this->crud_model->get_offers();
        $page_data['page_name']  = 'offers';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }
    function homePage_video()
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['video'] =$this->crud_model->get_homepage_video(1);
        $page_data['page_name']  = 'homepage_video';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function watch($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'deleteVideo') {
            $response = $this->crud_model->delete_video($param2);
            if(empty($response)){
                redirect(base_url('admin/watch'), 'refresh');
            }else{
                redirect(base_url('admin/dashboard'), 'refresh');
            }
        }
        if ($param1 == 'deleteCollection') {
            $response = $this->crud_model->delete_videoCollection($param2);
            if(empty($response)){
                redirect(base_url('admin/watch'), 'refresh');
            }else{
                redirect(base_url('admin/dashboard'), 'refresh');
            }
        } 
        $page_data['page_name']  = 'watch';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);
    }

    function sectionOne()
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'section_one';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);   
    }

    function sectionTwo()
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'section_two';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);   
    }

    function sectionThree()
    {
        if ($this->session->userdata('user_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'section_three';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data);   
    }

    function suggestion($param1 = "", $param2 = "")
    {   
        /*if ($this->session->userdata('user_login') != 1)
            redirect(base_url('admin/dashboard'), 'refresh');*/
        $page_data['suggestion'] = $this->crud_model->suggestion_api();
        $page_data['page_name']  = 'suggestion_page';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data); 
    }

    function customer($param1 = "", $param2 = "")
    {   
        
        $page_data['customer'] = $this->crud_model->customer_api();
        $page_data['page_name']  = 'customer_data';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data); 
    }

    function collections($param1 = "", $param2 = "")
    {   
        
        $page_data['collection'] = $this->crud_model->get_collection_api();
        $page_data['page_name']  = 'collection_data';
        $page_data['page_title'] = 'Admin dashboard';
        $this->load->view('backend/index', $page_data); 
    }




    
    
}