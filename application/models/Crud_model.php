<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }


    
   // auth model  Start//


    function login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $data['emailORphnno'] = $email;
      $data['password'] = $password;

      $parameters = json_encode($data);

      $url = "http://18.191.31.131:8000/auth/login/";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      return json_decode($result);

    }

    // auth model end //


    //news model start//

    function create_news()
    {
        $data['Title'] = html_escape($this->input->post('Heading'));
        $data['SubTitle'] = html_escape($this->input->post('SubHeading'));
        $data['ContributedBy'] = html_escape($this->input->post('ContributedBy'));
        $data['InstagramId'] = html_escape($this->input->post('InstaID'));
        $data['FaceBookId'] = html_escape($this->input->post('FacebookID'));
        $data['TwitterId'] = html_escape($this->input->post('TwitterID'));
        $data['Content'] = html_escape($this->input->post('content'));

        $parameters = json_encode($data);

        $url = "http://18.191.31.131:8000/api/news/";
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    function get_news()
    {
        $url = "http://18.191.31.131:8000/api/news/";
        $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);
      return $response;
    }

    //news model end//

    

    

    
}
