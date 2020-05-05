<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class Modal extends CI_Controller {


	function __construct()
	{
		parent::__construct();
        $this->load->library('session');
    
       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
  }
	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{

	}


	/*
	*	$page_name		=	The name of page
	*/
	function popup($page_name = '' , $param2 = '' , $param3 = '')
	{
		
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$this->load->view( 'backend/pages/'.$page_name.'.php' ,$page_data);

	}
}
