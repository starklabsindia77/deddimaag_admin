<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
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
        
    }

    /* function register()
    {

        $m = html_escape($this->input->post('materialRegisterFormPhone'));
        
        $response = $this->crud_model->register();
        if ($response->status == 1){
            $this->session->set_flashdata('mobile', $m);
            redirect(base_url('auth/validation'), 'refresh');          
        }
        else {
           $this->session->set_flashdata('messages', $response->message);
           $this->session->set_flashdata('respStatus', $response->status);
           redirect(base_url(), 'refresh');  
        }
        
    } */

    function login()
    {
      
          $response = $this->crud_model->login();
          /* print($response);
          die(); */
          
          if ($response->user_status == true) {
            $this->session->set_userdata('user_login', '1');
            $this->session->set_userdata('user_id', $response->user_id);
            $this->session->set_userdata('username', $response->username);       
            redirect(base_url('admin/dashboard'), 'refresh');
            
               
          }          
          else {
            $this->session->set_flashdata('login_error', 'credential are wrong');
            redirect(base_url(), 'refresh');
          }

          
       

    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }
    

   
    
    
}
